<?php

namespace App\Http\Controllers\DirekturPaten;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Hakpaten\penyerahan;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;


class DirekturpenyerahanController extends Controller
{
    public function index()
    {
        $data['list_paten'] = penyerahan::all();
        return view('direktur-paten.penyerahan-hak.index', $data);
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
        return view('direktur-paten.penyerahan-hak.show', $data);
    }
}
