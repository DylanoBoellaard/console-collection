<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsoleFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('console_features')->insert([
            [
                'console_id' => 2, // PS2
                'feature_id' => 1, // Backward compatibility
            ],
            [
                'console_id' => 2, // PS2
                'feature_id' => 3, // DVD player
            ],
        ]);
    }
}
