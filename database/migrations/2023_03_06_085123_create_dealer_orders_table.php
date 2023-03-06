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
        Schema::create('dealer_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dealer_id');
            $table->string('order_number')->unique();
            $table->string('order_type');
            $table->double('payable_total');
            $table->double('delivery_charge');
            $table->double('discount_price');
            $table->double('tax');
            $table->double('total_price');
            $table->string('receiver_name')->nullable();
            $table->string('receiver_address')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('order_status')->default('pending');
            $table->foreignId('order_status_updated_by');
            $table->string('remarks');
            $table->string('delivery_method');
            $table->double('shipping_cost');
            $table->boolean('is_inside_dhaka')->nullable();
            $table->boolean('is_outside_dhaka')->nullable();
            $table->string('payment_status')->default('pending');
            $table->string('transaction_id')->unique();
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealer_orders');
    }
};