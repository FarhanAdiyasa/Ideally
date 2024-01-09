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
            $table->string('spesifikasi'); // Menggunakan tipe data 'integer' untuk tinggi
            $table->string('satuan');
            $table->integer('diameter_tajuk'); // Menggunakan tipe data 'integer' untuk diameter tajuk
            $table->string('strata');
            $table->string('warna_daun');
            $table->string('warna_bunga');
            $table->string('penyiraman');
            $table->string('penyinaran');
            $table->string('pemupukan');
            $table->string('gambar_1');
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
            $table->string('video')->nullable();
            $table->integer('stok')->default(0); // Menggunakan tipe data 'integer' untuk stok
            $table->integer('item_terjual')->default(0);
 $table->integer('berat');
            $table->string('armada_minimum');
            $table->decimal('harga_jual_projek_ideally', 10, 2);
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
          

            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('dedikasi_floras');
    }
};
