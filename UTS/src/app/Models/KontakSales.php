<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontakSales extends Model
{
    use HasFactory;

    protected $fillable = [
        'daerah',
        'nama',
        'no_hp',
    ];
}
