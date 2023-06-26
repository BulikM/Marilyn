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
        Schema::create('categoryable', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->unsigned();
            $table->foreignId('categoryable_id')->unsigned();
            $table->string('categoryable_type');
            $table->timestamps();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoryable');
    }
};
