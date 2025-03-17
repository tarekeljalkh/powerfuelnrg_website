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
        Schema::create('why_choose_us', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Section title
            $table->string('subtitle')->nullable(); // Subtitle (e.g., "Our Skills")
            $table->string('second_title')->nullable(); // Subtitle (e.g., "Our Skills")
            $table->text('description')->nullable(); // Description of the section
            $table->string('icon'); // Flaticon or FontAwesome icon class
            $table->string('image')->nullable(); // Image path for the section

            // Three skill fields
            $table->string('skill_1');
            $table->integer('percentage_1')->default(0);
            $table->string('skill_2');
            $table->integer('percentage_2')->default(0);
            $table->string('skill_3');
            $table->integer('percentage_3')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_us');
    }
};
