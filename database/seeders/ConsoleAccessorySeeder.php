<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsoleAccessorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('console_accessories')->insert([
            [
                'console_id' => 1, // PS1
                'accessory_id' => 1, // PS1 memory card
            ],
            [
                'console_id' => 2, // PS2
                'accessory_id' => 2, // PS2 memory card
            ],
            [
                'console_id' => 3, // N64
                'accessory_id' => 3, // N64 rumble pack
            ],
        ]);
    }
}
