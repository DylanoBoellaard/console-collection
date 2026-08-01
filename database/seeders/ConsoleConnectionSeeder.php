<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsoleConnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('console_connections')->insert([
            // PS1    
            [
                'console_id' => 1, // PS1
                'connection_id' => 1, // Controller port
            ],
            [
                'console_id' => 1, // PS1
                'connection_id' => 2, // Memory card port
            ],
            [
                'console_id' => 1, // PS1
                'connection_id' => 3, // AV Multi Out
            ],
            [
                'console_id' => 1, // PS1
                'connection_id' => 4, // RF
            ],
            [
                'console_id' => 1, // PS1
                'connection_id' => 5, // Composite
            ],
            [
                'console_id' => 1, // PS1
                'connection_id' => 6, // S-Video
            ],
            [
                'console_id' => 1, // PS1
                'connection_id' => 7, // Component
            ],
            [
                'console_id' => 1, // PS1
                'connection_id' => 8, // RGB (SCART)
            ],
            // PS2
            [
                'console_id' => 2, // PS2
                'connection_id' => 1, // Controller port
            ],
            [
                'console_id' => 2, // PS2
                'connection_id' => 2, // Memory card port
            ],
            [
                'console_id' => 2, // PS2
                'connection_id' => 3, // AV Multi Out
            ],
            [
                'console_id' => 2, // PS2
                'connection_id' => 4, // RF
            ],
            [
                'console_id' => 2, // PS2
                'connection_id' => 5, // Composite
            ],
            [
                'console_id' => 2, // PS2
                'connection_id' => 6, // S-Video
            ],
            [
                'console_id' => 2, // PS2
                'connection_id' => 7, // Component
            ],
            [
                'console_id' => 2, // PS2
                'connection_id' => 8, // RGB (SCART)
            ],
            [
                'console_id' => 2, // PS2
                'connection_id' => 10, // USB
            ],
            [
                'console_id' => 2, // PS2
                'connection_id' => 11, // Ethernet
            ],
            // N64
            [
                'console_id' => 3, // N64
                'connection_id' => 1, // Controller port
            ],
            [
                'console_id' => 3, // N64
                'connection_id' => 3, // AV Multi Out
            ],
            [
                'console_id' => 3, // N64
                'connection_id' => 4, // RF
            ],
            [
                'console_id' => 3, // N64
                'connection_id' => 5, // Composite
            ],
            [
                'console_id' => 3, // N64
                'connection_id' => 6, // S-Video
            ],
        ]);
    }
}
