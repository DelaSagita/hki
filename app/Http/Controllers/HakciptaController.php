<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hakcipta;
use App\Models\User;
use App\Models\Anggota;


class HakciptaController extends Controller
{

    public function index()
    {
        $hakcipta = Hakcipta::all();
        return view('dosen.hak-cipta.index', compact('hakcipta'));
    }


    public function anggota($id)
    {        
        $anggota = Anggota::all();
        $user = User::where('role', 'user')->get();
        $hakcipta = Hakcipta::findorfail($id);
        return view('dosen.hak-cipta.anggota', compact('hakcipta', 'user', 'anggota'));
    }


    // public function detail_anggota($id)
    // {        
    //     $anggota = Anggota::findorfail($id);
    //     $user = User::where('role', 'user')->get();
    //     $hakcipta = Hakcipta::findorfail($id);
    //     return view('dosen.hak-cipta.detail_anggota', compact('hakcipta', 'user', 'anggota'));
    // }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //  dd($request->all());
         $request->validate([
            'nama' => ['required'],
            'date' => ['required'],
            'alamat' => ['required'],
            'kewarganegaraan' => ['required'],
            'no_hp' => ['required'],
            'image' => ['required'],
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        Hakcipta::create([
            'nama' => $request->nama,
            'date' => $request->date,
            'alamat' => $request->alamat,
            'kewarganegaraan' => $request->kewarganegaraan,
            'no_hp' => $request->no_hp,
            'image' => 'public/uploads/'.$new_image,
        ]);
        $image->move('public/uploads/', $new_image);
        return back()->with('success','Hakcipta anda berhasil di Disimpan');
    }


    public function anggota_save(Request $request)
    {
        //  dd($request->all());
         $request->validate([
            // 'user_id' => ['required'],
            // 'hakcipta_id' => ['required'],
            'nama' => ['required'],
        ]);
        Anggota::create([
            'user_id' => $request->user_id,
            'hakcipta_id' => $request->hakcipta_id,
            'nama' => $request->nama,
        ]);
        return back()->with('success','Anggota anda berhasil di Disimpan');
    }

   
    public function show($id)
    {
        $user = User::all();
        return view('dosen.hak-cipta.show', compact('user'));
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
