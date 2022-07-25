<?php

namespace App\Http\Controllers\DirekturPaten;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hakpaten\kepemilikan;
use PhpOffice\PhpWord\TemplateProcessor;

class DirekturkepemilikanController extends Controller
{
    public function index()
    {
        $data['list_kepemilikan'] = kepemilikan::all();
        return view('direktur-paten.kepemilikan.index', $data);
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
        return view('direktur-paten.kepemilikan.show', $data);
    }
}
