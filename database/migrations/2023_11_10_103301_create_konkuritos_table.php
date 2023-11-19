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
        Schema::create('konkuritos', function (Blueprint $table) {
            $table->id('id_konkurito');
            $table->string('nama_produk');
            $table->string('slug');
            $table->string('jenis');
            $table->text('spesifikasi'); // Menggunakan tipe data 'text' untuk spesifikasi yang panjang
            $table->string('satuan');
            $table->string('garansi');
            $table->string('warna_1');
            $table->string('warna_2');
            $table->string('dimensi');
            $table->string('gambar_1');
            $table->string('gambar_2');
            $table->string('gambar_3');
            $table->string('gambar_4');
            $table->string('gambar_5');
            $table->string('video');
            $table->integer('stok'); // Menggunakan tipe data 'integer' untuk stok
            $table->integer('item_terjual');
            $table->text('deskripsi_singkat'); // Menggunakan tipe data 'text' untuk deskripsi yang panjang
            $table->decimal('hpp', 10, 2); // Menggunakan tipe data 'decimal' untuk harga pokok produksi dengan 2 digit desimal
            $table->decimal('harga_b2I_11+_unit', 10, 2);
            $table->decimal('harga_b2I_1+_unit', 10, 2);
            $table->decimal('harga_b2B_11+_unit', 10, 2);
            $table->decimal('harga_b2B_1+_unit', 10, 2);
            $table->decimal('harga_b2C_11+_unit', 10, 2);
            $table->decimal('harga_b2C_1+_unit', 10, 2);
            $table->timestamp('tanggal_publikasi');

            $table->timestamp('created_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembuatan
            $table->timestamp('updated_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembaruan
            $table->timestamp('deleted_at')->nullable();// Menggunakan 'nullable' untuk mengizinkan kolom 'deleted_date' bernilai null

            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('deleted_by');
    
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
        Schema::dropIfExists('konkuritos');
    }
};
