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
        Schema::create('testimoni_deflos', function (Blueprint $table) {
            $table->id('id_testimoni_deflo');
            $table->foreignId('id_deflo')->references('id_nurseri')->on('dedikasi_floras');
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
        Schema::dropIfExists('testimoni_deflos');
    }
};
