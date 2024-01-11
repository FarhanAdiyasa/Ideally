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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_order');
            $table->string('nomor_order', 8)->unique();
            $table->foreignId('user_id');
            $table->string('status');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
        });

        Schema::create('dedikasi_floras_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_nurseri');
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_nurseri')->references('id_nurseri')->on('dedikasi_floras')->delete('cascade');
        });

        Schema::create('agrigards_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_agrigard');
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_agrigard')->references('id_agrigard')->on('agrigards')->delete('cascade');
        });

        Schema::create('batunesias_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_batu');
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_batu')->references('id_batu')->on('batunesias')->delete('cascade');
        });

        Schema::create('everlas_things_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_everlas_things');
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_everlas_things')->references('id_everlas_things')->on('everlas_things')->delete('cascade');
        });

        Schema::create('konkuritos_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_konkurito');
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_konkurito')->references('id_konkurito')->on('konkuritos')->delete('cascade');
        });

        Schema::create('shineages_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_shineage');
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_shineage')->references('id_shineage')->on('shineages')->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
