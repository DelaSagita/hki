<?php

namespace App\Http\Controllers\HakPaten;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hakpaten\kepemilikan;
use PhpOffice\PhpWord\TemplateProcessor;

class PernyataanKepemilikanController extends Controller
{
    public function index()
    {
        $data['list_kepemilikan'] = kepemilikan::all();
        return view('hak-paten.kepemilikan.index', $data);
    }
    public function create()
    {
        return view('hak-paten.kepemilikan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'nama' => 'required',
            'file_list' => 'required',
        ]);

        $kepemilikan = new kepemilikan();
        $kepemilikan->judul = request('judul');
        $kepemilikan->nama = request('nama');
        $kepemilikan->save();
        if (request()->hasFile('file_list')) {
            $tujuan = "Hakpaten/docs/file-list" . date("y");
            $extension = request()->file('file_list')->extension();
            $url = request()->file('file_list')->storeAs($tujuan, "file_list." . $extension);
            $kepemilikan->file_list = $url;
            $kepemilikan->save();
        }


        // create to doc
        $filepath = public_path('hakpaten/format/v4.docx');
        $filename = Str::random(5);
        $datadocument = [
            'judul' => request('judul'),
            'nama' => request('nama'),
        ];
        $output = $this->document($filepath, $filename, $datadocument);

        $kepemilikan->file = $output;
        $kepemilikan->save();
        return redirect('hak-paten/pernyataan-kepemilikan');
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
    public function show(kepemilikan $pemilik)
    {
        $data['pemilik'] = $pemilik;
        return view('hak-paten.kepemilikan.show', $data);
    }
}
