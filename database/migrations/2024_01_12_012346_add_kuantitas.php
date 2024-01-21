<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tambah kolom kuantitas pada tabel dedikasi_floras_orders jika belum ada
       
            Schema::table('dedikasi_floras_orders', function (Blueprint $table) {
                $table->integer('kuantitas')->default(0);
            });
        

        // Tambah kolom kuantitas pada tabel agrigards_orders jika belum ada
 
            Schema::table('agrigards_orders', function (Blueprint $table) {
                $table->integer('kuantitas')->default(0);
            });
        

        // Tambah kolom kuantitas pada tabel batunesias_orders jika belum ada
  
            Schema::table('batunesias_orders', function (Blueprint $table) {
                $table->integer('kuantitas')->default(0);
            });
        

        // Tambah kolom kuantitas pada tabel everlas_things_orders jika belum ada
      
            Schema::table('everlas_things_orders', function (Blueprint $table) {
                $table->integer('kuantitas')->default(0);
            });
        

        // Tambah kolom kuantitas pada tabel konkuritos_orders jika belum ada
  
            Schema::table('konkuritos_orders', function (Blueprint $table) {
                $table->integer('kuantitas')->default(0);
            });
        

        // Tambah kolom kuantitas pada tabel shineages_orders jika belum ada
 
            Schema::table('shineages_orders', function (Blueprint $table) {
                $table->integer('kuantitas')->default(0);
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Rollback kolom kuantitas pada tabel dedikasi_floras_orders
        Schema::table('dedikasi_floras_orders', function (Blueprint $table) {
            $table->dropColumn('kuantitas');
        });

        // Rollback kolom kuantitas pada tabel agrigards_orders
        Schema::table('agrigards_orders', function (Blueprint $table) {
            $table->dropColumn('kuantitas');
        });

        // Rollback kolom kuantitas pada tabel batunesias_orders
        Schema::table('batunesias_orders', function (Blueprint $table) {
            $table->dropColumn('kuantitas');
        });

        // Rollback kolom kuantitas pada tabel everlas_things_orders
        Schema::table('everlas_things_orders', function (Blueprint $table) {
            $table->dropColumn('kuantitas');
        });

        // Rollback kolom kuantitas pada tabel konkuritos_orders
        Schema::table('konkuritos_orders', function (Blueprint $table) {
            $table->dropColumn('kuantitas');
        });

        // Rollback kolom kuantitas pada tabel shineages_orders
        Schema::table('shineages_orders', function (Blueprint $table) {
            $table->dropColumn('kuantitas');
        });
    }
};
