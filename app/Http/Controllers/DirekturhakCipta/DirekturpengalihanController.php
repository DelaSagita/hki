<?php

namespace App\Http\Controllers\DirekturhakCipta;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HakCipta\Pengalihan;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;

class DirekturpengalihanController extends Controller
{
    public function index()
    {
        $data['list_pengalihan'] = Pengalihan::all();
        return view('direktur-cipta.pengalihan.index', $data);
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
        return view('direktur-cipta.pengalihan.show' , $data);
    }
}
