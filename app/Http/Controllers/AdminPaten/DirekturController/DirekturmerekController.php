<?php

namespace App\Http\Controllers\DirekturController;

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


class DirekturmerekController extends Controller
{
    function index()
    {
        $data = Merek::all();
        return view('direktur.merek.index', compact('data'));
    }

    function add(){

       $pegawai['list_pegawai'] = SimaduPegawai::all();
        return view('direktur.merek.add',  $pegawai);
    }


    public function show($id)
    {
        $data = Merek::findorfail($id);
        return view('direktur.merek.show', compact('data'));

    }










}
