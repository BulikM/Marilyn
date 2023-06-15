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
        Schema::create('keywords', function (Blueprint $table) {
            $table->id();
            $table->char('name',255);
            $table->timestamps();
        });
        Schema::create('keywordables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('keyword_id')->unsigned();
            $table->foreignId('keywordable_id')->unsigned();
            $table->string('keywordable_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keywords');
        Schema::dropIfExists('keywordables');
    }
};
