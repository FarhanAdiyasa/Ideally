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
        Schema::create('detail_komentars', function (Blueprint $table) {

            $table->foreignId('id_komentar');
            $table->foreignId('id_artikel');
            
            $table->foreign('id_komentar')->references('id_komentar')->on('komentars');
            
            $table->foreign('id_artikel')->references('id_artikel')->on('artikels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_komentars');
    }
};
