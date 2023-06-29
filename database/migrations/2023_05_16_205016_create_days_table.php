<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("days", function (Blueprint $table) {
            $table->id();
            $table->char("name", 255);
        });
        Schema::table("users", function (Blueprint $table) {
            $table
                ->foreignId("day_id")
                ->after("mobile_phone")
                ->nullable()
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("days");
    }
};
