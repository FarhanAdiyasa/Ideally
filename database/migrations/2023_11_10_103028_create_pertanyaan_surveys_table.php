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
        Schema::create('pertanyaan_surveys', function (Blueprint $table) {
            $table->id('id_pertanyaan_survey');
            $table->string('pertanyaan_survey');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('deleted_at')->nullable();// Menggunakan 'nullable' untuk mengizinkan kolom 'deleted_date' bernilai null
            
            $table->foreignId('id_survey');
            $table->foreignId('created_by');
            $table->foreignId('updated_by');
            $table->foreignId('deleted_by');
        
            $table->foreign('id_survey')->references('id_survey')->on('surveys');
            // Menghubungkan kolom 'created_date' dengan tabel 'users'
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
        Schema::dropIfExists('pertanyaan__surveys');
    }
};  
