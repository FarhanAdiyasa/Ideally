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
        Schema::create('sumber_artikels', function (Blueprint $table) {
            $table->id('id_sumber_artikel');
            $table->foreignId('id_artikel');
            $table->string('sumber_artikel');
            $table->timestamps();

            $table->foreign('id_artikel')->references('id_artikel')->on('artikels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sumber__artikels');
    }
};
