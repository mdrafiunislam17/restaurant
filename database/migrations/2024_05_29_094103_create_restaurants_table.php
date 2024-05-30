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
        Schema::create("restaurants", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("address");
            $table->string("contact_info");
            $table->string("operating_hours");
            $table->boolean("is_available")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("restaurants");
    }
};
