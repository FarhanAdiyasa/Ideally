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
            $table->timestamp('tanggal_mulai');
            $table->timestamp('tanggal_selesai');
            $table->timestamp('created_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembuatan
            $table->timestamp('updated_at')->useCurrent(); // Menggunakan 'useCurrent' untuk mengisi otomatis tanggal pembaruan
            $table->string('satuan_potongan');
            $table->decimal('jumlah_potongan', 10, 2); // Menggunakan tipe data 'decimal' untuk jumlah potongan dengan 2 digit desimal
            
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('id_nurseri');
            $table->unsignedBigInteger('id_batu');
            $table->unsignedBigInteger('id_konkurito');
            $table->unsignedBigInteger('id_everlas_things');
            $table->unsignedBigInteger('id_shineage');
            $table->unsignedBigInteger('id_agrigard');
            
            $table->foreign('created_by')->references('user_id')->on('users');

            $table->foreign('updated_by')->references('user_id')->on('users');

            $table->foreign('id_nurseri')->references('id_nurseri')->on('dedikasi__floras');

            $table->foreign('id_batu')->references('id_batu')->on('batunesias');

            $table->foreign('id_konkurito')->references('id_konkurito')->on('konkuritos');

            $table->foreign('id_everlas_things')->references('id_everlas_things')->on('id_everlas_things');

            $table->foreign('id_shineage')->references('id_shineage')->on('shineages');

            $table->foreign('id_agrigard')->references('id_agrigard')->on('agrigards');

            $table->timestamps();
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
