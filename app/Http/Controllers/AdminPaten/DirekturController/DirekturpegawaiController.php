<?php

namespace App\Http\Controllers\DirekturController;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimaduPegawai;
use Str;
use DB;


class DirekturpegawaiController extends Controller
{
    function index()
    {
        $data['list_pegawai'] = SimaduPegawai::all();
        return view('direktur.pegawai.index', $data);
    }

    function show(SimaduPegawai $SimaduPegawai)
    {
        $data['pegawai'] = $SimaduPegawai;
        return view('direktur.pegawai.show', $data);
    }


}
