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
        Schema::create('consoles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 200)->unique();
            $table->string('description', length: 1000);
            $table->boolean('region_locked')->default(false);
            $table->date('release_date');
            $table->date('end_production_date');
            $table->string('slug', length: 200)->unique();
            $table->foreignId('manufacturer_id')->constrained('manufacturers')->onDelete('cascade'); // Foreign key to manufacturers table
            $table->foreignId('generation_id')->constrained('generations')->onDelete('cascade'); // Foreign key to generations table
            $table->foreignId('cpu_id')->constrained('cpus')->onDelete('cascade'); // Foreign key to cpus table
            $table->foreignId('gpu_id')->constrained('gpus')->onDelete('cascade'); // Foreign key to gpus table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consoles');
    }
};
