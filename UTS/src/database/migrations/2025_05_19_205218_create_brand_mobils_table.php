<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('brand_mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_brand');
            $table->string('jenis_mobil');
            $table->string('gambar_brand')->nullable();
            $table->string('logo_brand')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('brand_mobils');
    }
};
