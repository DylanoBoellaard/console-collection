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
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 100)->unique();              // CD player, Blu-Ray support, WiFi, Bluetooth, backwards compatible, etc.
            $table->string('description', length: 1000)->nullable();    // Description of the feature
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
