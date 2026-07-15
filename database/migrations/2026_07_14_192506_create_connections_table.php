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
        Schema::create('connections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 100)->unique();
            $table->string('description', length: 1000)->nullable();
            $table->enum('type', ['video', 'audio', 'controller', 'network', 'power', 'expansion', 'usb', 'memory', 'other'])->default('other');
            $table->tinyInteger('signal_quality', unsigned: true)->default(1)->nullable(); // Scales from 1 (worst) to 5 (best)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('connections');
    }
};
