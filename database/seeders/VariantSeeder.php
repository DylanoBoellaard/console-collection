<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variants')->insert([
            // PS1    
            [
                'name' => 'Playstation 1 - Console - Grey',
                'description' => 'The standard colour of the Playstation 1.',
                'item_type' => 'console',
                'edition_id' => 1, // PS1 Grey
                'model_number' => 'SCPH-1000 - SCPH-900x',
                'serial_number' => null,
                'slug' => 'playstation-1-console-grey',
            ],
            [
                'name' => 'Playstation 1 - Controller - Grey',
                'description' => 'The standard colour of the Playstation 1 original controller.',
                'item_type' => 'controller',
                'edition_id' => 1, // PS1 Grey
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-original-controller-grey',
            ],
            [
                'name' => 'Playstation 1 - Dual analogue Controller - Grey',
                'description' => 'The standard colour of the Playstation 1 dual analogue controller.',
                'item_type' => 'controller',
                'edition_id' => 1, // PS1 Grey
                'model_number' => 'SCPH-1150 (JP) - SCPH-1180(e)',
                'serial_number' => null,
                'slug' => 'playstation-1-dual-analogue-controller-grey',
            ],
            [
                'name' => 'Playstation 1 - DualShock Controller - Grey',
                'description' => 'The standard colour of the Playstation 1 DualShock controller.',
                'item_type' => 'controller',
                'edition_id' => 1, // PS1 Grey
                'model_number' => 'SCPH-1200',
                'serial_number' => null,
                'slug' => 'playstation-1-DualShock-controller-grey',
            ],
            [
                'name' => 'Playstation 1 - 10 Million',
                'description' => 'Marine Blue edition of the Playstation 1 to commemorate 10 million units made.',
                'item_type' => 'console',
                'edition_id' => 2, // PS1 10 Million
                'model_number' => 'SCPH-1000 - SCPH-900x',
                'serial_number' => null,
                'slug' => 'playstation-1-10-million',
            ],
            [
                'name' => 'Playstation 1 - DualShock Controller - 10 Million',
                'description' => 'Marine Blue edition of the Playstation 1 DualShock controller to commemorate 10 million units made.',
                'item_type' => 'controller',
                'edition_id' => 2, // PS1 10 Million
                'model_number' => 'SCPH-1000 - SCPH-900x',
                'serial_number' => null,
                'slug' => 'playstation-1-dualshock-controller-10-million',
            ],
            [
                'name' => 'Playstation 1 - Net Yaroze',
                'description' => 'A black hobbyist PS1 dev kit. Came with two black controllers, two black memory cards and a black VGA video cable.',
                'item_type' => 'console',
                'edition_id' => 3, // PS1 Net Yaroze
                'model_number' => 'SCPH-1000 - SCPH-900x',
                'serial_number' => null,
                'slug' => 'playstation-1-net-yaroze',
            ],
            [
                'name' => 'Playstation 1 - Original Controller - Net Yaroze',
                'description' => 'A black original controller.',
                'item_type' => 'controller',
                'edition_id' => 3, // PS1 Net Yaroze
                'model_number' => 'SCPH-1000 - SCPH-900x',
                'serial_number' => null,
                'slug' => 'playstation-1-original-controller-net-yaroze',
            ],
            [
                'name' => 'Playstation 1 - Controller - Black',
                'description' => 'A black version of the Playstation 1 original controller.',
                'item_type' => 'controller',
                'edition_id' => 4, // PS1 Black
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-original-controller-black',
            ],
            [
                'name' => 'Playstation 1 - Controller - Red',
                'description' => 'A red version of the Playstation 1 original controller.',
                'item_type' => 'controller',
                'edition_id' => 5, // PS1 Red
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-original-controller-red',
            ],
            [
                'name' => 'Playstation 1 - Controller - Developer Blue',
                'description' => 'A blue developer version of the Playstation 1 original controller.',
                'item_type' => 'controller',
                'edition_id' => 6, // PS1 Black
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-original-controller-developer-blue',
            ],
            [
                'name' => 'Playstation 1 - Controller - Gold',
                'description' => 'A gold version of the Playstation 1 original controller.',
                'item_type' => 'controller',
                'edition_id' => 7, // PS1 Gold
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-original-controller-gold',
            ],
            [
                'name' => 'Playstation 1 - Original Controller - Clear Black',
                'description' => 'A transparent black version of the Playstation 1 original controller.',
                'item_type' => 'controller',
                'edition_id' => 8, // PS1 Clear Black
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-original-controller-clear-black',
            ],
            [
                'name' => 'Playstation 1 - DualShock Controller - Clear Black',
                'description' => 'A transparent black version of the Playstation 1 dualshock controller.',
                'item_type' => 'controller',
                'edition_id' => 8, // PS1 Clear Black
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-dualshock-controller-clear-black',
            ],
            [
                'name' => 'Playstation 1 - DualShock Controller - Clear Blue',
                'description' => 'A transparent blue version of the Playstation 1 original controller.',
                'item_type' => 'controller',
                'edition_id' => 9, // PS1 Clear Blue
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-dualshock-controller-clear-blue',
            ],
            [
                'name' => 'Playstation 1 - DualShock Controller - Clear Green',
                'description' => 'A transparent green version of the Playstation 1 original controller.',
                'item_type' => 'controller',
                'edition_id' => 10, // PS1 Clear Green
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-dualshock-controller-clear-green',
            ],
            [
                'name' => 'Playstation 1 - DualShock Controller - Clear Red',
                'description' => 'A transparent red version of the Playstation 1 original controller.',
                'item_type' => 'controller',
                'edition_id' => 11, // PS1 Clear Red
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-dualshock-controller-clear-red',
            ],
            [
                'name' => 'Playstation 1 - DualShock Controller - Crystal Clear',
                'description' => 'A fully transparent version of the Playstation 1 original controller.',
                'item_type' => 'controller',
                'edition_id' => 12, // PS1 Crystal Clear
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-dualshock-controller-crystal-clear',
            ],
            [
                'name' => 'Playstation 1 - Memory Card - Grey',
                'description' => 'The standard grey version of the Playstation 1 memory card.',
                'item_type' => 'accessory',
                'edition_id' => 1, // PS1 Grey
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-memory-card-grey',
            ],
            [
                'name' => 'Playstation 1 - Memory Card - White',
                'description' => 'A white version of the Playstation 1 memory card.',
                'item_type' => 'accessory',
                'edition_id' => 13, // PS1 White
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-memory-card-white',
            ],
            [
                'name' => 'Playstation 1 - Memory Card - Red',
                'description' => 'A red version of the Playstation 1 memory card.',
                'item_type' => 'accessory',
                'edition_id' => 5, // PS1 Red
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-memory-card-red',
            ],
            [
                'name' => 'Playstation 1 - Memory Card - Lemon Yellow',
                'description' => 'A lemon yellow version of the Playstation 1 memory card.',
                'item_type' => 'accessory',
                'edition_id' => 14, // PS1 Lemon Yellow
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-memory-card-lemon-yellow',
            ],
            [
                'name' => 'Playstation 1 - Memory Card - Clear Blue',
                'description' => 'A transparent blue version of the Playstation 1 memory card.',
                'item_type' => 'accessory',
                'edition_id' => 9, // PS1 Clear Blue
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-memory-card-clear-blue',
            ],
            [
                'name' => 'Playstation 1 - Memory Card - Clear Green',
                'description' => 'A transparent green version of the Playstation 1 memory card.',
                'item_type' => 'accessory',
                'edition_id' => 10, // PS1 Clear Green
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-memory-card-clear-green',
            ],
            [
                'name' => 'Playstation 1 - Memory Card - Clear Black',
                'description' => 'A transparent black version of the Playstation 1 memory card.',
                'item_type' => 'accessory',
                'edition_id' => 8, // PS1 Clear Black
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-memory-card-clear-black',
            ],
            [
                'name' => 'Playstation 1 - Memory Card - Clear Orange',
                'description' => 'A transparent orange version of the Playstation 1 memory card.',
                'item_type' => 'accessory',
                'edition_id' => 15, // PS1 Clear Orange
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-memory-card-clear-orange',
            ],
            [
                'name' => 'Playstation 1 - Memory Card - 10 Silver',
                'description' => 'A silver version of the Playstation 1 memory card.',
                'item_type' => 'accessory',
                'edition_id' => 16, // PS1 10 Silver
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-memory-card-10-silver',
            ],
            [
                'name' => 'Playstation 1 - Memory Card - Crystal Clear',
                'description' => 'A fully transparent version of the Playstation 1 memory card.',
                'item_type' => 'accessory',
                'edition_id' => 12, // PS1 Crystal Clear
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-memory-card-crystal-clear',
            ],
            [
                'name' => 'Playstation 1 - Memory Card - Red Cherry',
                'description' => 'A transparent red version of the Playstation 1 memory card.',
                'item_type' => 'accessory',
                'edition_id' => 17, // PS1 Clear Orange
                'model_number' => 'SCPH-1010 (JP) - SCPH-1080 (global)',
                'serial_number' => null,
                'slug' => 'playstation-1-memory-card-red-cherry',
            ],
        ]);
    }
}
