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
        Schema::create('agrigards', function (Blueprint $table) {
            $table->id('id_agrigard');
            $table->string('kategori');
            $table->string('nama_produk');
            $table->string('slug');
            $table->string('satuan');
            $table->string('gambar_1');
            $table->string('gambar_2');
            $table->string('gambar_3');
            $table->string('video');
            $table->text('deskripsi_singkat'); // Menggunakan tipe data 'text' untuk deskripsi yang panjang
            $table->integer('stok'); // Menggunakan tipe data 'integer' untuk stok
            $table->integer('item_terjual');
            $table->decimal('hpp', 10, 2); // Menggunakan tipe data 'decimal' untuk harga pokok produksi dengan 2 digit desimal
            $table->decimal('harga_b2I_31+_unit', 10, 2);
            $table->decimal('harga_b2I_11+_unit', 10, 2);
            $table->decimal('harga_b2I_1+_unit', 10, 2);
            $table->decimal('harga_b2B_31+_unit', 10, 2);
            $table->decimal('harga_b2B_11+_unit', 10, 2);
            $table->decimal('harga_b2B_1+_unit', 10, 2);
            $table->decimal('harga_b2C_31+_unit', 10, 2);
            $table->decimal('harga_b2C_11+_unit', 10, 2);
            $table->decimal('harga_b2C_1+_unit', 10, 2);
            $table->timestamp('tanggal_publikasi');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agrigards');
    }
};
