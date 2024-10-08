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
        Schema::create("shipping_addresses", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("user_id")
                ->nullable()
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
            $table->char("first_name", 255);
            $table->char("last_name", 255);
            $table->char("address_1", 255);
            $table->char("address_2", 255)->nullable();
            $table->char("city", 255);
            $table->char("province", 255);
            $table->char("zipcode", 255);
            $table->char("country", 255);
            $table->char("phone", 255);
            $table->boolean("is_primary")->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("shipping_addresses");
    }
};
