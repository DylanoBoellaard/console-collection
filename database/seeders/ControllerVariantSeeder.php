<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ControllerVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('controller_variants')->insert([
            [
                'controller_id' => 1, // PS1 original controller
                'variant_id' => 2, // PS1 original controller grey
            ],
            [
                'controller_id' => 2, // PS1 dual analogue
                'variant_id' => 3, // PS1 dual analogue grey
            ],
            [
                'controller_id' => 3, // PS1 dualshock
                'variant_id' => 4, // PS1 dualshock grey
            ],
            [
                'controller_id' => 3, // PS1 dualshock
                'variant_id' => 6, // PS1 dualshock 10 million
            ],
            [
                'controller_id' => 1, // PS1 original controller
                'variant_id' => 8, // PS1 net yaroze
            ],
            [
                'controller_id' => 1, // PS1 original controller
                'variant_id' => 9, // PS1 original controller black
            ],
            [
                'controller_id' => 1, // PS1 original controller
                'variant_id' => 10, // PS1 original controller red
            ],
            [
                'controller_id' => 1, // PS1 original controller
                'variant_id' => 11, // PS1 original controller developer blue
            ],
            [
                'controller_id' => 1, // PS1 original controller
                'variant_id' => 12, // PS1 original controller gold
            ],
            [
                'controller_id' => 1, // PS1 original controller
                'variant_id' => 13, // PS1 original controller clear black
            ],
            [
                'controller_id' => 3, // PS1 dualshock
                'variant_id' => 14, // PS1 dualshock clear black
            ],
            [
                'controller_id' => 3, // PS1 dualshock
                'variant_id' => 15, // PS1 dualshock clear blue
            ],
            [
                'controller_id' => 3, // PS1 dualshock
                'variant_id' => 16, // PS1 dualshock clear green
            ],
            [
                'controller_id' => 3, // PS1 dualshock
                'variant_id' => 17, // PS1 dualshock clear red
            ],
            [
                'controller_id' => 3, // PS1 dualshock
                'variant_id' => 18, // PS1 dualshock crystal clear
            ],
        ]);
    }
}
