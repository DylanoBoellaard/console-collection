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
        // Motherboard revision with changed components. Belongs to a specific model
        Schema::create('revisions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 200)->unique();
            $table->string('description', length: 1000);
            $table->date('release_date');
            $table->date('end_production_date');
            $table->string('model_number', length: 50);
            $table->string('serial_number', length: 50);
            $table->string('slug', length: 200)->unique();
            $table->foreignId('model_id')->constrained('models')->onDelete('cascade'); // Foreign key to models table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisions');
    }
};
