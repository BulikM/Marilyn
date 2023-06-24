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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orders_id')->nullable()->unsigned();
            $table
                ->foreignId("user_id")
                ->nullable()
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
            $table->char("company", 255)->nullable();
            $table->char("vat", 255)->nullable();
            $table->char("first_name", 255);
            $table->char("last_name", 255);
            $table->char("address", 255);
            $table->char("address_2", 255)->nullable();
            $table->char("city", 255);
            $table->char("province", 255);
            $table->char("zipcode", 255);
            $table->char("country", 255);
            $table->char("phone", 255);
            $table->char("email", 255);
            $table->boolean('shipping') ->default(false);
            $table->boolean('billing') ->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
