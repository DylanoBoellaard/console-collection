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
        Schema::create('image_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('type', ['console', 'game', 'controller', 'accessory', 'pcb', 'motherboard']);
            $table->enum('sub_type', ['box', 'packaging', 'item', 'booklet', 'manual']); // 'item' can be console / controller / item itself or game disc / game cartridge
            $table->enum('angle', ['front', 'back', 'left', 'right', 'top', 'bottom', 'inside', 'label', 'spine', 'detail']); // Detail for close-ups of connectors, chips, etc.
            $table->tinyInteger('sort_order', unsigned: true)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_types');
    }
};
