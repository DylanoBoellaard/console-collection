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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('filename', length: 250)->unique();
            $table->string('caption', length: 250);
            $table->foreignId('image_type_id')->constrained('image_types')->onDelete('cascade'); // Foreign key to image_types table
            $table->foreignId('variant_id')->constrained('variants')->onDelete('cascade')->nullable(); // Foreign key to variants table
            // $table->foreignId('controller_variant_id')->constrained('controller_variants')->onDelete('cascade')->nullable(); // Foreign key to controller_variants table
            // $table->foreignId('accessory_variant_id')->constrained('accessory_variants')->onDelete('cascade')->nullable(); // Foreign key to accessory_variants table
            /*
            //Gives issues. FIX LATER
            $table->foreignId('game_id')->constrained('games')->nullable()->onDelete('cascade'); // Foreign key to games table
            */
            $table->integer('game_id')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
