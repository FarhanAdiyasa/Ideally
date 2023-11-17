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
        Schema::create('jawaban__surveys', function (Blueprint $table) {
            $table->id('id_jawaban_survey');
            $table->string('jawaban');

            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_pertanyaan_survey');

            $table->timestamps();

            $table->foreign('id_user')->references('user_id')->on('users');
            $table->foreign('id_pertanyaan_survey')->references('id_pertanyaan_survey')->on('pertanyaan__surveys');
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
