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
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 200)->unique();
            $table->string('description', length: 1000);
            $table->enum('item_type', ['console', 'controller', 'accessory'])->default('console');
            $table->foreignId('edition_id')->constrained('editions')->onDelete('cascade'); // Foreign key to editions table
            $table->string('model_number', length: 50)->nullable();
            $table->string('serial_number', length: 50)->nullable();
            $table->string('slug', length: 200)->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variants');
    }
};
