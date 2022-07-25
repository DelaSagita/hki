<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimaduPegawai;
use App\Models\CategoryModel;
use App\Models\AdminModel\Pengajuan;
use App\Models\AdminModel\Sertifikat;
use PhpOffice\PhpWord\TemplateProcessor;
use Str;
use DB;


class AdminSertifikatController extends Controller
{
    function index(){

        $data['list_sertifikat'] = DB::table('sertifikat')
        ->join('pengajuan', 'sertifikat.id_pengajuan', '=', 'pengajuan.id_pengajuan')
        ->join('category', 'pengajuan.id_category', '=', 'category.id')
        ->join('simadu__pegawai', 'pengajuan.id_pegawai', '=', 'simadu__pegawai.id')
        ->get();

        return view('admin.sertifikat.index', $data);
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
        $pengajuan->status = 'Terverfikasi';
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
            
            return redirect()->back()->with('danger', 'Data gagal dihapus.');
        }
        
      

        
    }
    


   

 

   
}
