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
        Schema::create('console_controllers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('console_id')->constrained('consoles')->onDelete('cascade'); // Foreign key to consoles table
            $table->foreignId('controller_id')->constrained('controllers')->onDelete('cascade'); // Foreign key to controllers table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('console_controllers');
    }
};
