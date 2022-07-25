<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengelola;

class DosenController extends Controller
{
    public function index()
    {
        return view('homedosen');
    }


    public function show($id)
    {
        $tampil = Pengelola::findorfail($id);
        return view('dosen.kepengurusan.show', compact('tampil'));

    }


}
