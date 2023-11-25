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
        Schema::create('komentars', function (Blueprint $table) {
            $table->id('id_komentar');
            $table->text('isi_komentar'); // Menggunakan tipe data 'text' untuk isi komentar yang panjang
            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('created_by');
            $table->foreignId('updated_by');
            $table->foreignId('deleted_by')->nullable();
       
            $table->integer('status_tampil');
            
    
            $table->foreign('created_by')->references('user_id')->on('users');

            

            // Menghubungkan kolom 'updated_date' dengan tabel 'users'
            $table->foreign('updated_by')->references('user_id')->on('users');

            // Menghubungkan kolom 'deleted_date' dengan tabel 'users'
            $table->foreign('deleted_by')->references('user_id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentars');
    }
};
