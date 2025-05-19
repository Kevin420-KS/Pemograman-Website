<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penjualan_mobils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_mobil_id');
            $table->string('daerah');
            $table->integer('terjual');
            $table->integer('tahun_penjualan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penjualan_mobils');
    }
};
