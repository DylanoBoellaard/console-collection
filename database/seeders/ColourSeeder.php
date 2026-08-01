<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colours')->insert([
            // Standard colours for filtering
            ['name' => 'Black', 'hex' => '#000000'],
            ['name' => 'White', 'hex' => '#FFFFFF'],
            ['name' => 'Grey', 'hex' => '#808080'],
            ['name' => 'Red', 'hex' => '#FF0000'],
            ['name' => 'Orange', 'hex' => '#FFA500'],
            ['name' => 'Yellow', 'hex' => '#FFFF00'],
            ['name' => 'Green', 'hex' => '#008000'],
            ['name' => 'Blue', 'hex' => '#0000FF'],
            ['name' => 'Purple', 'hex' => '#800080'],
            ['name' => 'Pink', 'hex' => '#FFC0CB'],
            ['name' => 'Brown', 'hex' => '#7a4402'],
            ['name' => 'Transparent', 'hex' => '#d6d6d6'],
            // Console-specific colours
            // N64
            // Funtastic series
            ['name' => 'Jungle Green', 'hex' => '#17a64c'], // Global
            ['name' => 'Ice Blue', 'hex' => '#00a1ca'], // Global
            ['name' => 'Blue White', 'hex' => '#3fd8e0'], // EU / JP
            ['name' => 'Midnight Blue', 'hex' => '#31345f'], // JP
            ['name' => 'Fire Red', 'hex' => '#b9445c'], // EU
            ['name' => 'Watermelon Red', 'hex' => '#df5457'], // NA
            ['name' => 'Red White', 'hex' => '#e75c7b'], // JP
            ['name' => 'Fire Orange', 'hex' => '#f3460b'], // Global
            ['name' => 'Sun Orange', 'hex' => '#e57140'], // Global
            ['name' => 'Grape Purple', 'hex' => '#413ca1'], // Global
            ['name' => 'Indigo', 'hex' => '#4B0082'],
            ['name' => 'Smoke Black', 'hex' => '#8f9297'], // Global
            // Standard colours
            ['name' => 'Gold', 'hex' => '#daa846'], // NA / JP
            // Limited Editions
            ['name' => 'Pikachu Dark Blue', 'hex' => '#1c4b91'], // NA / EU
            ['name' => 'Pikachu Light Blue', 'hex' => '#018de3'], // JP
            ['name' => 'Pikachu Orange', 'hex' => '#fe5f03'], // JP
            ['name' => 'Pokemon Battle Set', 'hex' => '#e28b00'], // UK / Sweden / Australia
        ]);
    }
}
