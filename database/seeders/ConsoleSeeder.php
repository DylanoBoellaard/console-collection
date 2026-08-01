<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('consoles')->insert([
            // PS1
            [
                'name' => 'PlayStation 1',
                'description' => 'The PlayStation 1 is a home video game console developed by Sony Computer Entertainment. It was released in Japan on the 3rd of December 1994, 9th of September 1995 in North America and on the 29th of September 1995 in Europe. It is a fifth-generation home video game console, primarily competing with the Sega Saturn and the Nintendo 64. It has two models: The original Phat and the PS one (slim).',
                'region_locked' => true,
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'slug' => 'console-playstation-1',
                'manufacturer_id' => 3, // Sony
                'generation_id' => 5, // 5th generation
                'cpu_id' => 1,
                'gpu_id' => 1
            ],
            // PS2
            [
                'name' => 'PlayStation 2',
                'description' => 'The PlayStation 2 is a home video game console developed by Sony Computer Entertainment. It was released in Japan on the 4th of March 2000, in North America on the 26th of October and in Europe on the 24th of November. It is a sixth-generation home video game console, primarily competing with the Nintendo GameCube, Sega Dreamcast and Microsoft\'s Xbox. It has three models: The original Phat. Slim and Super Slim.',
                'region_locked' => true,
                'release_date' => '2000-10-26',
                'end_production_date' => '2013-01-04',
                'slug' => 'console-playstation-2',
                'manufacturer_id' => 3, // Sony
                'generation_id' => 6, // 6th generation
                'cpu_id' => 2,
                'gpu_id' => 2
            ],
            // N64
            [
                'name' => 'Nintendo 64',
                'description' => 'The Nintendo 64 is a home video game console developed by Nintendo. It was released in Japan on the 23rd of June 1996, in North America on the 29th of September 1996 and in Europe on the 1st of March 1997. It is a fifth-generation home video game console, primarily competing with the Sega Saturn and the PlayStation 1. It has only one model, but it has a variety of colours and variants.',
                'region_locked' => true,
                'release_date' => '1997-01-03',
                'end_production_date' => '2002-01-01',
                'slug' => 'console-nintendo-64',
                'manufacturer_id' => 1, // Nintendo
                'generation_id' => 5, // 5th generation
                'cpu_id' => 3,
                'gpu_id' => 3
            ]
        ]);
    }
}
