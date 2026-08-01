<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsoleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('models')->insert([
            // PS1
            [
                'name' => 'Playstation 1 Phat',
                'description' => 'The original Playstation 1 model. The last digit of the model number indicates the region. SCPH-xxx0 for Japan, SCPH-xxx1 for North America, SCPH-xxx2 for Europe and finally, SCPH-xxx3 for Asian regions outside of Japan.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'model_number' => 'SCPH-1000 - SCPH-900x',
                'serial_number' => null,
                'slug' => 'playstation-1-phat',
                'console_id' => 1,
            ],
            [
                'name' => 'PS One (Slim)',
                'description' => 'The updated, smaller, slim Playstation 1 model.',
                'release_date' => '2000-08-01',
                'end_production_date' => '2006-03-23',
                'model_number' => 'SCPH-10x',
                'serial_number' => null,
                'slug' => 'playstation-1-slim',
                'console_id' => 1,
            ],
            // PS2
            [
                'name' => 'Playstation 2 Phat',
                'description' => 'The original Playstation 2 model.',
                'release_date' => '2000-10-26',
                'end_production_date' => '2004-01-01',
                'model_number' => 'SCPH-10000 - SCPH-500xx',
                'serial_number' => null,
                'slug' => 'playstation-2-phat',
                'console_id' => 2,
            ],
            [
                'name' => 'PS2 Slim',
                'description' => 'The updated, smaller, slim Playstation 2 model. This model has a divider between the disk drive and the console. It also has an external power supply.',
                'release_date' => '2004-01-01',
                'end_production_date' => '2008-06-01',
                'model_number' => 'SCPH-700xx - 790xx',
                'serial_number' => null,
                'slug' => 'playstation-2-slim',
                'console_id' => 2,
            ],
            [
                'name' => 'PS2 Super Slim',
                'description' => 'The updated, slightly smaller, super slim Playstation 2 model. This model got rid of the divider between the disk drive and the console. It also returns to having an internal power supply. Worthy of note that Sony found out about FreeMcBoot\'s existance and patched the memory card system update starting with BIOS V2.30, thus preventing it from working. Softmodding using FreeDVDBoot combined with FunTuna is the only way to get it to work again. BIOS V2.20 in early batches are still able to use FreeMcBoot.',
                'release_date' => '2007-11-27',
                'end_production_date' => '2013-01-04',
                'model_number' => 'SCPH-900xx',
                'serial_number' => null,
                'slug' => 'playstation-2-super-slim',
                'console_id' => 2,
            ],
            [
                'name' => 'PSX',
                'description' => 'A DVR with a built-in PS2 console released exclusively in Japan. The PSX had a home menu similar to the PS3 with the ability to play games, watch movies and listen to music.',
                'release_date' => '2003-12-13',
                'end_production_date' => '2005-01-01',
                'model_number' => 'DESR-5000 - DESR-7700',
                'serial_number' => null,
                'slug' => 'playstation-x-dvr',
                'console_id' => 2,
            ],
            [
                'name' => 'Bravia PS2 TV',
                'description' => 'A Sony Bravia TV with a built-in SCPH-90004 Super Slim PS2 console. It features a 22" 1366x768 resolution screen and an exclusive V2.50 BIOS that defaults to 16:9 aspect ratio and completely removes the RGB option. This version doesn\'t support system updates through the Memory Card. The TV is connected via a YPbPr component cable: the TV does not support sync-on-green RGB as used in the PS2\'s ED and HD video modes.',
                'release_date' => '2010-11-01',
                'end_production_date' => null,
                'model_number' => 'BRAVIA KDL22PX300',
                'serial_number' => '9304563',
                'slug' => 'bravia-ps2-tv',
                'console_id' => 2,
            ],
            // N64
            [
                'name' => 'N64',
                'description' => 'The Nintendo 64 is a home video game console developed by Nintendo. It was released in Japan on the 23rd of June 1996, in North America on the 29th of September 1996 and in Europe on the 1st of March 1997. It is a fifth-generation home video game console, primarily competing with the Sega Saturn and the PlayStation 1. It has only one model, but it has a variety of colours and variants.',
                'release_date' => '1997-01-03',
                'end_production_date' => '2002-01-01',
                'model_number' => null,
                'serial_number' => null,
                'slug' => 'console-nintendo-64',
                'console_id' => 3,
            ],
        ]);
    }
}
