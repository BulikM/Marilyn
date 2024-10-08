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
        Schema::create('subcategory', function (Blueprint $table) {
            $table->id();
            $table->char('name',255);
            $table->foreignId('parent_id')->unsigned()->nullable()->constrained('subcategory')->onDelete('cascade');
            $table->char('slug')->unique();
            $table->softDeletes();
            $table->timestamps();
        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
