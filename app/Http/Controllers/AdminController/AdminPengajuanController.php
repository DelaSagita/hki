<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimaduPegawai;
use App\Models\CategoryModel;
use App\Models\AdminModel\Revisi;
use App\Models\AdminModel\Pengajuan;
use App\Models\AdminModel\Sertifikat;
use PhpOffice\PhpWord\TemplateProcessor;
use Str;
use DB;




class AdminPengajuanController extends Controller
{
    function index(){

        $data['list_pengajuan'] = DB::table('pengajuan')
        ->join('category', 'pengajuan.id_category', '=', 'category.id')
        ->join('simadu__pegawai', 'pengajuan.id_pegawai', '=', 'simadu__pegawai.id')
        ->get();

        return view('admin.pengajuan.index', $data);
    }
    function add(){

        $category['list_category'] = CategoryModel::all();
        $pegawai['list_pegawai'] = SimaduPegawai::all();
        return view('admin.pengajuan.add',  $category,$pegawai);
    }

    function addAct(Request $request){


        $datacategory = CategoryModel::find($request->id_category);
        $dataPegawai = SimaduPegawai::find($request->id_pegawai);

        $pengajuan = new Pengajuan;

        $pengajuan->id_pegawai = $request->id_pegawai;
        $pengajuan->id_category = $request->id_category;
        $pengajuan->status = 'Baru';
        $pengajuan->keterangan = $request->keterangan;
        $pengajuan->judul = $request->judul;
        $pengajuan->tgl_upload = $request->tgl_upload;
        $tempatFileDefault = public_path('app/pengajuan/format/master-data.docx');
        $namaFileRandom = Str::random(3).'-'.$dataPegawai->nama;
        $isiData = [
            'nama' =>  $dataPegawai->nama,
            'email' => $dataPegawai->email,
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'alamat' => $dataPegawai->alamat,
            'tanggal' => $request->tgl_upload,
        ];
        $output = $this->document($tempatFileDefault,  $namaFileRandom,   $isiData);

         $pengajuan->file =  $output;
         $pengajuan->save();

         return redirect('admin/pengajuan')->with('success','Data berhasil ditambahkan');


    }

    function document($tempatFileDefault,  $namaFileRandom,   $isiData){
        $template = new TemplateProcessor($tempatFileDefault);
        foreach ($isiData as $key => $value) {
            $template->setValue($key, $value);
        }
        $template->saveAs(public_path("app/pengajuan/docx/$namaFileRandom.docx"));


        return "app/pengajuan/docx/$namaFileRandom.docx";
    }


    function show(Pengajuan $pengajuan){

        $data['pengajuan'] = DB::table('pengajuan')
        ->join('category', 'pengajuan.id_category', '=', 'category.id')
        ->join('simadu__pegawai', 'pengajuan.id_pegawai', '=', 'simadu__pegawai.id')
        ->get();
        return view('admin.pengajuan.show', $data);
    }

    function verifikasi(Pengajuan $pengajuan){


        $pengajuan->status = 'Terverfikasi';
        $pengajuan->update();

        return redirect()->back()->with('success', 'Data berhasil diverifikasi.');
    }

    function delete(Pengajuan $pengajuan){

        $path = public_path($pengajuan->file);
        if(file_exists($path)){
            unlink($path);
            $pengajuan->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        }else{
            $pengajuan->delete();
            return redirect()->back()->with('danger', 'Data berhasil dihapus.');
        }

    }

    function upload(Request $request){


        $sertifikat = new Sertifikat;
        $sertifikat->id_pengajuan = $request->id_pengajuan;
        $sertifikat->id_pegawai = $request->id_pegawai;
        $random = Str::random(6);
        $ds = public_path("app/sertifikat");
        $file = $request->file('file_sertifikat');



        $fm = $random.'.'.$file->extension();
        $um = $file->move($ds, $fm);

        $sertifikat->file_sertifikat = 'app/sertifikat/'.$fm;
        $sertifikat->save();
        return redirect()->back()->with('success', 'Sertifikat berhasil diupload, silahkan lihat di menu sertifikat');
    }


    function revisi(Request $request){



        $revisi = new Revisi;
        $revisi->id_pegawai = $request->id_pegawai;
        $revisi->id_pengajuan = $request->id_pengajuan;
        $revisi->pesan = $request->pesan;
        $revisi->status = 'Baru';
        $revisi->save();

        $pengajuan = Pengajuan::find($request->id_pengajuan);
        $pengajuan->status = 'Revisi';
        $pengajuan->update();


        return redirect()->back()->with('success', 'Revisi berhasi dikirim');
    }








}
