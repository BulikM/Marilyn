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
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orders_id')->unsigned();
            $table->foreignId('product_id')->unsigned();
            $table->unsignedDecimal('price', 8, 2);
            $table->string('name');
            $table->char('brand',255);
            $table->char('color',255)->nullable();
            $table->char('size',255)->nullable();
            $table->string('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
