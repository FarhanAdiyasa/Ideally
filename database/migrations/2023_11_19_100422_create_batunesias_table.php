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
        Schema::create('batunesias', function (Blueprint $table) {
            $table->id('id_batu');
            $table->string('nama_produk');
            $table->string('slug');
            $table->string('kategori');
            $table->string('spek');
            $table->string('satuan');
            $table->string('warna');
            $table->string('gambar_1')->nullable();
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
            $table->string('video')->nullable();
            $table->integer('stok')->default(0); // Menggunakan tipe data 'integer' untuk stok
            $table->integer('item_terjual')->default(0);
            $table->text('deskripsi_singkat'); 
            $table->decimal('harga_b2I_31_unit', 10, 2);
            $table->decimal('harga_b2I_11_unit', 10, 2);
            $table->decimal('harga_b2I_1_unit', 10, 2);
            $table->decimal('harga_b2B_31_unit', 10, 2);
            $table->decimal('harga_b2B_11_unit', 10, 2);
            $table->decimal('harga_b2B_1_unit', 10, 2);
            $table->decimal('harga_b2C_31_unit', 10, 2);
            $table->decimal('harga_b2C_11_unit', 10, 2);
            $table->decimal('harga_b2C_1_unit', 10, 2);
            $table->timestamp('tanggal_publikasi')->nullable();

            $table->timestamp('created_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembuatan
            $table->timestamp('updated_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembaruan
            $table->timestamp('softDelete')->nullable();// Menggunakan 'nullable' untuk mengizinkan kolom 'deleted_date' bernilai null

            $table->foreignId('created_by');
            $table->foreignId('updated_by')->nullable();
            $table->foreignId('deleted_by')->nullable();
    
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
        Schema::dropIfExists('promos');
        Schema::dropIfExists('batunesias');
    }
};
