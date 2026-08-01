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
        Schema::create('accessory_variants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('accessory_id')->constrained('accessories')->onDelete('cascade'); // Foreign key to accessories table
            $table->foreignId('variant_id')->constrained('variants')->onDelete('cascade'); // Foreign key to variants table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessory_variants');
    }
};
