<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variant_regions')->insert([
            // PS1    
            [
                'variant_id' => 1, // PS1 Grey
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 1, // PS1 Grey
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 1, // PS1 Grey
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 2, // PS1 controller Grey
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 2, // PS1 controller Grey
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 2, // PS1 controller Grey
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 3, // PS1 analogue Grey
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 3, // PS1 analogue Grey
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 3, // PS1 analogue Grey
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 4, // PS1 dualshock Grey
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 4, // PS1 dualshock Grey
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 4, // PS1 dualshock Grey
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 5, // PS1 10 million
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 5, // PS1 10 million
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 5, // PS1 10 million
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 6, // PS1 dualshock 10 million
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 6, // PS1 dualshock 10 million
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 6, // PS1 dualshock 10 million
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 7, // PS1 net yaroze
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 8, // PS1 net yaroze controller
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 9, // PS1 controller black
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 9, // PS1 controller black
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 9, // PS1 controller black
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 10, // PS1 controller red
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 10, // PS1 controller red
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 10, // PS1 controller red
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 11, // PS1 controller developer blue
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 11, // PS1 controller developer blue
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 11, // PS1 controller developer blue
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 12, // PS1 controller gold
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 12, // PS1 controller gold
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 12, // PS1 controller gold
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 13, // PS1 controller clear black
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 13, // PS1 controller clear black
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 13, // PS1 controller clear black
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 14, // PS1 dualshock clear black
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 14, // PS1 dualshock clear black
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 14, // PS1 dualshock clear black
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 15, // PS1 dualshock clear blue
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 15, // PS1 dualshock clear blue
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 15, // PS1 dualshock clear blue
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 16, // PS1 dualshock clear green
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 16, // PS1 dualshock clear green
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 16, // PS1 dualshock clear green
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 17, // PS1 dualshock clear red
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 17, // PS1 dualshock clear red
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 17, // PS1 dualshock clear red
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 18, // PS1 dualshock crystal clear
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 18, // PS1 dualshock crystal clear
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 18, // PS1 dualshock crystal clear
                'region_id' => 5, // NTSC-J
            ],
            // Memory cards
            [
                'variant_id' => 19, // PS1 memory card grey
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 19, // PS1 memory card grey
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 19, // PS1 memory card grey
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 20, // PS1 memory card white
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 20, // PS1 memory card white
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 20, // PS1 memory card white
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 21, // PS1 memory card red
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 21, // PS1 memory card red
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 21, // PS1 memory card red
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 22, // PS1 memory card lemon yellow
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 22, // PS1 memory card lemon yellow
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 22, // PS1 memory card lemon yellow
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 22, // PS1 memory card clear blue
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 22, // PS1 memory card clear blue
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 22, // PS1 memory card clear blue
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 23, // PS1 memory card clear green
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 23, // PS1 memory card clear green
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 23, // PS1 memory card clear green
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 24, // PS1 memory card clear black
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 24, // PS1 memory card clear black
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 24, // PS1 memory card clear black
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 25, // PS1 memory card clear orange
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 25, // PS1 memory card clear orange
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 25, // PS1 memory card clear orange
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 26, // PS1 memory card 10 silver
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 26, // PS1 memory card 10 silver
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 26, // PS1 memory card 10 silver
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 27, // PS1 memory card crystal clear
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 27, // PS1 memory card crystal clear
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 27, // PS1 memory card crystal clear
                'region_id' => 5, // NTSC-J
            ],
            [
                'variant_id' => 28, // PS1 memory card red cherry
                'region_id' => 1, // PAL
            ],
            [
                'variant_id' => 28, // PS1 memory card red cherry
                'region_id' => 4, // NTSC-U
            ],
            [
                'variant_id' => 28, // PS1 memory card red cherry
                'region_id' => 5, // NTSC-J
            ],
        ]);
    }
}
