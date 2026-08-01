<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessoryVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accessory_variants')->insert([
            // PS1 Memory Cards    
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 7 // Net Yaroze
            ],
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 19 // PS1 Memory Card grey
            ],
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 20 // PS1 Memory Card white
            ],
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 21 // PS1 Memory Card red
            ],
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 22 // PS1 Memory Card lemon yellow
            ],
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 23 // PS1 Memory Card clear blue
            ],
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 24 // PS1 Memory Card clear green
            ],
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 25 // PS1 Memory Card clear black
            ],
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 26 // PS1 Memory Card clear orange
            ],
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 27 // PS1 Memory Card clear 10 silver
            ],
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 28 // PS1 Memory Card clear crystal clear
            ],
            [
                'accessory_id' => 1, // PS1 Memory Card
                'variant_id' => 29 // PS1 Memory Card clear Red Cherry
            ],
        ]);
    }
}
