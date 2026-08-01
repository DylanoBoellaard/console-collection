<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GpuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gpus')->insert([
            // PS1
            [
                'name' => 'Cop2',
                'clockspeed' => 33.87,
                'clockspeed_unit' => 'MHz',
                'video_memory' => 1.00,
                'video_memory_unit' => 'MB',
                'manufacturer_id' => 3 // Sony
            ],
            // PS2
            [
                'name' => 'Graphics Synthesizer',
                'clockspeed' => 147.456,
                'clockspeed_unit' => 'MHz',
                'video_memory' => 4.00,
                'video_memory_unit' => 'MB',
                'manufacturer_id' => 3 // Sony
            ],
            // N64
            [
                'name' => 'SGI RCP',
                'clockspeed' => 93.75,
                'clockspeed_unit' => 'MHz',
                'video_memory' => null,
                'video_memory_unit' => null,
                'manufacturer_id' => 1 // NEC
            ]
        ]);
    }
}
