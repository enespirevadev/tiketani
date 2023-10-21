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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->unsignedInteger('available_seats');
            $table->unsignedDecimal('categoryA_price', 8, 2);
            $table->unsignedDecimal('categoryB_price', 8, 2);
            $table->unsignedDecimal('categoryC_price', 8, 2);
            $table->unsignedDecimal('categoryD_price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
