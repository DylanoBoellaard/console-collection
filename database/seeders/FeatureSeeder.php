<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            [
                'name' => 'Backward compatibility',
                'description' => 'The console can play games from previous generations of consoles.',
            ],
            [
                'name' => 'CD player',
                'description' => 'The console has a CD player that can play music and audio files.',
            ],
            [
                'name' => 'DVD player',
                'description' => 'The console has a DVD player that can play video and audio files.',
            ],
            [
                'name' => 'Blu-ray player',
                'description' => 'The console has a Blu-ray player that can play high-definition video and audio files.',
            ],
            [
                'name' => 'Internet browser',
                'description' => 'The console has an internet browser that can access websites and online content.',
            ],
            [
                'name' => 'Media streaming',
                'description' => 'The console can stream media from online services such as Netflix, Hulu, and YouTube.',
            ],
            [
                'name' => 'Digital distribution',
                'description' => 'The console can download and install games and other content from online stores.',
            ],
            [
                'name' => 'Cloud gaming',
                'description' => 'The console can play games that are streamed from remote servers over the internet.',
            ],
            [
                'name' => 'Wi-Fi',
                'description' => 'The console has a Wi-Fi support to connect to the internet.',
            ],
            [
                'name' => 'Bluetooth',
                'description' => 'The console has Bluetooth support to connect to other devices.',
            ],
            [
                'name' => 'Online play',
                'description' => 'The console can connect to the internet and play games online with other players.',
            ],
            [
                'name' => 'Motion control',
                'description' => 'The console can detect motion and use it as an input method for games.',
            ],
            [
                'name' => 'Virtual reality',
                'description' => 'The console can support virtual reality headsets and games.',
            ],
        ]);
    }
}
