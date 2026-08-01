<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manufacturers')->insert([
            [
                'name' => 'Nintendo',
                'logo' => '/images/manufacturers/nintendo-logo.png',
                'website' => 'https://www.nintendo.com/',
                'slug' => 'manufacturer-nintendo',
                'country_id' => 6
            ],
            [
                'name' => 'Sega',
                'logo' => '/images/manufacturers/sega-logo.png',
                'website' => 'https://www.sega.com/',
                'slug' => 'manufacturer-sega',
                'country_id' => 6
            ],
            [
                'name' => 'Sony',
                'logo' => '/images/manufacturers/sony-logo.png',
                'website' => 'https://www.sony.com/',
                'slug' => 'manufacturer-sony',
                'country_id' => 6
            ],
            [
                'name' => 'Microsoft',
                'logo' => '/images/manufacturers/microsoft-logo.png',
                'website' => 'https://www.microsoft.com/',
                'slug' => 'manufacturer-microsoft',
                'country_id' => 11
            ],
            [
                'name' => 'Atari',
                'logo' => '/images/manufacturers/atari-logo.png',
                'website' => 'https://www.atari.com/',
                'slug' => 'manufacturer-atari',
                'country_id' => 11
            ],
            [
                'name' => 'NEC',
                'logo' => '/images/manufacturers/nec-logo.png',
                'website' => 'https://group.nec/global/en/',
                'slug' => 'manufacturer-nec',
                'country_id' => 11
            ]
        ]);
    }
}
