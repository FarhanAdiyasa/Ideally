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
        Schema::create('testimoni_agrigards', function (Blueprint $table) {
            $table->id('id_testimoni_agrigard');
            $table->foreignId('id_agri_gard')->references('id_agrigard')->on('agrigards');
            $table->string('Deskripsi');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimoni_agrigards');
    }
};