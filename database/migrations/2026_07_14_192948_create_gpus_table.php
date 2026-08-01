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
        Schema::create('gpus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 200)->unique();
            $table->decimal('clockspeed', total: 8, places: 2);
            $table->string('clockspeed_unit', length: 5);
            $table->decimal('videomemory', total: 8, places: 2)->nullable();
            $table->string('videomemory_unit', length: 5)->nullable();
            $table->foreignId('manufacturer_id')->constrained('manufacturers')->onDelete('cascade'); // Foreign key to manufacturers table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gpus');
    }
};
