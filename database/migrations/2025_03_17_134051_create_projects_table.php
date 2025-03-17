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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Subtitle (e.g., "Industrial Sector")
            $table->string('subtitle'); // Section Title
            $table->text('description'); // Section Description
            $table->string('first_image'); // Background image
            $table->string('second_image'); // Background image
            $table->string('third_image'); // Background image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
