<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KontakSales;

class KontakSalesSeeder extends Seeder
{
    public function run(): void
    {
        KontakSales::insert([
            [
                'daerah' => 'Jakarta',
                'nama' => 'Asep Septian',
                'nomor_telepon' => '+62 81314 2526 3738',
            ],
            [
                'daerah' => 'Tangerang',
                'nama' => 'Agung Nugroho',
                'nomor_telepon' => '+62 82112 3443 5665',
            ],
            [
                'daerah' => 'Bandung',
                'nama' => 'Raden Bagus',
                'nomor_telepon' => '+62 81122 3344 5566',
            ],
        ]);
    }
}
