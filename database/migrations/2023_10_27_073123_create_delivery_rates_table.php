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
        Schema::create('delivery_rates', function (Blueprint $table) {
            $table->id('rate_id');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('service_id')->on('service_types');
            $table->string('origin');
            $table->string('destination');
            $table->decimal('cost', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_rates');
    }
};
