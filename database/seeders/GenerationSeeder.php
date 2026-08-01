<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generations')->insert([
            [
                'name' => '1st',
                'description' => 'First generation of consoles released in 1972 until 1983',
                'start_date' => '1972-01-01',
                'end_date' => '1983-12-31',
            ],
            [
                'name' => '2nd',
                'description' => 'Second generation of consoles released in 1976 until 1992',
                'start_date' => '1976-11-01',
                'end_date' => '1992-12-31',
            ],
            [
                'name' => '3rd',
                'description' => 'Third generation of consoles released in 1983 until 2003. The 8-bit era.',
                'start_date' => '1983-01-01',
                'end_date' => '2003-12-31',
            ],
            [
                'name' => '4th',
                'description' => 'Fourth generation of consoles released in 1987 - 2004. The 16-bit era. The era which introduced the concept of a "console war" between Nintendo and Sega.',
                'start_date' => '1987-01-01',
                'end_date' => '2004-12-31',
            ],
            [
                'name' => '5th',
                'description' => 'Fifth generation of consoles released in 1993 - 2006. Known as the 32-bit, 64-bit or the 3D era. This generation introduced 3D graphics and the transition from cartridges to optical discs. It also marked the beginning of the decline of Sega as a console manufacturer, the rise of Sony and a console war between Nintendo and Sony.',
                'start_date' => '1993-01-01',
                'end_date' => '2006-12-31',
            ],
            [
                'name' => '6th',
                'description' => 'Sixth generation of consoles released in 1998 - 2013. Rarely called the 128-bit era. The internet became more popular and utilized. Xbox was the first to have an internal ethernet port and the first to use an internal hard drive. Microsoft thus became a major player within the console industry.',
                'start_date' => '1998-01-01',
                'end_date' => '2013-12-31',
            ],
            [
                'name' => '7th',
                'description' => 'Seventh generation of consoles released in 2005 - 2017. The era of HD gaming. The first generation to have motion controls and the first to have a built-in microphones. The PS3 utilized 3D and Blu-ray technology. The Xbox 360 used the Kinect to capture motion data. Nintendo primarily focused on motion controls.',
                'start_date' => '2005-01-01',
                'end_date' => '2017-12-31',
            ],
            [
                'name' => '8th',
                'description' => 'Eighth generation of consoles released in 2012 - present. The generation to utilize mostly the same innovations as the previous generation, just with better hardware, graphics and performance. It is also the first generation to support Virtual Reality.',
                'start_date' => '2012-01-01',
                'end_date' => null,
            ],
            [
                'name' => '9th',
                'description' => 'Ninth generation of consoles released in 2020 - present. This generation mostly focusses on 4K gaming, with 8K support. It is also the first generation to primarily utilize SSDs for faster loading times and better performance. Ray tracing is also a major focus of this generation, with the PS5 and Xbox Series X/S supporting it.',
                'start_date' => '2020-01-01',
                'end_date' => null,
            ],
        ]);
    }
}
