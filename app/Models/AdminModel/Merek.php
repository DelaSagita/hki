<?php

namespace App\Models\AdminModel;

use Illuminate\Database\Eloquent\Model;

class merek extends Model{

    protected $table = 'merek';
    protected $fillable  = [
            'id_merek',
            'id_pegawai',
            'nama_merek',
            'nama_pengaju',
            'jenis',
            'foto_merek',
            'foto_ttd',

    ];

    protected $primaryKey = 'id_merek';
    public $timestamps = false;



}
