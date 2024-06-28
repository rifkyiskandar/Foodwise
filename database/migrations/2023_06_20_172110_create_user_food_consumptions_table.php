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
        Schema::create('user_food_consumptions', function (Blueprint $table) {
            $table->id();  // auto-incrementing primary key with name 'id'
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('food_id');
            $table->date('consumption_date');
            $table->decimal('quantity', 5, 2);
            $table->decimal('total_calories', 10, 3);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('food_id')->references('id')->on('foods');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_food_consumptions');
    }
};
