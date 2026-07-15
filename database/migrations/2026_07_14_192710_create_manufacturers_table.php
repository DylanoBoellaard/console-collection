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
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 200)->unique();
            $table->string('logo', length: 200)->nullable();
            $table->string('website', length: 500)->nullable();
            $table->string('slug', length: 200)->unique();
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade'); // Foreign key to countries table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manufacturers');
    }
};
