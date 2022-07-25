<?php

namespace App\Models\HakCipta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalihan extends Model
{
    use HasFactory;
    protected $table = 'pengalihan_hakcipta';
    protected $fillable = ['nama','alamat','nama_pelaku'];

    
}

