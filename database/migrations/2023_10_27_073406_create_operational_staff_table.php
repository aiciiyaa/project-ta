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
        Schema::create('operational_staff', function (Blueprint $table) {
            $table->id('staff_id');
            $table->string('staff_name');
            $table->string('position');
            $table->string('staff_telephone_number');
            $table->string('staff_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operational_staff');
    }
};
