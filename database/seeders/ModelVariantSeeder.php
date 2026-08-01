<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('model_variants')->insert([
            // PS1    
            [
                'model_id' => 1, // PS1 Phat
                'variant_id' => 1, // PS1 Grey
            ],
            [
                'model_id' => 1, // PS1 Phat
                'variant_id' => 5, // PS1 10 Million
            ],
            [
                'model_id' => 1, // PS1 Phat
                'variant_id' => 7, // PS1 Net Yaroze
            ],
        ]);
    }
}
