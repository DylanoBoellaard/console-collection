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
        Schema::create('model_variants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('model_id')->constrained('models')->onDelete('cascade'); // Foreign key to models table
            $table->foreignId('variant_id')->constrained('variants')->onDelete('cascade'); // Foreign key to variants table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_variants');
    }
};
