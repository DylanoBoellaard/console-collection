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
        Schema::create('controller_features', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('controller_id')->constrained('controllers')->onDelete('cascade'); // Foreign key to controllers table
            $table->foreignId('feature_id')->constrained('features')->onDelete('cascade'); // Foreign key to features table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controller_features');
    }
};
