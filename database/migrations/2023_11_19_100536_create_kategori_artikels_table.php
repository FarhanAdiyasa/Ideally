<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kategori_artikels', function (Blueprint $table) {
            $table->id('id_kategori_artikel');
            $table->string('nama_kategori_artikel');
            $table->string('judul_kategori_artikel');
            $table->string('deskripsi_kategori_artikel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
        Schema::dropIfExists('kategori_artikels');
    }
};
