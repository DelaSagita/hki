<?php

namespace App\Http\Controllers\PegawaiController;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimaduPegawai;
use App\Models\CategoryModel;
use App\Models\AdminModel\Pengajuan;
use PhpOffice\PhpWord\TemplateProcessor;
use Str;
use DB;


class PegawaipengajuanController extends Controller
{
    function index()
    {
        $id_pegawai = auth('pegawai')->user()->id_pegawai;
        $data['list_pengajuan'] = Pengajuan::join('category', 'pengajuan.id_category', '=', 'category.id')
        ->join('simadu__pegawai', 'pengajuan.id_pegawai', '=', 'simadu__pegawai.id')
        ->get();

        return view('dosen.pengajuan.index', $data);
    }

    function add(){

        $category['list_category'] = CategoryModel::all();
        $pegawai['list_pegawai'] = SimaduPegawai::all();
        return view('dosen.pengajuan.add',  $category,$pegawai);
    }

    function addAct(Request $request){


        $dataCategory = CategoryModel::find($request->id_category);
        $dataPegawai = SimaduPegawai::find($request->id_pegawai);

        $pengajuan = new Pengajuan;

        $pengajuan->id_pegawai = $request->id_pegawai;
        $pengajuan->id_category = $request->id_category;
        $pengajuan->status = 'Belum Terverfikasi';
        $pengajuan->keterangan = $request->keterangan;
        $pengajuan->judul = $request->judul;

        $tempatFileDefault = public_path('app/pengajuan/format/master-data.docx');
        $namaFileRandom = Str::random(5);
        $isiData = [
            'nama' =>  $dataPegawai->nama,
            'email' => $dataPegawai->email,
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'alamat' => $request->keterangan,
        ];
        $output = $this->document($tempatFileDefault,  $namaFileRandom,   $isiData);

         $pengajuan->file =  $output;
         $pengajuan->save();

         return redirect('pengajuan/pegawai')->with('success','Pengajuan berhasil dikirim');


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
        return view('pegawai.pengajuan.show', $data);
    }

    function verifikasi(Pengajuan $pengajuan){


        $pengajuan->status = 'Belum Terverfikasi';
        $pengajuan->update();

        return redirect()->back()->with('success', 'Data berhasil diverifikasi.');
    }



//Revisi
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










    function delete(Pengajuan $pengajuan){

        $path = public_path($pengajuan->file);
        if(file_exists($path)){
            unlink($path);
            $pengajuan->delete();
             return redirect()->back()->with('success', 'Data berhasil dihapus.');
        }else{

            return redirect()->back()->with('danger', 'Data gagal dihapus.');
        }




    }








}
