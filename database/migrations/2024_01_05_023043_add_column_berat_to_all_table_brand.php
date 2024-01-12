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
        Schema::table('agrigards', function (Blueprint $table) {
            $table->integer('berat_gram')->nullable()->after('armada_minimum');
        });

        Schema::table('batunesias', function (Blueprint $table) {
            $table->integer('berat_gram')->nullable()->after('armada_minimum');
        });

        Schema::table('dedikasi_floras', function (Blueprint $table) {
            $table->integer('berat_gram')->nullable()->after('armada_minimum');
        });

        Schema::table('everlas_things', function (Blueprint $table) {
            $table->integer('berat_gram')->nullable()->after('armada_minimum');
        });

        Schema::table('konkuritos', function (Blueprint $table) {
            $table->integer('berat_gram')->nullable()->after('armada_minimum');
        });

        Schema::table('shineages', function (Blueprint $table) {
            $table->integer('berat_gram')->nullable()->after('armada_minimum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agrigards', function (Blueprint $table) {
            $table->dropColumn('berat_gram');
        });

        Schema::table('batunesias', function (Blueprint $table) {
            $table->dropColumn('berat_gram');
        });

        Schema::table('dedikasi_floras', function (Blueprint $table) {
            $table->dropColumn('berat_gram');
        });

        Schema::table('everlas_things', function (Blueprint $table) {
            $table->dropColumn('berat_gram');
        });

        Schema::table('konkuritos', function (Blueprint $table) {
            $table->dropColumn('berat_gram');
        });

        Schema::table('shineages', function (Blueprint $table) {
            $table->dropColumn('berat_gram');
        });
    }
};
