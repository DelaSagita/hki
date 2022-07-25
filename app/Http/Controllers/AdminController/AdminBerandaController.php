<?php

namespace App\Http\Controllers\AdminController;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimaduPegawai;
use App\Models\Pengelola;
use App\Models\CategoryModel;
use App\Models\AdminModel\Pengajuan;
use App\Models\AdminModel\Sertifikat;
use App\Models\HakCipta\HakCipta;
use App\Models\HakPaten\Kepemilikan;
use App\Models\AdminModel\Merek;


class AdminBerandaController extends Controller
{
    function index(){

        // $pegawai['pegawai'] = SimaduPegawai::count();
        // $pengajuan['pengajuan'] = Pengajuan::count();
        // $pengelola['pengelola'] = Pengelola::count();
        // $sertifikat['sertifikat'] = Sertifikat::count();
        // $category['category'] = CategoryModel::count();
        // $hakcipta['hakcipta'] = HakCipta::count();
        // $paten['paten'] = Kepemilikan::count();

        $category = CategoryModel::all()->count();
        $sertifikat = Sertifikat::all()->count();
        $pengelola = Pengelola::all()->count();
        $hakcipta = HakCipta::all()->count();
        $kepemilikan = Kepemilikan::all()->count();
        $pegawai = SimaduPegawai::all()->count();
        $pengajuan = Pengajuan::all()->count();
        $merek = Merek::all()->count();


        // dd($datas['list']['TotalPegawai']);
        return view('home', compact('category','merek','pegawai','pengajuan','hakcipta','kepemilikan','pengelola','sertifikat'));
        // return view('home', $pegawai,$pengajuan,$pengelola,$sertifikat,$category,$hakcipta,$paten);
    }


}
