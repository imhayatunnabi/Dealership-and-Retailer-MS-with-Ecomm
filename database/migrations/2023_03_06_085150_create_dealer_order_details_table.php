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
        Schema::create('dealer_order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dealer_order_id')->constrained('dealer_orders')->nullable();
            $table->foreignId('product_id')->constrained('products')->nullable();
            $table->double('quantity');
            $table->double('approved_quantity');
            $table->foreignId('approved_by');
            $table->double('unit_price');
            $table->double('subtotal');
            $table->double('approved_subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealer_order_details');

  }
};