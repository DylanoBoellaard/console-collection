<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            // PS1
            // Box
            [
                'filename' => 'ps1-console-grey-box-front.webp',
                'caption' => 'Playstation 1 - Console - Grey - Box - Front',
                'image_type_id' => 1, // Console Box Front
                'variant_id' => 1, // PS1 Grey
                'game_id' => null
            ],
            [
                'filename' => 'ps1-console-grey-box-back.webp',
                'caption' => 'Playstation 1 - Console - Grey - Box - Back',
                'image_type_id' => 2, // Console Box Back
                'variant_id' => 1, // PS1 Grey
                'game_id' => null
            ],
            [
                'filename' => 'ps1-console-grey-box-top.webp',
                'caption' => 'Playstation 1 - Console - Grey - Box - Top',
                'image_type_id' => 5, // Console Box Top
                'variant_id' => 1, // PS1 Grey
                'game_id' => null
            ],
            // Console
            [
                'filename' => 'ps1-console-grey-front.webp',
                'caption' => 'Playstation 1 - Console - Grey - Front',
                'image_type_id' => 21, // Console Front
                'variant_id' => 1, // PS1 Grey
                'game_id' => null
            ],
            [
                'filename' => 'ps1-console-grey-back.webp',
                'caption' => 'Playstation 1 - Console - Grey - Back',
                'image_type_id' => 22, // Console Back
                'variant_id' => 1, // PS1 Grey
                'game_id' => null
            ],
            [
                'filename' => 'ps1-console-grey-top.webp',
                'caption' => 'Playstation 1 - Console - Grey - Top',
                'image_type_id' => 25, // Console Top
                'variant_id' => 1, // PS1 Grey
                'game_id' => null
            ],
            [
                'filename' => 'ps1-console-grey-bottom.webp',
                'caption' => 'Playstation 1 - Console - Grey - Bottom',
                'image_type_id' => 26, // Console Bottom
                'variant_id' => 1, // PS1 Grey
                'game_id' => null
            ],
            // Controllers
            [
                'filename' => 'ps1-original-controller-white.webp',
                'caption' => 'Playstation 1 - Controller - White',
                'image_type_id' => 93, // Controller Front
                'variant_id' => 1, // PS1 Grey
                'game_id' => null
            ],
            [
                'filename' => 'ps1-original-controller-red.webp',
                'caption' => 'Playstation 1 - Controller - Red',
                'image_type_id' => 93, // Controller Front
                'variant_id' => 10, // PS1 Controller Red
                'game_id' => null
            ],
            [
                'filename' => 'ps1-original-controller-net-yaroze.webp',
                'caption' => 'Playstation 1 - Controller - Net Yaroze',
                'image_type_id' => 93, // Controller Front
                'variant_id' => 8, // PS1 Net Yaroze
                'game_id' => null
            ],
            [
                'filename' => 'ps1-original-controller-black.webp',
                'caption' => 'Playstation 1 - Controller - Black',
                'image_type_id' => 93, // Controller Front
                'variant_id' => 9, // PS1 Controller Black
                'game_id' => null
            ],
            [
                'filename' => 'ps1-original-controller-clear-black.webp',
                'caption' => 'Playstation 1 - Controller - Clear Black',
                'image_type_id' => 93, // Controller Front
                'variant_id' => 13, // PS1 Controller clear black
                'game_id' => null
            ],
            [
                'filename' => 'ps1-dualshock-clear-black.webp',
                'caption' => 'Playstation 1 - DualShock - Clear Black',
                'image_type_id' => 93, // Controller Front
                'variant_id' => 14, // PS1 Controller clear black
                'game_id' => null
            ],
            [
                'filename' => 'ps1-dualshock-clear-blue.webp',
                'caption' => 'Playstation 1 - DualShock - Clear Blue',
                'image_type_id' => 93, // Controller Front
                'variant_id' => 15, // PS1 Controller clear Blue
                'game_id' => null
            ],
            [
                'filename' => 'ps1-dualshock-clear-green.webp',
                'caption' => 'Playstation 1 - DualShock - Clear Green',
                'image_type_id' => 93, // Controller Front
                'variant_id' => 16, // PS1 Controller clear Green
                'game_id' => null
            ],
            [
                'filename' => 'ps1-dualshock-clear-red.webp',
                'caption' => 'Playstation 1 - DualShock - Clear Red',
                'image_type_id' => 93, // Controller Front
                'variant_id' => 17, // PS1 Controller clear Red
                'game_id' => null
            ],
            [
                'filename' => 'ps1-dualshock-crystal-clear.webp',
                'caption' => 'Playstation 1 - DualShock - Crystal Clear',
                'image_type_id' => 93, // Controller Front
                'variant_id' => 18, // PS1 Controller crystal clear
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-white.webp',
                'caption' => 'Playstation 1 - Memory Card - White',
                'image_type_id' => 131, // Accessory Front
                'variant_id' => 20, // PS1 Memory Card white
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-red.webp',
                'caption' => 'Playstation 1 - Memory Card - Red',
                'image_type_id' => 131, // Accessory Front
                'variant_id' => 21, // PS1 Memory Card red
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-lemon-yellow.webp',
                'caption' => 'Playstation 1 - Memory Card - Lemon Yellow',
                'image_type_id' => 131, // Accessory Front
                'variant_id' => 22, // PS1 Memory Card lemon yellow
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-clear-blue-front.webp',
                'caption' => 'Playstation 1 - Memory Card - Clear Blue',
                'image_type_id' => 131, // Accessory Front
                'variant_id' => 23, // PS1 Memory Card clear blue
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-clear-blue-back.webp',
                'caption' => 'Playstation 1 - Memory Card - Clear Blue',
                'image_type_id' => 132, // Accessory Back
                'variant_id' => 23, // PS1 Memory Card clear blue
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-clear-green.webp',
                'caption' => 'Playstation 1 - Memory Card - Clear Green',
                'image_type_id' => 131, // Accessory Front
                'variant_id' => 24, // PS1 Memory Card clear green
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-clear-black.webp',
                'caption' => 'Playstation 1 - Memory Card - Clear Black',
                'image_type_id' => 131, // Accessory Front
                'variant_id' => 25, // PS1 Memory Card clear black
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-clear-orange-front.webp',
                'caption' => 'Playstation 1 - Memory Card - Clear Orange',
                'image_type_id' => 131, // Accessory Front
                'variant_id' => 26, // PS1 Memory Card clear orange
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-clear-orange-back.webp',
                'caption' => 'Playstation 1 - Memory Card - Clear Orange',
                'image_type_id' => 132, // Accessory Back
                'variant_id' => 26, // PS1 Memory Card clear orange
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-10-silver-front.webp',
                'caption' => 'Playstation 1 - Memory Card - 10 Silver',
                'image_type_id' => 131, // Accessory Front
                'variant_id' => 27, // PS1 Memory Card clear 10 silver
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-10-silver-back.webp',
                'caption' => 'Playstation 1 - Memory Card - 10 Silver',
                'image_type_id' => 132, // Accessory back
                'variant_id' => 27, // PS1 Memory Card clear 10 silver
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-crystal-clear-front.webp',
                'caption' => 'Playstation 1 - Memory Card - Crystal Clear',
                'image_type_id' => 131, // Accessory Front
                'variant_id' => 28, // PS1 Memory Card clear crystal clear
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-crystal-clear-back.webp',
                'caption' => 'Playstation 1 - Memory Card - Crystal Clear',
                'image_type_id' => 132, // Accessory Back
                'variant_id' => 28, // PS1 Memory Card clear crystal clear
                'game_id' => null
            ],
            [
                'filename' => 'ps1-memory-card-cherry-red.webp',
                'caption' => 'Playstation 1 - Memory Card - Cherry Red',
                'image_type_id' => 131, // Accessory Front
                'variant_id' => 29, // PS1 Memory Card clear Red Cherry
                'game_id' => null
            ],
        ]);
    }
}
