<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_order');
            $table->string('nomor_order', 8)->unique();
            $table->foreignId('user_id');
            $table->string('status_pembayaran');
            $table->string('status_pesanan');
            $table->decimal('total_harga', 10, 2);
            $table->decimal('biaya_ongkir', 10, 2)->default(0);
            $table->decimal('biaya_lainnya', 10, 2)->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
        });

        Schema::create('dedikasi_floras_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_nurseri');
            $table->integer('quantity')->default(1); 
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_nurseri')->references('id_nurseri')->on('dedikasi_floras')->delete('cascade');
        });

        Schema::create('agrigards_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_agrigard');
            $table->integer('quantity')->default(1); 
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_agrigard')->references('id_agrigard')->on('agrigards')->delete('cascade');
        });

        Schema::create('batunesias_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_batu');
            $table->integer('quantity')->default(1); 
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_batu')->references('id_batu')->on('batunesias')->delete('cascade');
        });

        Schema::create('everlas_things_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_everlas_things');
            $table->integer('quantity')->default(1); 
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_everlas_things')->references('id_everlas_things')->on('everlas_things')->delete('cascade');
        });

        Schema::create('konkuritos_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_konkurito');
            $table->integer('quantity')->default(1); 
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_konkurito')->references('id_konkurito')->on('konkuritos')->delete('cascade');
        });

        Schema::create('shineages_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order');
            $table->foreignId('id_shineage');
            $table->integer('quantity')->default(1); 
            
            $table->foreign('id_order')->references('id_order')->on('orders')->delete('cascade');
            $table->foreign('id_shineage')->references('id_shineage')->on('shineages')->delete('cascade');
        });
    }
};
