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
        Schema::create('testimoni_signages', function (Blueprint $table) {
            $table->id('id_testimoni_shineage');
            $table->foreignId('id_shine_ages')->references('id_shineage')->on('shineages');
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
        Schema::dropIfExists('testimoni_signages');
    }
};
