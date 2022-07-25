<?php

namespace App\Http\Controllers\AdminPaten;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Hakpaten\penyerahan;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;


class PenyerahanController extends Controller
{
    public function index()
    {
        $data['list_paten'] = penyerahan::all();
        return view('admin-paten.penyerahan-hak.index', $data);
    }
    public function create()
    {
        return view('admin-paten.penyerahan-hak.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'bertanda' => 'required',
            'menyerahkan' => 'required',
            'judul' => 'required',
            'tanggal' => 'required',
            'penemu' => 'required',
            'file_npwp' => 'required',
            'file_ktp' => 'required',
        ]);

        $hakpaten = new penyerahan();
        $hakpaten->bertanda = request('bertanda');
        $hakpaten->menyerahkan = request('menyerahkan');
        $hakpaten->judul = request('judul');
        $hakpaten->tanggal = request('tanggal');
        $hakpaten->penemu = request('penemu');
        $hakpaten->save();
        if (request()->hasFile('file_npwp')) {
            $tujuan = "HakPaten/docs/npwp" . date("y");
            $extension = request()->file('file_npwp')->extension();
            $url = request()->file('file_npwp')->storeAs($tujuan, "npwp." . $extension);
            $hakpaten->file_npwp = $url;
            $hakpaten->save();
        }
        if (request()->hasFile('file_ktp')) {
            $tujuan = "HakPaten/docs/ktp" . date("y");
            $extension = request()->file('file_ktp')->extension();
            $url = request()->file('file_ktp')->storeAs($tujuan, "ktp." . $extension);
            $hakpaten->file_ktp = $url;
            $hakpaten->save();
        }

        // create to doc
        $filepath = public_path('hakpaten/format/v3.docx');
        $filename = Str::random(5);
        $datadocument = [
            'bertanda' => request('bertanda'),
            'menyerahkan' => request('menyerahkan'),
            'judul' => request('judul'),
            'tanggal' => request('tanggal'),
            'penemu' => request('penemu'),
        ];
        $output = $this->document($filepath, $filename, $datadocument);

        $hakpaten->file = $output;
        $hakpaten->save();
        return redirect('admin-paten/penyerahan-hak/');
    }
    function document($filepath, $filename, $datadocument)
    {
        $template = new TemplateProcessor($filepath);
        foreach ($datadocument as $key => $value) {
            $template->setValue($key, $value);
        }
        $template->saveAs(public_path("hakpaten/docx/$filename.docx"));

        return "hakpaten/docx/$filename.docx";
    }
    public function show(penyerahan $paten)
    {
        $data['paten'] = $paten;
        return view('admin-paten.penyerahan-hak.show', $data);
    }
}
