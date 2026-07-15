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
        Schema::create('controller_colours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('controller_id')->constrained('controllers')->onDelete('cascade'); // Foreign key to controllers table
            $table->foreignId('colour_id')->constrained('colours')->onDelete('cascade'); // Foreign key to colours table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controller_colours');
    }
};
