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
        Schema::create('everlas_things', function (Blueprint $table) {
            $table->id('id_everlas_things');
            $table->string('seri');
            $table->string('nama_produk');
            $table->string('slug');
            $table->string('satuan');
            $table->string('jenis');
            $table->string('garansi');
            $table->string('warna');
            $table->string('dimensi');
            $table->string('material_pendukung');
            $table->string('finishing');
            $table->string('gambar_1');
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
            $table->string('gambar_4')->nullable();
            $table->string('gambar_5')->nullable();
            $table->string('gambar_6')->nullable();
            $table->text('deskripsi_singkat'); // Menggunakan tipe data 'text' untuk deskripsi yang panjang
            $table->integer('stok')->default(0); // Menggunakan tipe data 'integer' untuk stok
            $table->integer('item_terjual')->default(0);
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
        Schema::dropIfExists('everlas_things');
    }
};
