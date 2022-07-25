<?php

namespace App\Http\Controllers\HakCipta;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HakCipta\Pernyataan;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;


class PernyataanHakciptaController extends Controller
{
    public function index()
    {
        // $data['list_pernytaan'] = Pernyataan::all();
        // return view('hak-cipta.pernyataan.index', $data);

        $data = Pernyataan::where('user_id', auth()->user()->id)->get();
        return view('hak-cipta.pernyataan.index', compact('data'));
    }
    public function create()
    {
        return view('hak-cipta.pernyataan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'user_id' => 'required',
            'kewarganegara' => 'required',
            'alamat' => 'required',
            'berupa' => 'required',
            'berjudul' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
        ]);

        $pernyataan = new Pernyataan();
        $pernyataan->nama = request('nama');
        $hakcipta->user_id = request('user_id');
        $pernyataan->kewarganegara = request('kewarganegara');
        $pernyataan->alamat = request('alamat');
        $pernyataan->berupa = request('berupa');
        $pernyataan->berjudul = request('berjudul');
        $pernyataan->tempat = request('tempat');
        $pernyataan->tanggal = request('tanggal');
        $pernyataan->save();

        // create to doc
        $filepath = public_path('hakcipta/format/v2.docx');
        $filename = Str::random(5);
        $datadocument = [
            'nama' => request('nama'),
            'user_id' => request('user_id'),
            'kewarganegara' => request('kewarganegara'),
            'alamat' => request('alamat'),
            'berupa' => request('berupa'),
            'berjudul' => request('berjudul'),
            'tempat' => request('tempat'),
            'tanngal' => request('tanngal'),
        ];
        $output = $this->document($filepath, $filename, $datadocument);

        $pernyataan->file = $output;
        $pernyataan->save();
        return redirect('hak-cipta/pernyataan-hak-cipta');
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

    public function show(Pernyataan $pernyataan)
    {
        $data['pernyataan'] = $pernyataan;
        return view('hak-cipta.pernyataan.show', $data);
    }
}
