<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('provinsi');
            $table->dropColumn('kabupaten');
            $table->dropColumn('kelurahan');
            $table->dropColumn('kecamatan');
        });
    }
};
