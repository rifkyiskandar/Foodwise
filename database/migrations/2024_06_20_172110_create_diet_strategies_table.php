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
        Schema::create('diet_strategies', function (Blueprint $table) {
            $table->id();  // auto-incrementing primary key with name 'id'
            $table->unsignedBigInteger('user_id');
            $table->decimal('current_weight', 5, 2);
            $table->decimal('target_weight', 5, 2);
            $table->string('strategy', 999);
            $table->integer('estimated_time');
            $table->unsignedBigInteger('consumption_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('consumption_id')->references('id')->on('user_food_consumptions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diet_strategies');
    }
};
