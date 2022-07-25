<?php

namespace App\Http\Controllers\HakCipta;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HakCipta\Pengalihan;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;

class PengalihanHakciptaController extends Controller
{
    public function index()
    {
        $data['list_pengalihan'] = Pengalihan::where('user_id', auth()->user()->id)->get();
        return view('hak-cipta.pengalihan.index', $data);
    }
    public function create()
    {
        return view('hak-cipta.pengalihan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'nama_pelaku' => 'required',
            'alamat_pelaku' => 'required',
            'judul' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'pemegang' => 'required',
        ]);

        $pengalihan = new Pengalihan();
        $pengalihan->user_id = request('user_id');
        $pengalihan->nama = request('nama');
        $pengalihan->alamat = request('alamat');
        $pengalihan->nama_pelaku = request('nama_pelaku');
        $pengalihan->alamat_pelaku = request('alamat_pelaku');
        $pengalihan->judul = request('judul');
        $pengalihan->tempat = request('tempat');
        $pengalihan->tanggal = request('tanggal');
        $pengalihan->pemegang = request('pemegang');
        $pengalihan->save();

        $filepath = public_path('hakcipta/format/v1.docx');
        $filename = Str::random(5);
        $datadocument = [
            'nama' => request('nama'),
            'alamat' => request('alamat'),
            'nama_pelaku' => request('nama_pelaku'),
            'alamat_pelaku' => request('alamat_pelaku'),
            'judul' => request('judul'),
            'tempat' => request('tempat'),
            'tanggal' => request('tanggal'),
            'pemegang' => request('pemegang'),
        ];

        $file = $this->document($filepath, $filename, $datadocument);

        $pengalihan->file = $file;
        $pengalihan->save();

        return redirect('hak-cipta/pengalihan-hak-cipta');
    }
    function document($filepath, $filename, $datadocument)
    {
        $template = new TemplateProcessor($filepath);
        foreach ($datadocument as $key => $value) {
            $template->setValue($key, $value);
        }
        $template->saveAs(public_path("hakcipta/docx/$filename.docx"));

        return "hakcipta/docx/$filename.docx";
    }

    public function show(Pengalihan $pengalihan)
    {
        $data['pengalihan'] = $pengalihan;
        return view('hak-cipta.pengalihan.show' , $data);
    }
}
