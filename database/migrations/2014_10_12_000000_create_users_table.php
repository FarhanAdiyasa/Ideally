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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('email')->unique(); // Menandai kolom email sebagai unik
            $table->string('password'); // Gunakan tipe data yang sesuai untuk menyimpan password yang telah di-hash
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('telephone_number');
            $table->date('birthdate'); // Menggunakan tipe data 'date' untuk tanggal lahir
            $table->string('gender');
            $table->string('profile_picture');
            $table->timestamp('created_date');
            $table->timestamp('modified_date');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
