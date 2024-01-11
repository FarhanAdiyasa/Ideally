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
        Schema::create('order_everlas_things', function (Blueprint $table) {
            $table->foreignId('id_order')->constrained('orders');
            $table->foreignId('id_everlas_things');

            $table->foreign('id_everlas_things')->references('id_everlas_things')->on('everlas_things');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_everlas_things');
    }
};
