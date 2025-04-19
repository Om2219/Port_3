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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id('rid');
            $table->foreignId('uid')->constrained('users', 'uid')->onDelete('cascade');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->enum('type', ['French', 'Italian', 'Chinese', 'Indian', 'Mexican', 'Others']);
            $table->integer('cookingtime');
            $table->string('ingredients');
            $table->string('instructions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
