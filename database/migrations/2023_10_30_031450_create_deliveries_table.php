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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id('delivery_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('driver_id');
            $table->timestamp('shipping_date');
            $table->string('shipping_status');
            $table->timestamp('estimated_delivery_time')->nullable();
            $table->decimal('shipping_cost', 10, 2);
            
            // Add a foreign key to the Orders table
            $table->foreign('order_id')
                ->references('order_id')
                ->on('orders')
                ->onDelete('cascade');
            
            // Add a foreign key to the Driver table
            $table->foreign('driver_id')
                ->references('driver_id')
                ->on('drivers')
                ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
