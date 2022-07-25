<?php

namespace App\Http\Controllers\PegawaiController;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimaduPegawai;
use App\Models\AdminModel\Merek;
use PhpOffice\PhpWord\TemplateProcessor;
use Str;
use DB;


class PegawaiMerekController extends Controller
{

    function index()
    {
        $data = Merek::where('user_id', auth()->user()->id)->get();
        return view('dosen.merek.index', compact('data'));
    }

    function add(){

        $pegawai['list_pegawai'] = SimaduPegawai::all();
        return view('dosen.merek.add',  $pegawai);






    }

    function addAct(Request $request){

        $request->validate([
            'nama_merek' => ['required'],
            'user_id' => ['required'],
            'jenis' => ['required'],
            'foto_merek' => ['required'],
            'foto_ttd' => ['required']
        ]);

            $randomStr = Str::random(5);
            $randomStr1 = Str::random(6);
            $ds = public_path("app/merek");

            $merek = new Merek;
            $merek->nama_pengaju = $request->nama_pengaju;
            $merek->user_id = $request->user_id;
            $merek->nama_merek = $request->nama_merek;
            $merek->jenis = $request->jenis;


            // HeandleFotoMerek
            $fotoMerek = $request->file('foto_merek');
            $fm = $randomStr.'.'.$fotoMerek->extension();
            $um = $fotoMerek->move($ds, $fm);

            $foto_ttd = $request->file('foto_ttd');
            $ft = $randomStr1.'.'.$foto_ttd->extension();
            $ut = $foto_ttd->move($ds, $ft);

            $merek->foto_merek = 'app/merek/'.$fm;
            $merek->foto_ttd = 'app/merek/'.$ft;

            $merek->save();

            return redirect('pegawai/merek')->with('success', 'Data berhasil disimpan.');


    }


    public function show($id)
    {
        $data = Merek::findorfail($id);
        return view('dosen.merek.show', compact('data'));

    }






}
