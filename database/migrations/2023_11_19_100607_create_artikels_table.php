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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id('id_artikel');
            $table->string('judul_artikel');
            $table->string('slug');
            $table->text('deskripsi_artikel');
            $table->text('isi_artikel');
            $table->string('penulis_artikel');
            $table->string('profesi_penulis_artikel');
            $table->text('deskripsi_singkat_penulis_artikel');
            $table->string('gambar_artikel');
            $table->string('keterangan_gambar_artikel')->nullable();
            $table->string('keywords')->nullable();
            $table->timestamp('tanggal_publikasi')->nullable();
            $table->integer('pengunjung')->default(0);
            $table->foreignId('created_by'); // Kolom foreign key untuk pembuat artikel
            $table->foreignId('updated_by')->nullable(); // Kolom foreign key untuk yang memperbarui artikel
            $table->foreignId('deleted_by')->nullable(); // Kolom foreign key untuk yang menghapus artikel (nullable karena belum tentu setiap artikel dihapus)
            
            $table->timestamps();
            $table->softDeletes();

            // Menambahkan constraint foreign key
            $table->foreign('created_by')->references('user_id')->on('users');
            $table->foreign('updated_by')->references('user_id')->on('users');
            $table->foreign('deleted_by')->references('user_id')->on('users');
           
        });
        Schema::create('artikel_kategoris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_artikel');
            $table->foreignId('id_kategori_artikel');
            $table->timestamps();

            $table->foreign('id_kategori_artikel')->references('id_kategori_artikel')->on('kategori_artikels')->delete('cascade');
            $table->foreign('id_artikel')->references('id_artikel')->on('artikels')->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
