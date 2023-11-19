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
        Schema::create('dedikasi_floras', function (Blueprint $table) {
            $table->id('id_nurseri');
            $table->string('nama_latin');
            $table->string('nama_lokal');
            $table->text('deskripsi_singkat'); // Menggunakan tipe data 'text' untuk deskripsi yang panjang
            $table->string('slug');
            $table->integer('tinggi'); // Menggunakan tipe data 'integer' untuk tinggi
            $table->string('satuan');
            $table->integer('diameter_tajuk'); // Menggunakan tipe data 'integer' untuk diameter tajuk
            $table->string('strata');
            $table->string('warna_daun');
            $table->string('warna_bunga');
            $table->string('penyiraman');
            $table->string('penyinaran');
            $table->string('pemupukan');
            $table->string('gambar');
            $table->string('video');
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

            $table->timestamp('created_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembuatan
            $table->timestamp('updated_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembaruan
            $table->timestamp('deleted_at')->nullable();// Menggunakan 'nullable' untuk mengizinkan kolom 'deleted_date' bernilai null

            $table->foreignId('created_by');
            $table->foreignId('updated_by');
            $table->foreignId('deleted_by');
    
            $table->foreign('created_by')->references('user_id')->on('users');
            $table->foreign('updated_by')->references('user_id')->on('users');
            $table->foreign('deleted_by')->references('user_id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dedikasi_floras');
    }
};
