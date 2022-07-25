<?php

namespace App\Models\AdminModel;

use Illuminate\Database\Eloquent\Model;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

class Sertifikat extends Authenticatable
{
    use Notifiable;
    protected $keyType = 'string';
    protected $primaryKey = 'id_sertifikat';
    public $incrementing = false;
    public $timestamps = false;

    protected $table = 'sertifikat';
    protected $fillable  = [
        'id_pegawai',
        'id_sertifikat',
        'id_pengajuan',
        'file_sertifikat',
        
    ];

}
