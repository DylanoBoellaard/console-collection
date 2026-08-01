<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            [
                'name' => 'Need for Speed Underground',
                'description' => 'Need for Speed Underground is a racing video game developed by EA Black Box and published by EA Games. It was released on 17 November 2003 for the PlayStation 2, Xbox, GameCube, Gameboy Advance, and Microsoft Windows.',
                'slug' => 'need-for-speed-underground',
                'generation_id' => 6
            ],
            [
                'name' => 'Need for Speed: Underground 2',
                'description' => 'Need for Speed: Underground 2 is a racing video game developed by EA Black Box and published by EA Games. It was released on 19 November 2004 for the PlayStation 2, Xbox, GameCube, Gameboy Advance, Nintendo DS, Mobile Phones and Microsoft Windows.',
                'slug' => 'need-for-speed-underground-2',
                'generation_id' => 6
            ],
            [
                'name' => 'Kirby 64: The Crystal Shards',
                'description' => 'Kirby 64: The Crystal Shards is a platform game developed by HAL Laboratory and published by Nintendo. It was released on the 24th of March 2000, 26th of June 2000 and on the 22nd of June 2001 in Japan, North America and Europe respectively for the Nintendo 64.',
                'slug' => 'kirby-64-the-crystal-shards',
                'generation_id' => 5
            ],
            [
                'name' => 'Yoshi\'s Story',
                'description' => 'Yoshi\'s Story is a platform game developed and published by Nintendo. It was released on the 21st of December 1997 for the Nintendo 64.',
                'slug' => 'yoshis-story',
                'generation_id' => 5
            ],
            [
                'name' => 'Super Mario 64',
                'description' => 'Super Mario 64 is a platform game developed and published by Nintendo. It was released on the 23rd of June 1996 for the Nintendo 64.',
                'slug' => 'super-mario-64',
                'generation_id' => 5
            ]
        ]);
    }
}
