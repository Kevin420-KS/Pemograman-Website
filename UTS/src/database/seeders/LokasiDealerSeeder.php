<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LokasiDealer;

class LokasiDealerSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kota' => 'Jakarta Pusat', 'alamat' => 'Jalan Sudirman I'],
            ['kota' => 'Jakarta Pusat', 'alamat' => 'Jalan MH Thamrin II'],
            ['kota' => 'Jakarta Pusat', 'alamat' => 'Jalan Thamrin III'],

            ['kota' => 'Bandung', 'alamat' => 'Jalan Braga No.1'],
            ['kota' => 'Bandung', 'alamat' => 'Jalan Cihampelas No.2'],
            ['kota' => 'Bandung', 'alamat' => 'Jalan Ir. Haji Juanda No.3'],

            ['kota' => 'Tangerang', 'alamat' => 'Jalan Raya Serang No.34B'],
            ['kota' => 'Tangerang', 'alamat' => 'Jalan Raya Cisoka No.20C'],
            ['kota' => 'Tangerang', 'alamat' => 'Jalan Raya Legok No. 69G'],
        ];

        foreach ($data as $item) {
            LokasiDealer::create($item);
        }
    }
}
