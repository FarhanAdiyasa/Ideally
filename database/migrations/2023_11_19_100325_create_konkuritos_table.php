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
        Schema::create('konkuritos', function (Blueprint $table) {
            $table->id('id_konkurito');
            $table->string('nama_produk');
            $table->string('slug');
            $table->string('jenis');
            $table->text('spesifikasi'); // Menggunakan tipe data 'text' untuk spesifikasi yang panjang
            $table->string('satuan');
            $table->string('garansi');
            $table->string('warna_1');
            $table->string('warna_2')->nullable();
            $table->string('dimensi');
            $table->string('gambar_1');
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
            $table->string('gambar_4')->nullable();
            $table->string('gambar_5')->nullable();
            $table->string('video')->nullable();
            $table->integer('stok')->default(0); // Menggunakan tipe data 'integer' untuk stok
            $table->integer('item_terjual')->default(0);
            $table->text('deskripsi_singkat');
            $table->decimal('harga_b2I_11', 10, 2);
            $table->decimal('harga_b2I_1', 10, 2);
            $table->decimal('harga_b2B_11', 10, 2);
            $table->decimal('harga_b2B_1', 10, 2);
            $table->decimal('harga_b2C_11', 10, 2);
            $table->decimal('harga_b2C_1', 10, 2);
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
        Schema::dropIfExists('konkuritos');
    }
};
