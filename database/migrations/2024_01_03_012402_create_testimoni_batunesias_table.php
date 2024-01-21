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
        Schema::create('testimoni_batunesias', function (Blueprint $table) {
            $table->id('id_testimoni_batunesia');
            $table->foreignId('id_users')->references('user_id')->on('users');
            $table->foreignId('id_orders')->references('id_order')->on('orders');
            $table->foreignId('id_batunesia')->references('id_batu')->on('batunesias');
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
        Schema::dropIfExists('testimoni_batunesias');
    }
};
