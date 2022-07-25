<?php

namespace App\Http\Controllers\DirekturhakCipta;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HakCipta\Pernyataan;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;


class DirekturpernyataanController extends Controller
{
    public function index()
    {
        $data['list_pernytaan'] = Pernyataan::all();
        return view('direktur-cipta.pernyataan.index', $data);
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
        return view('direktur-cipta.pernyataan.show', $data);
    }
}
