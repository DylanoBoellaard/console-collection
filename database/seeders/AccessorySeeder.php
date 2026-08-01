<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accessories')->insert([
            [
                'name' => 'Playstation Memory Card',
                'description' => 'The Playstation memory card is a memory card that was released by Sony in 1994??. It is used to store games and other data on the Playstation console.',
                'model_number' => 'SCPH-1020',
                'serial_number' => null,
                'slug' => 'playstation-memory-card'
            ],
            [
                'name' => 'Playstation 2 Memory Card',
                'description' => 'The Playstation 2 memory card is a memory card that was released by Sony in 2000. It is used to store games and other data on the Playstation 2 console.',
                'model_number' => 'SCPH-10020',
                'serial_number' => null,
                'slug' => 'playstation-2-memory-card'
            ],
            [
                'name' => 'Nintendo 64 Rumble Pak',
                'description' => 'The Nintendo 64 Rumble Pak is a rumble pack that was released by Nintendo in 1996. It is used to add rumble to the Nintendo 64 console.',
                'model_number' => 'N64-002',
                'serial_number' => null,
                'slug' => 'nintendo-64-rumble-pack'
            ]
        ]);
    }
}
