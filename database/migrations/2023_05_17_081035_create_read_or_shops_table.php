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
        Schema::create("read_or_shops", function (Blueprint $table) {
            $table->id();
            $table->char("name");
        });
        Schema::table("users", function (Blueprint $table) {
            $table
                ->foreignId("read_or_shop_id")
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
        Schema::dropIfExists("read_or_shops");
    }
};
