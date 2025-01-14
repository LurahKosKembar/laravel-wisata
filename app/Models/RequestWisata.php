<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestWisata extends Model
{
    protected $fillable = [
        'nama_wisata',
        'lokasi_wisata',
        'nama_pengaju',
        'deskripsi',
    ];
}
