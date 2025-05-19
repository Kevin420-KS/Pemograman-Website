<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PenjualanMobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_mobil_id',
        'daerah',
        'terjual',
        'tahun_penjualan',
    ];

    // Add this relationship method
    public function brandMobil()
    {
        return $this->belongsTo(BrandMobil::class, 'brand_mobil_id');
    }
}