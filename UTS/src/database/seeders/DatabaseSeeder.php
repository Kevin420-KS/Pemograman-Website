<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Misalnya ada user seeder
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        $user->assignRole('super_admin');

        // Ini harus di dalam method run()
        $this->call([
            BrandMobilSeeder::class,
            KontakSalesSeeder::class,
            LokasiDealerSeeder::class,
        ]);
    }
}
