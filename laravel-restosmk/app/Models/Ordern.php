<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordern extends Model
{
    use HasFactory;

    protected $fillable = [
        'idorder',
        'idpelanggan',
        'tglorder',
        'total',
        'bayar',
        'kembali',
     
    ];
}
