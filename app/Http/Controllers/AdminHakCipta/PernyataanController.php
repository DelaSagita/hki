<?php

namespace App\Http\Controllers\AdminHakCipta;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HakCipta\Pernyataan;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;


class PernyataanController extends Controller
{
    public function index()
    {
        $data['list_pernytaan'] = Pernyataan::all();
        return view('admin-cipta.pernyataan.index', $data);
    }
    public function create()
    {
        return view('admin-cipta.pernyataan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kewarganegara' => 'required',
            'alamat' => 'required',
            'berupa' => 'required',
            'berjudul' => 'required',
            'tempat' => 'required',
            'tanngal' => 'required',
        ]);

        $pernyataan = new Pernyataan();
        $pernyataan->nama = request('nama');
        $pernyataan->kewarganegara = request('kewarganegara');
        $pernyataan->alamat = request('alamat');
        $pernyataan->berupa = request('berupa');
        $pernyataan->berjudul = request('berjudul');
        $pernyataan->tempat = request('tempat');
        $pernyataan->tanngal = request('tanngal');
        $pernyataan->save();

        // create to doc
        $filepath = public_path('hakcipta/format/v2.docx');
        $filename = Str::random(5);
        $datadocument = [
            'nama' => request('nama'),
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
        return redirect('admin-cipta/pernyataan-hak-cipta');
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
        return view('admin-cipta.pernyataan.show', $data);
    }
}
