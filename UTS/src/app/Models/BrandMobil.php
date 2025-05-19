<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandMobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_brand',
        // add other brand-related fields
    ];

    // Optional inverse relationship
    public function penjualanMobils()
    {
        return $this->hasMany(PenjualanMobil::class, 'brand_mobil_id');
    }
}