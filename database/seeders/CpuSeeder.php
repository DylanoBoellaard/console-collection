<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CpuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cpus')->insert([
            // PS1
            [
                'name' => 'R3000',
                'clockspeed' => 33.87,
                'clockspeed_unit' => 'MHz',
                'manufacturer_id' => 3 // Sony
            ],
            // PS2
            [
                'name' => 'Emotion Engine',
                'clockspeed' => 294.912,
                'clockspeed_unit' => 'MHz',
                'manufacturer_id' => 3 // Sony
            ],
            // N64
            [
                'name' => 'NEC VR4300',
                'clockspeed' => 93.75,
                'clockspeed_unit' => 'MHz',
                'manufacturer_id' => 6 // NEC
            ]
        ]);
    }
}
