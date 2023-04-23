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
        Schema::create('user_workouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('workout_id')->references('id')->on('workouts')->onUpdate('cascade')->onDelete('cascade');
            $table->string('duration')->nullable();
            $table->string('distance')->nullable();
            $table->date('date')->nullable();
            $table->time('starts_at')->nullable();
            $table->time('finishes_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_workouts');
    }
};
