<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengelola;

class PengelolaController extends Controller
{
    
    public function index()
    {
        $pengelola = Pengelola::all();
        return view('admin.pengelola.index', compact('pengelola'));
       
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'nip' => ['required'],
            'jabatan' => ['required'],
            'content' => ['required'],
            'image' => ['required'],
        ]);
        $image = $request->image;
        $new_image = time() . $image->getClientOriginalName();
        $pengelola = Pengelola::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'content' => $request->content,
            'image' => 'public/uploads/' . $new_image,
        ]);
        $image->move('public/uploads/', $new_image);
        return back()->with('success', 'Data  Anda  berhasil di Ditambah');
    }

    public function show($id)
    {

        $pengelola = Pengelola::findorfail($id);
        return view('admin.pengelola.show', compact('pengelola'));
    
    }


    public function edit($id)
    {
        $pengelola = Pengelola::findorfail($id);
        return view('admin.pengelola.edit', compact('pengelola'));
    
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'nip' => ['required'],
            'jabatan' => ['required'],
            'content' => ['required'],
        ]);

        $pengelola = Pengelola::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/', $new_image);
            $pengelola_data = [
                'name' => $request->name,
                'nip' => $request->nip,
                'jabatan' => $request->jabatan,
                'content' => $request->content,
                'image' => 'public/uploads/' . $new_image,
            ];
        }
        else{
            $pengelola_data = [
                'name' => $request->name,
                'nip' => $request->nip,
                'jabatan' => $request->jabatan,
                'content' => $request->content,
            ];
        }
        $pengelola->update($pengelola_data);
        return back()->with('success','Portofolio anda berhasil di Update');
    
    }
    
    public function destroy($id)
    {
        $pengelola = Pengelola::findorfail($id);
        $pengelola->delete();
        return back()->with('success', 'Artikel Berita Anda berhasil di Hapus');
    }

   
}
