<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['name' => 'Australia', 'region_id' => 1],
            ['name' => 'Finland'   , 'region_id' => 1],
            ['name' => 'France'    , 'region_id' => 1],
            ['name' => 'Germany'   , 'region_id' => 1],
            ['name' => 'Italy'     , 'region_id' => 1],
            ['name' => 'Japan'     , 'region_id' => 5],
            ['name' => 'Netherlands', 'region_id' => 1],
            ['name' => 'Spain'     , 'region_id' => 1],
            ['name' => 'Sweden'    , 'region_id' => 1],
            ['name' => 'United Kingdom', 'region_id' => 1],
            ['name' => 'United States', 'region_id' => 4],
        ]);
    }
}
