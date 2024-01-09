'created_at' => now(),
            'created_by' => $this->faker->numberBetween(1, 5)<?php

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
        Schema::create('shineages', function (Blueprint $table) {
            $table->id('id_shineage');
            $table->string('seri');
            $table->string('nama_produk');
            $table->string('slug');
            $table->string('jenis');
            $table->decimal('panjang', 10, 2);
            $table->decimal('lebar', 10, 2);
            $table->decimal('diameter', 10, 2);
            $table->decimal('tinggi', 10, 2);
            $table->string('garansi');
            $table->string('warna');
            $table->string('dimensi');
            $table->string('material_pendukung');
            $table->string('finishing');
            $table->string('gambar_1');
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
            $table->string('gambar_4')->nullable();
            $table->string('gambar_5')->nullable();
            $table->string('gambar_6')->nullable();
            $table->string('video')->nullable();
            $table->string('armada_minimum');
            $table->text('deskripsi_singkat'); 
            $table->integer('stok')->default(0); 
            $table->integer('item_terjual')->default(0);
            $table->integer('berat');
            $table->decimal('harga_jual_projek_ideally', 10, 2);
            $table->decimal('harga_b2I_11_unit', 10, 2);
            $table->decimal('harga_b2I_1_unit', 10, 2);
            $table->decimal('harga_b2B_11_unit', 10, 2);
            $table->decimal('harga_b2B_1_unit', 10, 2);
            $table->decimal('harga_b2C_11_unit', 10, 2);
            $table->decimal('harga_b2C_1_unit', 10, 2);
            $table->timestamp('tanggal_publikasi')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('created_by');
            $table->foreignId('updated_by')->nullable();
            $table->foreignId('deleted_by')->nullable();
    
            $table->foreign('created_by')->references('user_id')->on('users');
            $table->foreign('updated_by')->references('user_id')->on('users');
            $table->foreign('deleted_by')->references('user_id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shineages');
    }
};
