<?php

namespace App\Models\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{

    protected $table = 'pengajuan';
    protected $fillable  = [
            'id_pengajuan',
            'id_pegawai',
            'id_category',
            'status',
            'keterangan',
            'file',
            'judul',
            'tgl_upload'
    ];
    protected $primaryKey = 'id_pengajuan';
    public $timestamps = false;
}
