<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Action',
                'description' => 'Action games are fast-paced and involve physical movement. They often involve fighting, jumping, and running. Action games can be challenging and require quick reflexes.',
            ],
            [
                'name' => 'Adventure',
                'description' => 'Adventure games are fun and engaging. They often involve exploration, puzzles, and mystery. Adventure games can be exciting and provide a sense of discovery.',
            ],
            [
                'name' => 'Arcade',
                'description' => 'Arcade games are simple and straightforward. They often involve gambling, luck, and strategy. Arcade games can be relaxing and provide a sense of entertainment.',
            ],
            [
                'name' => 'Fighting',
                'description' => 'Fighting games are fast-paced and involve physical combat. They often involve swords, guns, and other weapons. Fighting games can be challenging and require quick reflexes.',
            ],
            [
                'name' => 'Platformer',
                'description' => 'Platformer games are fast-paced and involve jumping, running, and climbing. They often involve exploration, puzzles, and platforming. Platformer games can be challenging and require quick reflexes.',
            ],
            [
                'name' => 'RPG',
                'description' => 'RPG games are fast-paced and involve role-playing, exploration, and combat. They often involve magic, spells, and other RPG elements. RPG games can be challenging and require quick reflexes.',
            ],
            [
                'name' => 'Shooter',
                'description' => 'Shooter games are fast-paced and involve shooting, aiming, and shooting. They often involve guns, explosions, and other shooting elements. Shooter games can be challenging and require quick reflexes.',
            ],
            [
                'name' => 'Sports',
                'description' => 'Sports games are fast-paced and involve physical movement. They often involve sports, such as soccer, basketball, and baseball. Sports games can be challenging and require quick reflexes.',
            ],
            [
                'name' => 'Strategy',
                'description' => 'Strategy games are fast-paced and involve planning, decision-making, and strategy. They often involve resource management, building, and other strategy elements. Strategy games can be challenging and require quick reflexes.',
            ]
        ]);
    }
}
