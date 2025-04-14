LAPORAN MATERI: LIVEWIRE DALAM PEMROGRAMAN WEBSITE

Pengertian Livewire
Livewire adalah sebuah library full-stack untuk Laravel yang memungkinkan kita membangun antarmuka pengguna dinamis tanpa harus menulis banyak JavaScript. Dengan Livewire, kita bisa menulis kode interaktif langsung dalam PHP, dan Laravel akan mengatur komunikasi antara frontend dan backend secara otomatis melalui AJAX.

Kelebihan Menggunakan Livewire:

Tidak perlu banyak JavaScript

Integrasi sempurna dengan Laravel Blade

Komunikasi realtime antar komponen

Mudah untuk pengembangan aplikasi SPA (Single Page Application)

Penerapan Livewire pada Pembuatan Website: Dalam praktiknya, Livewire sering digunakan untuk membangun dashboard admin, CRUD dinamis, form interaktif, dan fitur-fitur frontend lain tanpa JavaScript manual. Komponen Livewire dapat dibuat dengan Artisan command seperti php artisan make:livewire NamaKomponen.

Penjelasan beberapa perintah penting yang sering digunakan bersama Livewire dan Laravel:

composer create-project --prefer-dist raugadh/fila-starter .
→ Digunakan untuk membuat project Laravel dengan template bawaan dari Filament Admin Starter Kit.

php artisan migrate
→ Menjalankan seluruh migrasi database sesuai skema pada folder database/migrations.

php artisan db:seed
→ Menjalankan file seeder untuk mengisi database dengan data awal.

php artisan db:seed --force
→ Sama seperti di atas, tapi dipaksa dijalankan bahkan pada environment produksi.

php artisan storage:link
→ Membuat symbolic link antara direktori storage dan public agar file dapat diakses dari luar.

chown -R www-data:www-data storage/*
→ Mengatur hak akses agar folder storage dapat diakses oleh user server web (di Linux/Ubuntu).

chmod 777 -R storage/* && chmod 777 -R bootstrap/*
→ Memberi hak akses penuh agar folder tersebut bisa ditulis dan dibaca tanpa error permission.

php artisan shield:generate --all
→ Digunakan untuk menghasilkan permission dan role otomatis dalam plugin Filament Shield.

rm -rf .*
→ Peringatan: Perintah ini akan menghapus semua file dan folder tersembunyi di direktori saat ini — sangat berbahaya bila dijalankan di direktori yang salah.

{{ $slot }}
→ Digunakan dalam komponen Blade untuk menyisipkan konten dinamis dari komponen induk.

Hubungan antara Navicat dan Livewire:
Navicat adalah GUI client untuk manajemen database (seperti MySQL, MariaDB, dll). Livewire tidak langsung terhubung dengan Navicat, namun Navicat dapat digunakan untuk melihat, mengelola, dan memverifikasi data yang diolah oleh Livewire dan Laravel di sisi backend.