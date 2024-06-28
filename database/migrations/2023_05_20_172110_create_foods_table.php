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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();  // auto-incrementing primary key with name 'id'
            // $table->unsignedBigInteger('user_id');
            $table->string('name', 255);
            $table->string('description', 999);
            $table->decimal('carbohydrates', 5, 2);
            $table->decimal('protein', 5, 2);
            $table->decimal('fat', 5, 2);
            $table->string('image_url', 255);
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
