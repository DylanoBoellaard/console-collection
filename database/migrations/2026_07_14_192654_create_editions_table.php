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
        Schema::create('editions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 200)->unique();
            $table->string('description', length: 1000);
            $table->date('release_date')->nullable();
            $table->date('end_production_date')->nullable();
            $table->boolean('is_limited_edition')->default(false);
            $table->string('slug', length: 200)->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editions');
    }
};
