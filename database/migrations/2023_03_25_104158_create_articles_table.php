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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->text('title_span')->nullable();
            $table->longText('title_article')->nullable();
            $table->text('abotus_span')->nullable();
            $table->longText('abotus_article')->nullable();
            $table->text('courses_span')->nullable();
            $table->longText('courses_article')->nullable();
            $table->text('trainer_span')->nullable();
            $table->longText('trainer_article')->nullable();
            $table->text('timetable_span')->nullable();
            $table->longText('timetable_article')->nullable();
            $table->text('ourblog_span')->nullable();
            $table->longText('ourblog_article')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
