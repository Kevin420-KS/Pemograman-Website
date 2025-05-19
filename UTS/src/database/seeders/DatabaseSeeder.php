<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Mulai transaction untuk rollback jika ada error
        DB::beginTransaction();

        try {
            // Buat role jika belum ada
            $this->createRoles();

            // Buat user admin
            $this->createAdminUser();

            // Jalankan seeders secara berurutan
            $this->call([
                BrandMobilSeeder::class,    
                LokasiDealerSeeder::class,  
                KontakSalesSeeder::class,   
                PenjualanMobilSeeder::class, 
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $this->command->error('Seeder gagal: ' . $e->getMessage());
            throw $e;
        }
    }

    protected function createRoles(): void
    {
        if (!Role::where('name', 'super_admin')->exists()) {
            Role::create(['name' => 'super_admin']);
            $this->command->info('Role super_admin created');
        }
    }

    protected function createAdminUser(): void
    {
        // Cek apakah user admin sudah ada
        if (!\App\Models\User::where('email', 'admin@admin.com')->exists()) {
            $user = \App\Models\User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password') // Pastikan ada password default
            ]);

            $user->assignRole('super_admin');
            $this->command->info('Admin user created');
        }
    }
}