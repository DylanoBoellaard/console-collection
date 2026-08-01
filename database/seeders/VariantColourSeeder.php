<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variant_colours')->insert([
            [
                'variant_id' => 1, // PS1 Grey
                'colour_id' => 3 // Grey
            ],
            [
                'variant_id' => 2, // PS1 controller Grey
                'colour_id' => 3 // Grey
            ],
            [
                'variant_id' => 3, // PS1 analogue Grey
                'colour_id' => 3 // Grey
            ],
            [
                'variant_id' => 4, // PS1 dualshock Grey
                'colour_id' => 3 // Grey
            ],
            [
                'variant_id' => 5, // PS1 10 million
                'colour_id' => 8 // Blue
            ],
            [
                'variant_id' => 6, // PS1 dualshock 10 million
                'colour_id' => 8 // Blue
            ],
            [
                'variant_id' => 7, // PS1 net yaroze
                'colour_id' => 1 // Black
            ],
            [
                'variant_id' => 8, // PS1 net yaroze controller
                'colour_id' => 1 // Black
            ],
            [
                'variant_id' => 9, // PS1 controller black
                'colour_id' => 1 // Grey
            ],
            [
                'variant_id' => 10, // PS1 controller red
                'colour_id' => 4 // Red
            ],
            [
                'variant_id' => 11, // PS1 controller developer blue
                'colour_id' => 8 // Blue
            ],
            [
                'variant_id' => 12, // PS1 controller gold
                'colour_id' => 25 // Gold
            ],
            [
                'variant_id' => 13, // PS1 controller clear black
                'colour_id' => 1 // Black
            ],
            [
                'variant_id' => 13, // PS1 controller clear black
                'colour_id' => 12 // Transparent
            ],
            [
                'variant_id' => 14, // PS1 dualshock clear black
                'colour_id' => 1 // Black
            ],
            [
                'variant_id' => 14, // PS1 dualshock clear black
                'colour_id' => 12 // Transparent
            ],
            [
                'variant_id' => 15, // PS1 dualshock clear blue
                'colour_id' => 8 // Blue
            ],
            [
                'variant_id' => 15, // PS1 dualshock clear blue
                'colour_id' => 12 // Transparent
            ],
            [
                'variant_id' => 16, // PS1 dualshock clear green
                'colour_id' => 7 // Green
            ],
            [
                'variant_id' => 16, // PS1 dualshock clear green
                'colour_id' => 12 // Transparent
            ],
            [
                'variant_id' => 17, // PS1 dualshock clear red
                'colour_id' => 4 // Red
            ],
            [
                'variant_id' => 17, // PS1 dualshock clear red
                'colour_id' => 12 // Transparent
            ],
            [
                'variant_id' => 18, // PS1 dualshock crystal clear
                'colour_id' => 2 // White
            ],
            [
                'variant_id' => 18, // PS1 dualshock crystal clear
                'colour_id' => 12 // Transparent
            ],
            // Memory cards
            [
                'variant_id' => 19, // PS1 memory card grey
                'colour_id' => 3 // Grey
            ],
            [
                'variant_id' => 20, // PS1 memory card white
                'colour_id' => 2 // White
            ],
            [
                'variant_id' => 21, // PS1 memory card red
                'colour_id' => 4 // Red
            ],
            [
                'variant_id' => 22, // PS1 memory card lemon yellow
                'colour_id' => 6 // Yellow
            ],
            [
                'variant_id' => 22, // PS1 memory card clear blue
                'colour_id' => 8 // Blue
            ],
            [
                'variant_id' => 22, // PS1 memory card clear blue
                'colour_id' => 12 // Transparent
            ],
            [
                'variant_id' => 23, // PS1 memory card clear green
                'colour_id' => 7 // Green
            ],
            [
                'variant_id' => 23, // PS1 memory card clear green
                'colour_id' => 12 // Transparent
            ],
            [
                'variant_id' => 24, // PS1 memory card clear black
                'colour_id' => 1 // Black
            ],
            [
                'variant_id' => 24, // PS1 memory card clear black
                'colour_id' => 12 // Transparent
            ],
            [
                'variant_id' => 25, // PS1 memory card clear orange
                'colour_id' => 5 // Orange
            ],
            [
                'variant_id' => 25, // PS1 memory card clear orange
                'colour_id' => 12 // Transparent
            ],
            [
                'variant_id' => 26, // PS1 memory card 10 silver
                'colour_id' => 3 // Grey
            ],
            [
                'variant_id' => 27, // PS1 memory card crystal clear
                'colour_id' => 2 // White
            ],
            [
                'variant_id' => 27, // PS1 memory card crystal clear
                'colour_id' => 12 // Transparent
            ],
            [
                'variant_id' => 28, // PS1 memory card red cherry
                'colour_id' => 4 // Red
            ],
            [
                'variant_id' => 28, // PS1 memory card red cherry
                'colour_id' => 12 // Transparent
            ],
        ]);
    }
}
