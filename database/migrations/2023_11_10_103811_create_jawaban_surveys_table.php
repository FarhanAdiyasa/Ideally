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
        Schema::create('jawaban_surveys', function (Blueprint $table) {
            $table->id('id_jawaban_survey');
            $table->string('jawaban');

            $table->foreignId('id_user');
            $table->foreignId('id_pertanyaan_survey');



            $table->foreign('id_user')->references('user_id')->on('users');
            $table->foreign('id_pertanyaan_survey')->references('id_pertanyaan_survey')->on('pertanyaan_surveys');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban__surveys');
    }
};
