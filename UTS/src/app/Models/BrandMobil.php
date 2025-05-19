<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandMobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_brand',
        'jenis_mobil',
        'gambar_brand',
        'logo_brand',
        'keterangan',
    ];
}
