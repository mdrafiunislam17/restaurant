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
        Schema::create("orders", function (Blueprint $table) {
            $table->id();
            $table->bigInteger("customer_id")->unsigned();
            $table->timestamp("order_date");
            $table->decimal("total_amount", 10, 2);
            $table->text("delivery_address")->nullable();
            $table->timestamp("pickup_time")->nullable();
            $table->string("status", 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("orders");
    }
};
