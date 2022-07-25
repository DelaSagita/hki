<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pengelola;
use App\Models\CategoryModel;
use App\Models\SimaduPegawai;
use App\Models\HakCipta\HakCipta;
use App\Models\HakPaten\Kepemilikan;
use App\Models\AdminModel\Merek;

use Illuminate\Http\Request;

class UiController extends Controller
{

    public function index()
    {
        $category = CategoryModel::all();
        $asu = Pengelola::all();
        $hakcipta = HakCipta::all()->count();
        $kepemilikan = Kepemilikan::all()->count();
        $merek = Merek::all()->count();
        return view('beranda', compact('asu', 'category', 'merek', 'hakcipta', 'kepemilikan'));
    }


    public function direktur()
    {
        $asu = Pengelola::all();
        $hakcipta = HakCipta::all()->count();
        $kepemilikan = Kepemilikan::all()->count();
        $merek = Merek::all()->count();
        $pegawai = SimaduPegawai::all()->count();
        return view('direktur', compact('asu', 'merek', 'hakcipta', 'kepemilikan', 'pegawai'));

    }

    public function homedosen()
    {
        $tampil = Pengelola::all();
        $hakcipta = HakCipta::all()->count();
        $kepemilikan = Kepemilikan::all()->count();
        $merek = Merek::all()->count();
        $category = CategoryModel::all()->count();
        return view('homedosen', compact('tampil', 'merek', 'hakcipta', 'kepemilikan', 'category'));
    }




    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
