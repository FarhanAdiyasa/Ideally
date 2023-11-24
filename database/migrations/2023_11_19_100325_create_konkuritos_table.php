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
            $table->string('warna_2')->nullable();
            $table->string('dimensi');
            $table->string('gambar')->nullable();
            $table->string('video')->nullable();
            $table->integer('stok')->default(0); // Menggunakan tipe data 'integer' untuk stok
            $table->integer('item_terjual')->default(0);
            $table->text('deskripsi_singkat'); // Menggunakan tipe data 'text' untuk deskripsi yang panjang
            $table->decimal('hpp', 10, 2); // Menggunakan tipe data 'decimal' untuk harga pokok produksi dengan 2 digit desimal
            $table->decimal('harga_b2I_11+_unit', 10, 2);
            $table->decimal('harga_b2I_1+_unit', 10, 2);
            $table->decimal('harga_b2B_11+_unit', 10, 2);
            $table->decimal('harga_b2B_1+_unit', 10, 2);
            $table->decimal('harga_b2C_11+_unit', 10, 2);
            $table->decimal('harga_b2C_1+_unit', 10, 2);
            $table->timestamp('tanggal_publikasi')->nullable();

            $table->timestamp('created_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembuatan
            $table->timestamp('updated_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembaruan
            $table->timestamp('softDelete')->nullable();// Menggunakan 'nullable' untuk mengizinkan kolom 'deleted_date' bernilai null

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
        Schema::dropIfExists('konkuritos');
    }
};
