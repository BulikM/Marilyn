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
        Schema::create('product_propertylists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->unsigned()->constrained()->cascadeOnDelete();
            $table->foreignId('brand_id')->unsigned()->constrained()->cascadeOnDelete();
            $table->foreignId('color_id')->nullable()->unsigned()->constrained()->cascadeOnDelete();
            $table->foreignId('size_id')->nullable()->unsigned()->constrained()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_propertylists');
    }
};
