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
        Schema::create("newsletter_infos", function (Blueprint $table) {
            $table->id();
            $table->char("name", 255);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create("newsletter_info_user", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("newsletter_info_id")
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
            $table
                ->foreignId("user_id")
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();

            $table->unique(["user_id", "newsletter_info_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("newsletter_infos");
        Schema::dropIfExists("newsletter_Info_user");
    }
};
