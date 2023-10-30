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
        Schema::create('delivery_histories', function (Blueprint $table) {
            $table->id('history_id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->unsignedBigInteger('delivery_id');
            $table->foreign('delivery_id')->references('delivery_id')->on('deliveries');
            $table->string('shipping_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_histories');
    }
};
