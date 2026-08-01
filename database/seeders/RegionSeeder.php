<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->insert([
            ['name' => 'PAL'],      // For games & consoles
            ['name' => 'PAL-M'],    // Video signal
            ['name' => 'PAL-N'],    // Video signal
            ['name' => 'NTSC-U'],   // For games & consoles
            ['name' => 'NTSC-J'],   // For games & consoles
            ['name' => 'SECAM'],    // Video signal
        ]);
    }
}
