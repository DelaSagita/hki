<?php

namespace App\Http\Controllers\HakCipta;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HakCipta\HakCipta;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;


class PermohonanHakCiptaController extends Controller
{
    public function index()
    {
        $data = HakCipta::where('user_id', auth()->user()->id)->get();
        return view('hak-cipta.pengajuan.index', compact('data'));
    }
    public function create()
    {
        return view('hak-cipta.pengajuan.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_pencipta' => 'required',
            'user_id' => 'required',
            'Kewarganegaran_pencipta' => 'required',
            'no_hp_pencipta' => 'required',
            'email_pencipta' => 'required',
            'alamat_pencipta' => 'required',
            'nama_pemegang' => 'required',
            'Kewarganegaraan_pemegang' => 'required',
            'no_hp_pemegang' => 'required',
            'email_pemegang' => 'required',
            'alamat_pemegang' => 'required',
            'jenis_judul_pencipta' => 'required',
            'tempat_pencipta' => 'required',
            'tanngal_pertama_kali_pencipta' => 'required',
            'uraian_pencipta' => 'required',
            'tanngal_pembuatan_pencipta' => 'required',
            'file_npwp' => 'required',
            'file_ktp' => 'required',
        ]);

        //  save to database

        $hakcipta = new HakCipta();
        $hakcipta->nama_pencipta = request('nama_pencipta');
        $hakcipta->user_id = request('user_id');
        $hakcipta->Kewarganegaran_pencipta = request('Kewarganegaran_pencipta');
        $hakcipta->no_hp_pencipta = request('no_hp_pencipta');
        $hakcipta->email_pencipta = request('email_pencipta');
        $hakcipta->alamat_pencipta = request('alamat_pencipta');
        $hakcipta->nama_pemegang = request('nama_pemegang');
        $hakcipta->Kewarganegaraan_pemegang = request('Kewarganegaraan_pemegang');
        $hakcipta->no_hp_pemegang = request('no_hp_pemegang');
        $hakcipta->email_pemegang = request('email_pemegang');
        $hakcipta->alamat_pemegang = request('alamat_pemegang');
        $hakcipta->jenis_judul_pencipta = request('jenis_judul_pencipta');
        $hakcipta->tempat_pencipta = request('tempat_pencipta');
        $hakcipta->tanngal_pertama_kali_pencipta = request('tanngal_pertama_kali_pencipta');
        $hakcipta->uraian_pencipta = request('uraian_pencipta');
        $hakcipta->tanngal_pembuatan_pencipta = request('tanngal_pembuatan_pencipta');
        $hakcipta->save();
        if(request()->hasFile('file_npwp')){
            $tujuan = "HakCipta/docs/npwp" . date("y") ;
            $extension = request()->file('file_npwp')->extension();
            $url = request()->file('file_npwp')->storeAs($tujuan, "npwp." . $extension);
            $hakcipta->file_npwp = $url;
            $hakcipta->save();
        }
        if(request()->hasFile('file_ktp')){
            $tujuan = "HakCipta/docs/ktp" . date("y") ;
            $extension = request()->file('file_ktp')->extension();
            $url = request()->file('file_ktp')->storeAs($tujuan, "ktp." . $extension);
            $hakcipta->file_ktp = $url;
            $hakcipta->save();
        }

        // create to doc
        $filepath = public_path('hakcipta/format/master-data.docx');
        $filename = Str::random(5);
        $datadocument = [
            'nama_pencipta' => request('nama_pencipta'),
            'user_id' => request('user_id'),
            'Kewarganegaran_pencipta' => request('Kewarganegaran_pencipta'),
            'no_hp_pencipta' => request('no_hp_pencipta'),
            'email_pencipta' => request('email_pencipta'),
            'alamat_pencipta' => request('alamat_pencipta'),
            'nama_pemegang' => request('nama_pemegang'),
            'Kewarganegaraan_pemegang' => request('Kewarganegaraan_pemegang'),
            'no_hp_pemegang' => request('no_hp_pemegang'),
            'email_pemegang' => request('email_pemegang'),
            'alamat_pemegang' => request('alamat_pemegang'),
            'jenis_judul_pencipta' => request('jenis_judul_pencipta'),
            'tempat_pencipta' => request('tempat_pencipta'),
            'tanngal_pertama_kali_pencipta' => request('tanngal_pertama_kali_pencipta'),
            'uraian_pencipta' => request('uraian_pencipta'),
            'tanngal_pembuatan_pencipta' => request('tanngal_pembuatan_pencipta'),
        ];
        $output = $this->document($filepath, $filename, $datadocument);

        $hakcipta->file_permohonan_hakcipta = $output;
        $hakcipta->save();
        return redirect('hak-cipta/pendaftaran-ciptaan');
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

    public function show(HakCipta $hakcipta)
    {
        $data['hakcipta'] = $hakcipta;
        return view('hak-cipta.pengajuan.show', $data);
    }
}
