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
        Schema::create('promos', function (Blueprint $table) {
            $table->id('id_promo');
            $table->string('judul_promo');
            $table->text('deskripsi_promo'); // Menggunakan tipe data 'text' untuk deskripsi yang panjang
            $table->datetime('tanggal_mulai');
            $table->datetime('tanggal_selesai');
            $table->timestamp('created_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembuatan
            $table->timestamp('updated_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembaruan
            $table->string('satuan_potongan');
            $table->decimal('jumlah_potongan', 10, 2); // Menggunakan tipe data 'decimal' untuk jumlah potongan dengan 2 digit desimal
            
            $table->foreignId('created_by');
            $table->foreignId('updated_by');
            $table->foreignId('id_nurseri')->nullable();
            $table->foreignId('id_batu')->nullable();
            $table->foreignId('id_konkurito')->nullable();
            $table->foreignId('id_everlas_things')->nullable();
            $table->foreignId('id_shineage')->nullable();
            $table->foreignId('id_agrigard')->nullable();
            
            $table->foreign('created_by')->references('user_id')->on('users');

            $table->foreign('updated_by')->references('user_id')->on('users');

            $table->foreign('id_nurseri')->references('id_nurseri')->on('dedikasi_floras');

            $table->foreign('id_batu')->references('id_batu')->on('batunesias');

            $table->foreign('id_konkurito')->references('id_konkurito')->on('konkuritos');

            $table->foreign('id_everlas_things')->references('id_everlas_things')->on('everlas_things');

            $table->foreign('id_shineage')->references('id_shineage')->on('shineages');

            $table->foreign('id_agrigard')->references('id_agrigard')->on('agrigards');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
