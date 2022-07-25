<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimaduPegawai;
use Str;
use DB;


class AdminPegawaiController extends Controller
{
    function index(){
        $data['list_pegawai'] = SimaduPegawai::all();
        return view('admin.pegawai.index', $data);
    }
    function create(){
        return view('admin.pegawai.create');

    }
    function add(Request $request){

        $request->validate([
            'nip' => ['required'],
            'nup' => ['required'],
            'nik_ktp' => ['required'],
            'nama' => ['required'],
            'email' => ['required'],
            'gelar_depan' => ['required'],
            'gelar_belakang' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required'],
            'jenis_kelamin' => ['required'],
            'agama' => ['required'],
            'password' => ['required']
        ]);



        $pegawai = new SimaduPegawai;
        $pegawai->id = Str::random(36);
        $pegawai->nip = $request->nip;
        $pegawai->nup = $request->nup;
        $pegawai->nik_ktp = $request->nik_ktp;
        $pegawai->nama = $request->nama;
        $pegawai->email = $request->email;
        $pegawai->gelar_depan = $request->gelar_depan;
        $pegawai->gelar_belakang = $request->gelar_belakang;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->agama = $request->agama;
        $pegawai->password = bcrypt($request->password);
        $pegawai->save();


        return back()->with('success', 'Data Pegawai Berhasil Ditambahkan');
    }
    function show(SimaduPegawai $SimaduPegawai){

       $data['pegawai'] = $SimaduPegawai;


        return view('admin.pegawai.show', $data);
    }

    function update(SimaduPegawai $SimaduPegawai){

       $data['pegawai'] = $SimaduPegawai;


        return view('admin.pegawai.update', $data);
    }
    function updateAct(Request $request, SimaduPegawai $SimaduPegawai){

        if ($request->password == '') {
            $SimaduPegawai->nip = $request->nip;
            $SimaduPegawai->nup = $request->nup;
            $SimaduPegawai->nik_ktp = $request->nik_ktp;
            $SimaduPegawai->nama = $request->nama;
            $SimaduPegawai->email = $request->email;
            $SimaduPegawai->gelar_depan = $request->gelar_depan;
            $SimaduPegawai->gelar_belakang = $request->gelar_belakang;
            $SimaduPegawai->tempat_lahir = $request->tempat_lahir;
            $SimaduPegawai->tanggal_lahir = $request->tanggal_lahir;
            $SimaduPegawai->jenis_kelamin = $request->jenis_kelamin;
            $SimaduPegawai->agama = $request->agama;
            $SimaduPegawai->update();
             return redirect('admin/pegawai')->with('success', 'Data berhasil diupdate');
        }else{
            $SimaduPegawai->nip = $request->nip;
            $SimaduPegawai->nup = $request->nup;
            $SimaduPegawai->nik_ktp = $request->nik_ktp;
            $SimaduPegawai->nama = $request->nama;
            $SimaduPegawai->email = $request->email;
            $SimaduPegawai->gelar_depan = $request->gelar_depan;
            $SimaduPegawai->gelar_belakang = $request->gelar_belakang;
            $SimaduPegawai->tempat_lahir = $request->tempat_lahir;
            $SimaduPegawai->tanggal_lahir = $request->tanggal_lahir;
            $SimaduPegawai->jenis_kelamin = $request->jenis_kelamin;
            $SimaduPegawai->agama = $request->agama;
            $SimaduPegawai->password =  bcrypt($request->password);
            $SimaduPegawai->update();
            return redirect('admin/pegawai')->with('success', 'Data berhasil diupdate');
        }


        return redirect('admin/pegawai/update/', $SimaduPegawai->id)->back()->with('danger', 'Terjadi kesalahan, coba ulangi kembali');


    }
    function delete(Request $request, SimaduPegawai $SimaduPegawai){

        $SimaduPegawai->delete();
        return redirect('admin/pegawai')->with('success', 'Data berhasil dihapus');

    }
}
