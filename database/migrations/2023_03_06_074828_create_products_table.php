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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->references('id')
                                            ->on('categories')
                                            ->restrictOnDelete();
            $table->foreignId('brand_id')->references('id')
                                            ->on('brands')
                                            ->restrictOnDelete()
                                            ->nullable();
            $table->string('slug')->unique();
            $table->string('short_description');
            $table->longText('long_description');
            $table->string('sku')->unique();
            $table->double('unit_price');
            $table->double('quantity_price');
            $table->string('tags');
            $table->double('discount');
            $table->boolean('isFeatured')->default(0);
            $table->string('image');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};