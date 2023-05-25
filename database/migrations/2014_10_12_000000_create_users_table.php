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
        Schema::create("users", function (Blueprint $table) {
            $table->id();
            $table->char("first_name", 255)->nullable();
            $table->char("last_name", 255)->nullable();
            $table->char("email", 255)->unique();
            $table->char("phone", 255)->nullable();
            $table->char("mobile_phone", 255)->nullable();
            $table->timestamp("email_verified_at")->nullable();
            $table->char("password", 255);
            $table->rememberToken();
            $table->boolean('is_employee')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("users");
    }
};
