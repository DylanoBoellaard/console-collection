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
        Schema::create('threejs_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('file_name', length: 250)->unique();
            $table->foreignId('variant_id')->constrained('variants')->onDelete('cascade'); // Foreign key to variants table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threejs_models');
    }
};
