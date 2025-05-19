<?php

namespace Database\Seeders;

use App\Models\BrandMobil;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BrandMobilSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'nama_brand' => 'Toyota',
                'jenis_mobil' => 'Mobil Klasik',
                'gambar_brand' => null,
                'logo_brand' => null,
                'keterangan' => 'Toyota adalah salah satu brand mobil ternama asal Jepang.',
            ],
            [
                'nama_brand' => 'Tesla',
                'jenis_mobil' => 'Mobil Listrik',
                'gambar_brand' => null,
                'logo_brand' => null,
                'keterangan' => 'Tesla adalah brand mobil listrik terkenal asal Amerika.',
            ],
            [
                'nama_brand' => 'Ferrari',
                'jenis_mobil' => 'Mobil Racing',
                'gambar_brand' => null,
                'logo_brand' => null,
                'keterangan' => 'Ferrari adalah brand mobil sport dari Italia.',
            ],
            [
                'nama_brand' => 'Isuzu',
                'jenis_mobil' => 'Mobil Pickup',
                'gambar_brand' => null,
                'logo_brand' => null,
                'keterangan' => 'Isuzu dikenal sebagai brand mobil pickup tangguh.',
            ],
        ];

        BrandMobil::insert($brands);
    }
}
