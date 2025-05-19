<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kontak_sales', function (Blueprint $table) {
            $table->id();
            $table->string('daerah');
            $table->string('nama');
            $table->string('nomor_telepon');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kontak_sales');
    }
};
