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
        Schema::create('delivery_routes', function (Blueprint $table) {
            $table->id('route_id');
            $table->unsignedBigInteger('delivery_id');
            $table->foreign('delivery_id')->references('delivery_id')->on('deliveries');
            $table->string('start_location');
            $table->string('intermediate_location')->nullable();
            $table->string('destination_location');
            $table->decimal('distance', 10, 2);
            $table->string('travel_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_routes');
    }
};
