<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ControllerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('controllers')->insert([
            [
                'name' => 'Playstation Controller',
                'description' => 'The Playstation controller is the first controller that was released by Sony in 1994. It does not feature the thumbsticks nor a rumble feature, as in later controllers. It can be identified by the smaller L2 and R2 buttons and the lack of the thumbsticks.',
                'model_number' => 'SCPH-1010',
                'serial_number' => null,
                'slug' => 'playstation-controller'
            ],
            [
                'name' => 'Playstation Dual Analog Controller',
                'description' => 'The Playstation Dual Analog controller is the second controller that was released by Sony in 1997. It features the uniquely concaved thumbsticks, but no rumble feature in the NTSC and PAL models. The Japanese versions did get the rumble feature. The L2 and R2 buttons contains small ridges in the buttons, whereas the DualShock does not. It has the model number SCPH-1150 in Japan & SCPH-1180 in the US.',
                'model_number' => 'SCPH-1180e',
                'serial_number' => null,
                'slug' => 'playstation-dualanalog-controller'
            ],
            [
                'name' => 'Playstation DualShock Controller',
                'description' => 'The Playstation DualShock controller is the third controller that was released by Sony in November 1997. It features the thumbsticks and a rumble feature. The L2 and R2 buttons do no contain the ridges as seen in the Dual Analog controllers.',
                'model_number' => 'SCPH-1200',
                'serial_number' => null,
                'slug' => 'playstation-dualshock-controller'
            ],
            [
                'name' => 'Playstation DualShock 2 Controller',
                'description' => 'The Playstation DualShock 2 controller is the third controller that was released by Sony in 2000. It features the thumbsticks and a rumble feature.',
                'model_number' => 'SCPH-10010',
                'serial_number' => null,
                'slug' => 'playstation-dualshock-2-controller'
            ],
            [
                'name' => 'Nintendo 64 Controller',
                'description' => 'N64 controller',
                'model_number' => 'N64-001',
                'serial_number' => null,
                'slug' => 'nintendo-64-controller'
            ]
        ]);
    }
}
