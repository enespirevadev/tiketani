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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('customer_id');

            $table->unsignedInteger('order_number');
            $table->dateTime('order_date');
            $table->unsignedInteger('seats');
            $table->enum('category', ['A', 'B', 'C', 'D'])->nullable();
            $table->unsignedDecimal('category_price', 8, 2);
            $table->unsignedDecimal('total_price', 8, 2);

            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_event_id_foreign');
            $table->dropForeign('orders_customer_id_foreign');
        });

        Schema::dropIfExists('orders');
    }
};