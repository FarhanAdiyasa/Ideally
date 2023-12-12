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
        Schema::create('rating_artikels', function (Blueprint $table) {
            $table->id('id_rating_artikel');
            $table->foreignId('id_artikel');
            $table->foreignId('user_id');
            $table->integer('rating_artikel');
            $table->timestamps();

            $table->foreign('id_artikel')->references('id_artikel')->on('artikels');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating__artikels');
    }
};
