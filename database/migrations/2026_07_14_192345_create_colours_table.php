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
        Schema::create('colours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 100)->unique();
            $table->string('hex', length: 7)->unique(); // #RRGGBB
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colours');
    }
};
