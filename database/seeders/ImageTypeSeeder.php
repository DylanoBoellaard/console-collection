<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('image_types')->insert([
            // Console
            // Box
            [
                'type' => 'console',
                'sub_type' => 'box',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'console',
                'sub_type' => 'box',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'console',
                'sub_type' => 'box',
                'angle' => 'left',
                'sort_order' => 3
            ],
            [
                'type' => 'console',
                'sub_type' => 'box',
                'angle' => 'right',
                'sort_order' => 4
            ],
            [
                'type' => 'console',
                'sub_type' => 'box',
                'angle' => 'top',
                'sort_order' => 5
            ],
            [
                'type' => 'console',
                'sub_type' => 'box',
                'angle' => 'bottom',
                'sort_order' => 6
            ],
            [
                'type' => 'console',
                'sub_type' => 'box',
                'angle' => 'inside',
                'sort_order' => 7
            ],
            [
                'type' => 'console',
                'sub_type' => 'box',
                'angle' => 'label',
                'sort_order' => 8
            ],
            [
                'type' => 'console',
                'sub_type' => 'box',
                'angle' => 'spine',
                'sort_order' => 9
            ],
            [
                'type' => 'console',
                'sub_type' => 'box',
                'angle' => 'detail',
                'sort_order' => 10
            ],
            // Packaging
            [
                'type' => 'console',
                'sub_type' => 'packaging',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'console',
                'sub_type' => 'packaging',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'console',
                'sub_type' => 'packaging',
                'angle' => 'left',
                'sort_order' => 3
            ],
            [
                'type' => 'console',
                'sub_type' => 'packaging',
                'angle' => 'right',
                'sort_order' => 4
            ],
            [
                'type' => 'console',
                'sub_type' => 'packaging',
                'angle' => 'top',
                'sort_order' => 5
            ],
            [
                'type' => 'console',
                'sub_type' => 'packaging',
                'angle' => 'bottom',
                'sort_order' => 6
            ],
            [
                'type' => 'console',
                'sub_type' => 'packaging',
                'angle' => 'inside',
                'sort_order' => 7
            ],
            [
                'type' => 'console',
                'sub_type' => 'packaging',
                'angle' => 'label',
                'sort_order' => 8
            ],
            [
                'type' => 'console',
                'sub_type' => 'packaging',
                'angle' => 'spine',
                'sort_order' => 9
            ],
            [
                'type' => 'console',
                'sub_type' => 'packaging',
                'angle' => 'detail',
                'sort_order' => 10
            ],
            // Item
            [
                'type' => 'console',
                'sub_type' => 'item',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'console',
                'sub_type' => 'item',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'console',
                'sub_type' => 'item',
                'angle' => 'left',
                'sort_order' => 3
            ],
            [
                'type' => 'console',
                'sub_type' => 'item',
                'angle' => 'right',
                'sort_order' => 4
            ],
            [
                'type' => 'console',
                'sub_type' => 'item',
                'angle' => 'top',
                'sort_order' => 5
            ],
            [
                'type' => 'console',
                'sub_type' => 'item',
                'angle' => 'bottom',
                'sort_order' => 6
            ],
            [
                'type' => 'console',
                'sub_type' => 'item',
                'angle' => 'inside',
                'sort_order' => 7
            ],
            [
                'type' => 'console',
                'sub_type' => 'item',
                'angle' => 'detail',
                'sort_order' => 8
            ],
            // Booklet
            [
                'type' => 'console',
                'sub_type' => 'booklet',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'console',
                'sub_type' => 'booklet',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'console',
                'sub_type' => 'booklet',
                'angle' => 'inside',
                'sort_order' => 3
            ],
            [
                'type' => 'console',
                'sub_type' => 'booklet',
                'angle' => 'spine',
                'sort_order' => 4
            ],
            [
                'type' => 'console',
                'sub_type' => 'booklet',
                'angle' => 'detail',
                'sort_order' => 5
            ],
            // Manual
            [
                'type' => 'console',
                'sub_type' => 'manual',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'console',
                'sub_type' => 'manual',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'console',
                'sub_type' => 'manual',
                'angle' => 'inside',
                'sort_order' => 3
            ],
            [
                'type' => 'console',
                'sub_type' => 'manual',
                'angle' => 'spine',
                'sort_order' => 4
            ],
            [
                'type' => 'console',
                'sub_type' => 'manual',
                'angle' => 'detail',
                'sort_order' => 5
            ],

            // Game
            // Box
            [
                'type' => 'game',
                'sub_type' => 'box',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'game',
                'sub_type' => 'box',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'game',
                'sub_type' => 'box',
                'angle' => 'left',
                'sort_order' => 3
            ],
            [
                'type' => 'game',
                'sub_type' => 'box',
                'angle' => 'right',
                'sort_order' => 4
            ],
            [
                'type' => 'game',
                'sub_type' => 'box',
                'angle' => 'top',
                'sort_order' => 5
            ],
            [
                'type' => 'game',
                'sub_type' => 'box',
                'angle' => 'bottom',
                'sort_order' => 6
            ],
            [
                'type' => 'game',
                'sub_type' => 'box',
                'angle' => 'inside',
                'sort_order' => 7
            ],
            [
                'type' => 'game',
                'sub_type' => 'box',
                'angle' => 'label',
                'sort_order' => 8
            ],
            [
                'type' => 'game',
                'sub_type' => 'box',
                'angle' => 'spine',
                'sort_order' => 9
            ],
            [
                'type' => 'game',
                'sub_type' => 'box',
                'angle' => 'detail',
                'sort_order' => 10
            ],
            // Packaging
            [
                'type' => 'game',
                'sub_type' => 'packaging',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'game',
                'sub_type' => 'packaging',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'game',
                'sub_type' => 'packaging',
                'angle' => 'left',
                'sort_order' => 3
            ],
            [
                'type' => 'game',
                'sub_type' => 'packaging',
                'angle' => 'right',
                'sort_order' => 4
            ],
            [
                'type' => 'game',
                'sub_type' => 'packaging',
                'angle' => 'top',
                'sort_order' => 5
            ],
            [
                'type' => 'game',
                'sub_type' => 'packaging',
                'angle' => 'bottom',
                'sort_order' => 6
            ],
            [
                'type' => 'game',
                'sub_type' => 'packaging',
                'angle' => 'inside',
                'sort_order' => 7
            ],
            [
                'type' => 'game',
                'sub_type' => 'packaging',
                'angle' => 'label',
                'sort_order' => 8
            ],
            [
                'type' => 'game',
                'sub_type' => 'packaging',
                'angle' => 'spine',
                'sort_order' => 9
            ],
            [
                'type' => 'game',
                'sub_type' => 'packaging',
                'angle' => 'detail',
                'sort_order' => 10
            ],
            // Item
            [
                'type' => 'game',
                'sub_type' => 'item',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'game',
                'sub_type' => 'item',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'game',
                'sub_type' => 'item',
                'angle' => 'label',
                'sort_order' => 3
            ],
            [
                'type' => 'game',
                'sub_type' => 'item',
                'angle' => 'detail',
                'sort_order' => 4
            ],
            // Booklet
            [
                'type' => 'game',
                'sub_type' => 'booklet',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'game',
                'sub_type' => 'booklet',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'game',
                'sub_type' => 'booklet',
                'angle' => 'inside',
                'sort_order' => 3
            ],
            [
                'type' => 'game',
                'sub_type' => 'booklet',
                'angle' => 'spine',
                'sort_order' => 4
            ],
            [
                'type' => 'game',
                'sub_type' => 'booklet',
                'angle' => 'detail',
                'sort_order' => 5
            ],
            // Manual
            [
                'type' => 'game',
                'sub_type' => 'manual',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'game',
                'sub_type' => 'manual',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'game',
                'sub_type' => 'manual',
                'angle' => 'inside',
                'sort_order' => 3
            ],
            [
                'type' => 'game',
                'sub_type' => 'manual',
                'angle' => 'spine',
                'sort_order' => 4
            ],
            [
                'type' => 'game',
                'sub_type' => 'manual',
                'angle' => 'detail',
                'sort_order' => 5
            ],

            // Controller
            // Box
            [
                'type' => 'controller',
                'sub_type' => 'box',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'controller',
                'sub_type' => 'box',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'controller',
                'sub_type' => 'box',
                'angle' => 'left',
                'sort_order' => 3
            ],
            [
                'type' => 'controller',
                'sub_type' => 'box',
                'angle' => 'right',
                'sort_order' => 4
            ],
            [
                'type' => 'controller',
                'sub_type' => 'box',
                'angle' => 'top',
                'sort_order' => 5
            ],
            [
                'type' => 'controller',
                'sub_type' => 'box',
                'angle' => 'bottom',
                'sort_order' => 6
            ],
            [
                'type' => 'controller',
                'sub_type' => 'box',
                'angle' => 'inside',
                'sort_order' => 7
            ],
            [
                'type' => 'controller',
                'sub_type' => 'box',
                'angle' => 'label',
                'sort_order' => 8
            ],
            [
                'type' => 'controller',
                'sub_type' => 'box',
                'angle' => 'spine',
                'sort_order' => 9
            ],
            [
                'type' => 'controller',
                'sub_type' => 'box',
                'angle' => 'detail',
                'sort_order' => 10
            ],
            // Packaging
            [
                'type' => 'controller',
                'sub_type' => 'packaging',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'controller',
                'sub_type' => 'packaging',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'controller',
                'sub_type' => 'packaging',
                'angle' => 'left',
                'sort_order' => 3
            ],
            [
                'type' => 'controller',
                'sub_type' => 'packaging',
                'angle' => 'right',
                'sort_order' => 4
            ],
            [
                'type' => 'controller',
                'sub_type' => 'packaging',
                'angle' => 'top',
                'sort_order' => 5
            ],
            [
                'type' => 'controller',
                'sub_type' => 'packaging',
                'angle' => 'bottom',
                'sort_order' => 6
            ],
            [
                'type' => 'controller',
                'sub_type' => 'packaging',
                'angle' => 'inside',
                'sort_order' => 7
            ],
            [
                'type' => 'controller',
                'sub_type' => 'packaging',
                'angle' => 'label',
                'sort_order' => 8
            ],
            [
                'type' => 'controller',
                'sub_type' => 'packaging',
                'angle' => 'spine',
                'sort_order' => 9
            ],
            [
                'type' => 'controller',
                'sub_type' => 'packaging',
                'angle' => 'detail',
                'sort_order' => 10
            ],
            // Item
            [
                'type' => 'controller',
                'sub_type' => 'item',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'controller',
                'sub_type' => 'item',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'controller',
                'sub_type' => 'item',
                'angle' => 'left',
                'sort_order' => 3
            ],
            [
                'type' => 'controller',
                'sub_type' => 'item',
                'angle' => 'right',
                'sort_order' => 4
            ],
            [
                'type' => 'controller',
                'sub_type' => 'item',
                'angle' => 'top',
                'sort_order' => 5
            ],
            [
                'type' => 'controller',
                'sub_type' => 'item',
                'angle' => 'bottom',
                'sort_order' => 6
            ],
            [
                'type' => 'controller',
                'sub_type' => 'item',
                'angle' => 'inside',
                'sort_order' => 7
            ],
            [
                'type' => 'controller',
                'sub_type' => 'item',
                'angle' => 'detail',
                'sort_order' => 8
            ],
            // Booklet
            [
                'type' => 'controller',
                'sub_type' => 'booklet',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'controller',
                'sub_type' => 'booklet',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'controller',
                'sub_type' => 'booklet',
                'angle' => 'inside',
                'sort_order' => 3
            ],
            [
                'type' => 'controller',
                'sub_type' => 'booklet',
                'angle' => 'spine',
                'sort_order' => 4
            ],
            [
                'type' => 'controller',
                'sub_type' => 'booklet',
                'angle' => 'detail',
                'sort_order' => 5
            ],
            // Manual
            [
                'type' => 'controller',
                'sub_type' => 'manual',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'controller',
                'sub_type' => 'manual',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'controller',
                'sub_type' => 'manual',
                'angle' => 'inside',
                'sort_order' => 3
            ],
            [
                'type' => 'controller',
                'sub_type' => 'manual',
                'angle' => 'spine',
                'sort_order' => 4
            ],
            [
                'type' => 'controller',
                'sub_type' => 'manual',
                'angle' => 'detail',
                'sort_order' => 5
            ],

            // Accessory
            // Box
            [
                'type' => 'accessory',
                'sub_type' => 'box',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'box',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'box',
                'angle' => 'left',
                'sort_order' => 3
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'box',
                'angle' => 'right',
                'sort_order' => 4
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'box',
                'angle' => 'top',
                'sort_order' => 5
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'box',
                'angle' => 'bottom',
                'sort_order' => 6
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'box',
                'angle' => 'inside',
                'sort_order' => 7
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'box',
                'angle' => 'label',
                'sort_order' => 8
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'box',
                'angle' => 'spine',
                'sort_order' => 9
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'box',
                'angle' => 'detail',
                'sort_order' => 10
            ],
            // Packaging
            [
                'type' => 'accessory',
                'sub_type' => 'packaging',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'packaging',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'packaging',
                'angle' => 'left',
                'sort_order' => 3
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'packaging',
                'angle' => 'right',
                'sort_order' => 4
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'packaging',
                'angle' => 'top',
                'sort_order' => 5
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'packaging',
                'angle' => 'bottom',
                'sort_order' => 6
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'packaging',
                'angle' => 'inside',
                'sort_order' => 7
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'packaging',
                'angle' => 'label',
                'sort_order' => 8
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'packaging',
                'angle' => 'spine',
                'sort_order' => 9
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'packaging',
                'angle' => 'detail',
                'sort_order' => 10
            ],
            // Item
            [
                'type' => 'accessory',
                'sub_type' => 'item',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'item',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'item',
                'angle' => 'left',
                'sort_order' => 3
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'item',
                'angle' => 'right',
                'sort_order' => 4
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'item',
                'angle' => 'top',
                'sort_order' => 5
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'item',
                'angle' => 'bottom',
                'sort_order' => 6
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'item',
                'angle' => 'inside',
                'sort_order' => 7
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'item',
                'angle' => 'detail',
                'sort_order' => 8
            ],
            // Booklet
            [
                'type' => 'accessory',
                'sub_type' => 'booklet',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'booklet',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'booklet',
                'angle' => 'inside',
                'sort_order' => 3
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'booklet',
                'angle' => 'spine',
                'sort_order' => 4
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'booklet',
                'angle' => 'detail',
                'sort_order' => 5
            ],
            // Manual
            [
                'type' => 'accessory',
                'sub_type' => 'manual',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'manual',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'manual',
                'angle' => 'inside',
                'sort_order' => 3
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'manual',
                'angle' => 'spine',
                'sort_order' => 4
            ],
            [
                'type' => 'accessory',
                'sub_type' => 'manual',
                'angle' => 'detail',
                'sort_order' => 5
            ],

            // PCB
            // Item
            [
                'type' => 'pcb',
                'sub_type' => 'item',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'pcb',
                'sub_type' => 'item',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'pcb',
                'sub_type' => 'item',
                'angle' => 'detail',
                'sort_order' => 3
            ],
            // Motherboard
            // Item
            [
                'type' => 'motherboard',
                'sub_type' => 'item',
                'angle' => 'front',
                'sort_order' => 1
            ],
            [
                'type' => 'motherboard',
                'sub_type' => 'item',
                'angle' => 'back',
                'sort_order' => 2
            ],
            [
                'type' => 'motherboard',
                'sub_type' => 'item',
                'angle' => 'detail',
                'sort_order' => 3
            ],
        ]);
    }
}
