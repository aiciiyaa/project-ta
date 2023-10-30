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
        Schema::create('delivery_status_monitorings', function (Blueprint $table) {
            $table->id('tracking_id');
            $table->unsignedBigInteger('delivery_id');
            $table->foreign('delivery_id')->references('delivery_id')->on('deliveries');
            $table->string('location');
            $table->string('status');
            $table->timestamp('timestamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_status_monitorings');
    }
};
