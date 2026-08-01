<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            UserSeeder::class,
            RegionSeeder::class,
            ColourSeeder::class,
            CountrySeeder::class,
            GenerationSeeder::class,
            ControllerSeeder::class,
            AccessorySeeder::class,
            ConnectionSeeder::class,
            ImageTypeSeeder::class,
            FeatureSeeder::class,
            CategorySeeder::class,
            EditionSeeder::class,
            GameSeeder::class,
            ManufacturerSeeder::class,
            CpuSeeder::class,
            GpuSeeder::class,
            ConsoleSeeder::class,
            ConsoleModelSeeder::class,
            RevisionSeeder::class,
            VariantSeeder::class,
            ThreejsModelSeeder::class,
            AccessoryVariantSeeder::class,
            ControllerVariantSeeder::class,
            ImageSeeder::class,
            ModelVariantSeeder::class,
            ConsoleControllerSeeder::class,
            ConsoleAccessorySeeder::class,
            ConsoleConnectionSeeder::class,
            ConsoleFeatureSeeder::class,
            ConsoleGameSeeder::class,
            GameCategorySeeder::class,
            VariantRegionSeeder::class,
            GameRegionSeeder::class,
            VariantColourSeeder::class,
            ControllerColourSeeder::class,
            AccessoryColourSeeder::class,
            UserGameSeeder::class,
            UserConsoleSeeder::class,
            ControllerFeatureSeeder::class,
            AccessoryFeatureSeeder::class,
        ]);
    }
}
