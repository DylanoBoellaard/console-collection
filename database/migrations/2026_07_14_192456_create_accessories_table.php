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
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 100)->unique();              // Playstation 2 8MB Memory card Crystal
            $table->string('description', length: 1000)->nullable();    // Description of the accessory
            $table->string('model_number', length: 50)->nullable();     // SCPH-10020C (Crystal)
            $table->string('serial_number', length: 50)->nullable();    // Serial number
            $table->string('slug', length: 200)->unique();              // slug
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
};
