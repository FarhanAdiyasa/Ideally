<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            
            $table->id('user_id');
            $table->string('email')->unique(); // Menandai kolom email sebagai unik
            $table->string('password');
            $table->string('google_id'); 
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('telephone_number');
            $table->date('birthdate'); 
            $table->string('gender');
            $table->string('profesi')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('email_verified_at');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dedikasi_floras');
        Schema::dropIfExists('everlas_things');
        Schema::dropIfExists('artikels');
        Schema::dropIfExists('promos');
        Schema::dropIfExists('users');
    }
};
