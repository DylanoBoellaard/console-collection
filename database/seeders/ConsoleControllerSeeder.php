<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsoleControllerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('console_controllers')->insert([
            [
                'console_id' => 1, // PS1
                'controller_id' => 1, // PS1 original controller
            ],
            [
                'console_id' => 1, // PS1
                'controller_id' => 2, // PS1 dual analogue
            ],
            [
                'console_id' => 1, // PS1
                'controller_id' => 3, // PS1 dualshock
            ],
            [
                'console_id' => 2, // PS2
                'controller_id' => 4, // PS2 dualshock
            ],
            [
                'console_id' => 3, // N64
                'controller_id' => 5, // N64 controller
            ],
        ]);
    }
}
