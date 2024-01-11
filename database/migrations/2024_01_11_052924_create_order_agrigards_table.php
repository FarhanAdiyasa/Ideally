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
        Schema::create('order_agrigards', function (Blueprint $table) {
            $table->foreignId('id_order')->constrained('orders');
            $table->foreignId('id_agrigard');

            $table->foreign('id_agrigard')->references('id_agrigard')->on('agrigards');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_agrigards');
    }
};
