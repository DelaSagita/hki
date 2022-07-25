<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

class SimaduPegawai extends Authenticatable
{
    use Notifiable;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = 'simadu__pegawai';
    protected $fillable  = [
            'nip',
            'nup',
            'nik_ktp',
            'email',
            'nama',
            'gelar_depan',
            'gelar_belakang',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'alamat',
            'agama',
            'password',

    ];
    protected $guard = 'pegawai';
}
