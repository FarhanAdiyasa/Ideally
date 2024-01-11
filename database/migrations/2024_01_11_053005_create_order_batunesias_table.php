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
        Schema::create('order_batunesias', function (Blueprint $table) {
            $table->foreignId('id_order')->constrained('orders');
            $table->foreignId('id_batu');

            $table->foreign('id_batu')->references('id_batu')->on('batunesias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_batunesias');
    }
};
