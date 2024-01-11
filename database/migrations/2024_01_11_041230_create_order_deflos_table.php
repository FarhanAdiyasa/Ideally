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
        Schema::create('order_deflo', function (Blueprint $table) {
            $table->foreignId('id_order')->constrained('orders');
            $table->foreignId('id_nurseri');

            $table->foreign('id_nurseri')->references('id_nurseri')->on('dedikasi_floras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_deflo');
    }
};
