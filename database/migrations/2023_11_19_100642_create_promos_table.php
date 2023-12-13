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
        Schema::create('promos', function (Blueprint $table) {
            $table->id('id_promo');
            $table->string('nama_promo');
            $table->string('jenis_promo');
            $table->boolean('target_promo_b2i')->nullable();
            $table->boolean('target_promo_b2c')->nullable();
            $table->boolean('target_promo_b2b')->nullable();
            $table->string('tipe_promo')->default("diskon");
            $table->string('tipe_potongan');
            $table->decimal('persentase_promo')->nullable();
            $table->decimal('nominal_promo');
            $table->decimal('minimum_pembelian');
            $table->integer('kuota');
            $table->datetime('tanggal_mulai');
            $table->datetime('tanggal_selesai');
            $table->timestamp('tanggal_publikasi')->nullable();  

            $table->foreignId('created_by');
            $table->foreignId('updated_by')->nullable();
            $table->foreignId('deleted_by')->nullable();

            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('created_by')->references('user_id')->on('users');

            $table->foreign('updated_by')->references('user_id')->on('users');

        });
        Schema::create('dedikasi_floras_promos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_promo');
            $table->foreignId('id_nurseri');
            
            
            $table->foreign('id_promo')->references('id_promo')->on('promos');
            $table->foreign('id_nurseri')->references('id_nurseri')->on('dedikasi_floras');
        });
        Schema::create('batunesias_promos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_promo');
            $table->foreignId('id_batu');
            

            $table->foreign('id_promo')->references('id_promo')->on('promos');
            $table->foreign('id_batu')->references('id_batu')->on('batunesias');
        });
        Schema::create('konkuritos_promos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_promo');
            $table->foreignId('id_konkurito');
            
            
            $table->foreign('id_promo')->references('id_promo')->on('promos');
            $table->foreign('id_konkurito')->references('id_konkurito')->on('konkuritos');
        });
        Schema::create('everlas_things_promos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_promo');
            $table->foreignId('id_everlas_things');
            

            $table->foreign('id_promo')->references('id_promo')->on('promos');
            $table->foreign('id_everlas_things')->references('id_everlas_things')->on('everlas_things');
        });
        Schema::create('shineages_promos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_promo');
            $table->foreignId('id_shineage');
            

            $table->foreign('id_promo')->references('id_promo')->on('promos');
            $table->foreign('id_shineage')->references('id_shineage')->on('shineages');
        });
        Schema::create('agrigards_promos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_promo');
            $table->foreignId('id_agrigard');
            

            $table->foreign('id_promo')->references('id_promo')->on('promos');
            $table->foreign('id_agrigard')->references('id_agrigard')->on('agrigards');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
