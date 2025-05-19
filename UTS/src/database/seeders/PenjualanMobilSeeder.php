<?php

namespace Database\Seeders;

use App\Models\PenjualanMobil;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PenjualanMobilSeeder extends Seeder
{
    public function run(): void
    {
        $dataPenjualan = [
            ['brand_mobil_id' => 1, 'daerah' => 'Tangerang', 'terjual' => 15, 'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 2, 'daerah' => 'Tangerang', 'terjual' => 25, 'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 3, 'daerah' => 'Tangerang', 'terjual' => 3,  'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 4, 'daerah' => 'Tangerang', 'terjual' => 40, 'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 1, 'daerah' => 'Jakarta',   'terjual' => 35, 'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 2, 'daerah' => 'Jakarta',   'terjual' => 30, 'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 3, 'daerah' => 'Jakarta',   'terjual' => 8,  'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 4, 'daerah' => 'Jakarta',   'terjual' => 55, 'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 1, 'daerah' => 'Bandung',   'terjual' => 12, 'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 2, 'daerah' => 'Bandung',   'terjual' => 18, 'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 3, 'daerah' => 'Bandung',   'terjual' => 2,  'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 4, 'daerah' => 'Bandung',   'terjual' => 35, 'tahun_penjualan' => 2023],
            ['brand_mobil_id' => 1, 'daerah' => 'Jakarta',   'terjual' => 28, 'tahun_penjualan' => 2022],
            ['brand_mobil_id' => 4, 'daerah' => 'Tangerang', 'terjual' => 38, 'tahun_penjualan' => 2022],
        ];

        foreach ($dataPenjualan as &$data) {
            $data['created_at'] = $data['updated_at'] = Carbon::now();
        }

        PenjualanMobil::insert($dataPenjualan);
    }
}
