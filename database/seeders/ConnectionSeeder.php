<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('connections')->insert([
            [
                'name' => 'Controller port',
                'description' => 'A port to connect a controller to a console.',
                'type' => 'controller',
                'signal_quality' => null
            ],
            [
                'name' => 'Memory card port',
                'description' => 'A port to connect a memory card to a console to store games and other data.',
                'type' => 'memory',
                'signal_quality' => null
            ],
            [
                'name' => 'AV Multi Out',
                'description' => 'A multi video output port to connect a console to a TV or other display device. Video output type depends on the console.',
                'type' => 'video',
                'signal_quality' => null
            ],
            [
                'name' => 'RF',
                'description' => 'The lowest quality video output port to connect a console to a TV. Usually connected with a COAX cable.',
                'type' => 'video',
                'signal_quality' => 1
            ],
            [
                'name' => 'Composite',
                'description' => 'A low quality video output port to connect a console to a TV. Also known as CVBS. It has three RCA cables: one for video (yellow) and two for audio (red and white). It supports a maximum resolution of 480i or 576i.',
                'type' => 'video',
                'signal_quality' => 2
            ],
            [
                'name' => 'S-Video',
                'description' => 'A medium quality video output port to connect a console to a TV. It has two cables: one for video and one for audio. It was mostly used in North America, whereas in Europe it wasn\'t common at all.',
                'type' => 'video',
                'signal_quality' => 3
            ],
            [
                'name' => 'Component',
                'description' => 'A high quality video output port to connect a console to a TV. It has five cables: three for video (red, green, blue) and two for audio (red and white). It supports a maximum resolution of 1080i or 1080p. Visually looks very similar to an RGB signal. This type of connection is most common in North America, whereas in Europe it wasn\'t used much.',
                'type' => 'video',
                'signal_quality' => 4
            ],
            [
                'name' => 'RGB (SCART)',
                'description' => 'The highest quality analog video output port to connect a console to a TV. RGB signals are usually carried through a SCART cable, though a SCART cable can also carry other video signals like composite and S-Video. It is slightly better than component, as the Luma (brightness) and Sync signals are separated. This type of connection is most common in Europe. In North America, this type of connection was as rare as Bigfoot himself.',
                'type' => 'video',
                'signal_quality' => 5
            ],
            [
                'name' => 'HDMI',
                'description' => 'The highest quality digital video output port to connect a console to a TV. It i sjust one cable for both (digital) video and audio.',
                'type' => 'video',
                'signal_quality' => 5
            ],
            [
                'name' => 'USB',
                'description' => 'A universal serial bus port. It can be used to connect other devices like controllers, memory cards, and other peripherals. Comes in many different versions.',
                'type' => 'data',
                'signal_quality' => null
            ],
            [
                'name' => 'Ethernet',
                'description' => 'A port to connect a console to a network. It can be used to connect to the internet or to other devices on the same network.',
                'type' => 'network',
                'signal_quality' => null
            ],
            [
                'name' => 'Wi-Fi',
                'description' => 'A wireless network connection. It can be used to connect to the internet or to other devices on the same network.',
                'type' => 'network',
                'signal_quality' => null
            ],
            [
                'name' => 'Bluetooth',
                'description' => 'A wireless connection for short range communication. It can be used to connect controllers, headphones, and other peripherals.',
                'type' => 'data',
                'signal_quality' => null
            ],
            [
                'name' => 'Infrared',
                'description' => 'A wireless connection for short range communication. It can be used to connect controllers, remote controls, and other peripherals.',
                'type' => 'data',
                'signal_quality' => null
            ],
            [
                'name' => 'Expansion port',
                'description' => 'A connection that is specific to a console. It can be used for additional features or peripherals.',
                'type' => 'expansion',
                'signal_quality' => null
            ]
        ]);
    }
}
