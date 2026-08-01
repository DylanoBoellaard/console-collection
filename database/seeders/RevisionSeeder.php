<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('revisions')->insert([
            // PS1 Phat
            // First main revisions
            [
                'name' => 'SCPH-1000',
                'description' => 'The first Japanese revision of the Playstation 1. Uses hardware revision A/B. This is the only revision that has an S-Video port. The early revisions had issues with the CD drives as the laser misaligned due to uneven wear. Two motherboards exist: PU-7 with inverior VRAM resulting in lower (5-bit) shading and the PU-8 which do allow the full 8-bit shading.',
                'release_date' => '1994-12-03',
                'end_production_date' => '1995-05-01',
                'model_number' => 'SCPH-1000',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-1000',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-1001',
                'description' => 'The first revision of the Playstation 1 in North America. Uses hardware revision B/C. The international revisions got rid of the S-Video port. For this reason, these models should\'ve been called the SCPH-3000 series. The early revisions had issues with the CD drives as the laser misaligned due to uneven wear. Two motherboards exist: PU-7 with inverior VRAM resulting in lower (5-bit) shading and the PU-8 which do allow the full 8-bit shading.',
                'release_date' => '1995-07-03',
                'end_production_date' => '1997-04-01',
                'model_number' => 'SCPH-1001',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-1001',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-1002',
                'description' => 'The first revision of the Playstation 1 in Europe. Uses hardware revision B/C. The international revisions got rid of the S-Video port. For this reason, these models should\'ve been called the SCPH-3000 series. The early revisions had issues with the CD drives as the laser misaligned due to uneven wear. Two motherboards exist: PU-7 with inverior VRAM resulting in lower (5-bit) shading and the PU-8 which do allow the full 8-bit shading. These PAL revisions have a different menu design; a grey blocked background with square icons for the Memory Card and CD player. The CD player also included reverberation effects unique to those systems until the release of the PS one in 2000, which featured a slightly modified version of the BIOS.',
                'release_date' => '1995-07-03',
                'end_production_date' => '1997-04-01',
                'model_number' => 'SCPH-1002',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-1002',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-3000',
                'description' => 'The second Japanese revision of the Playstation 1. This revision has the updated hardware like the international versions (Rev. B). Thus, the S-Video port had been removed. The early revisions had issues with the CD drives as the laser misaligned due to uneven wear. Two motherboards exist: PU-7 with inverior VRAM resulting in lower (5-bit) shading and the PU-8 which do allow the full 8-bit shading.',
                'release_date' => '1995-05-03',
                'end_production_date' => null,
                'model_number' => 'SCPH-3000',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-3000',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-3500',
                'description' => 'The third Japanese revision of the Playstation 1. Very similar to the SCPH-3000 except for an updated motherboard. Still uses Rev. B hardware. The early revisions had issues with the CD drives as the laser misaligned due to uneven wear. Two motherboards exist: PU-7 with inverior VRAM resulting in lower (5-bit) shading and the PU-8 which do allow the full 8-bit shading.',
                'release_date' => '1995-05-17',
                'end_production_date' => null,
                'model_number' => 'SCPH-3500',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-3500',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-5000',
                'description' => 'The fourth Japanese revision of the Playstation 1. Very similar to the SCPH-3000/3500 except it uses Rev. C hardware (same as late 1001/1002 units), upgrades to flawed components and a reduced retail price. The early revisions had issues with the CD drives as the laser misaligned due to uneven wear. Two motherboards exist: PU-7 with inverior VRAM resulting in lower (5-bit) shading and the PU-8 which do allow the full 8-bit shading.',
                'release_date' => null,
                'end_production_date' => null,
                'model_number' => 'SCPH-5000',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-5000',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-5001',
                'description' => 'The second North American revision of the Playstation 1. The same as the Japanese 5000 revision: uses Rev. C hardware, upgrades to flawed components and a reduced retail price. The early revisions had issues with the CD drives as the laser misaligned due to uneven wear. Two motherboards exist: PU-7 with inverior VRAM resulting in lower (5-bit) shading and the PU-8 which do allow the full 8-bit shading.',
                'release_date' => null,
                'end_production_date' => null,
                'model_number' => 'SCPH-5001',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-5001',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-5500',
                'description' => 'The fifth Japanese revision of the Playstation 1. The CD drive issues were fixed, but the RCA video out has been removed. Interestingly, RCA out is still possible with multi-out to RCA cables. DAC has been downgraded and all models use SGRAM.',
                'release_date' => '1997-04-01',
                'end_production_date' => '1998-01-01',
                'model_number' => 'SCPH-5500',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-5500',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-5501',
                'description' => 'The third North American revision of the Playstation 1. The CD drive issues were fixed, but the RCA video out has been removed. Interestingly, RCA out is still possible with multi-out to RCA cables. DAC has been downgraded and all models use SGRAM.',
                'release_date' => '1997-04-01',
                'end_production_date' => '1998-01-01',
                'model_number' => 'SCPH-5501',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-5501',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-5502',
                'description' => 'The second European revision of the Playstation 1. The CD drive issues were fixed, but the RCA video out has been removed. Interestingly, RCA out is still possible with multi-out to RCA cables. DAC has been downgraded and all models use SGRAM.',
                'release_date' => '1997-04-01',
                'end_production_date' => '1998-01-01',
                'model_number' => 'SCPH-5502',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-5502',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-5503',
                'description' => 'The first Asian revision of the Playstation 1. The CD drive issues were fixed, but the RCA video out has been removed. Interestingly, RCA out is still possible with multi-out to RCA cables. DAC has been downgraded and all models use SGRAM.',
                'release_date' => '1997-04-01',
                'end_production_date' => '1998-01-01',
                'model_number' => 'SCPH-5503',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-5503',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-5552',
                'description' => 'The third European revision of the Playstation 1. Similar to the 5502, but compatible with xStation and PSIO. The "power" and "open" buttons were also changed from text to use symbols. The CD drive issues were fixed, but the RCA video out has been removed. Interestingly, RCA out is still possible with multi-out to RCA cables. DAC has been downgraded and all models use SGRAM.',
                'release_date' => null,
                'end_production_date' => null,
                'model_number' => 'SCPH-5552',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-5552',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-5903',
                'description' => 'The second Asian revision of the Playstation 1. Reintroduced the direct RCA and RFU, whilst also adding Video CD support. Also has a better laser.',
                'release_date' => null,
                'end_production_date' => null,
                'model_number' => 'SCPH-5903',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-5903',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-7000',
                'description' => 'The sixth Japanese revision of the Playstation 1. Less chips and more effictient motherboard. Great for hardware modding. CD DSP chip has been merged with another CD chip, making xStation drive installation impossible. PSIO drive emulator is still able to be installed. This is also the first revision to have a music visualizer and to be bundled with the DualShock controller.',
                'release_date' => '1998-04-01',
                'end_production_date' => '1998-08-01',
                'model_number' => 'SCPH-7000',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-7000',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-7000W',
                'description' => 'The 6.5th Japanese revision of the Playstation 1. The 7000W came in a midnight blue colour to commemorate the 10 millionth Playstation to be sold. Otherwise same as the regular 7000: Less chips and more effictient motherboard. Great for hardware modding. CD DSP chip has been merged with another CD chip, making xStation drive installation impossible. PSIO drive emulator is still able to be installed. This is also the first revision to have a music visualizer and to be bundled with the DualShock controller.',
                'release_date' => '1998-04-01',
                'end_production_date' => '1998-08-01',
                'model_number' => 'SCPH-7000W',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-7000W',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-7001',
                'description' => 'The fourth North American revision of the Playstation 1. Less chips and more effictient motherboard. Great for hardware modding. CD DSP chip has been merged with another CD chip, making xStation drive installation impossible. PSIO drive emulator is still able to be installed. This is also the first revision to have a music visualizer and to be bundled with the DualShock controller.',
                'release_date' => '1998-04-01',
                'end_production_date' => '1998-08-01',
                'model_number' => 'SCPH-7001',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-7001',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-7002',
                'description' => 'The fourth European revision of the Playstation 1. Less chips and more effictient motherboard. Great for hardware modding. CD DSP chip has been merged with another CD chip, making xStation drive installation impossible. PSIO drive emulator is still able to be installed. This is also the first revision to have a music visualizer and to be bundled with the DualShock controller.',
                'release_date' => '1998-04-01',
                'end_production_date' => '1998-08-01',
                'model_number' => 'SCPH-7002',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-7002',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-7003',
                'description' => 'The third Asian revision of the Playstation 1. Less chips and more effictient motherboard. Great for hardware modding. CD DSP chip has been merged with another CD chip, making xStation drive installation impossible. PSIO drive emulator is still able to be installed. This is also the first revision to have a music visualizer and to be bundled with the DualShock controller.',
                'release_date' => '1998-04-01',
                'end_production_date' => '1998-08-01',
                'model_number' => 'SCPH-7003',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-7003',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-7500',
                'description' => 'The seventh Japanese revision of the Playstation 1. Fixed FMV skipping issues and a longer CD drive life. Simplified motherboard internals and improved AV video output with sharper graphics.',
                'release_date' => '1998-08-01',
                'end_production_date' => '1999-05-01',
                'model_number' => 'SCPH-7500',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-7500',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-7501',
                'description' => 'The fifth North American revision of the Playstation 1. Fixed FMV skipping issues and a longer CD drive life. Simplified motherboard internals and improved AV video output with sharper graphics.',
                'release_date' => '1998-08-01',
                'end_production_date' => '1999-05-01',
                'model_number' => 'SCPH-7501',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-7501',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-7502',
                'description' => 'The fifth European revision of the Playstation 1. Fixed FMV skipping issues and a longer CD drive life. Simplified motherboard internals and improved AV video output with sharper graphics.',
                'release_date' => '1998-08-01',
                'end_production_date' => '1999-05-01',
                'model_number' => 'SCPH-7502',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-7502',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-7503',
                'description' => 'The fourth Asian revision of the Playstation 1. Fixed FMV skipping issues and a longer CD drive life. Simplified motherboard internals and improved AV video output with sharper graphics.',
                'release_date' => '1998-08-01',
                'end_production_date' => '1999-05-01',
                'model_number' => 'SCPH-7503',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-7503',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-9000',
                'description' => 'The eigth Japanese revision of the Playstation 1. The parallel port has been removed and the motherboard PCB has been reduced in size. Some earlier units still have the parallel ports, but hidden under the case.',
                'release_date' => '1999-05-01',
                'end_production_date' => '2000-08-01',
                'model_number' => 'SCPH-9000',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-9000',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-9001',
                'description' => 'The sixth North American revision of the Playstation 1. The parallel port has been removed and the motherboard PCB has been reduced in size. Some earlier units still have the parallel ports, but hidden under the case.',
                'release_date' => '1999-05-01',
                'end_production_date' => '2000-08-01',
                'model_number' => 'SCPH-9001',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-9001',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-9002',
                'description' => 'The sixth European revision of the Playstation 1. The parallel port has been removed and the motherboard PCB has been reduced in size. Some earlier units still have the parallel ports, but hidden under the case.',
                'release_date' => '1999-05-01',
                'end_production_date' => '2000-08-01',
                'model_number' => 'SCPH-9002',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-9002',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'SCPH-9003',
                'description' => 'The fifth Asian revision of the Playstation 1. The parallel port has been removed and the motherboard PCB has been reduced in size. Some earlier units still have the parallel ports, but hidden under the case.',
                'release_date' => '1999-05-01',
                'end_production_date' => '2000-08-01',
                'model_number' => 'SCPH-9003',
                'serial_number' => null,
                'slug' => 'ps1-phat-scph-9003',
                'model_id' => 1, // PS1 Phat
            ],
            [
                'name' => 'DTL-H300x "Net Yaroze"',
                'description' => 'The hobbyist PS1 dev kit. It\'s black in colour, has no region lock and it has a different boot ROM. This version has RCA + RFU out with the superior SGRAM, making it the only consumer-level PS1 with that combination.',
                'release_date' => '1997-01-01',
                'end_production_date' => '2000-01-01',
                'model_number' => 'DTL-H300x "Net Yaroze"',
                'serial_number' => null,
                'slug' => 'ps1-phat-net-yaroze',
                'model_id' => 1, // PS1 Phat
            ],

            // PS1 Slim
            [
                'name' => 'SCPH-10x',
                'description' => 'The only revisions of the PS One (Slim). The case is more rounded and smaller. It does not have an accessible serial port or a reset button, but significant modding does allow re-adding the serial port. Has some of the best reliability compared to earlier models.',
                'release_date' => '2000-06-01',
                'end_production_date' => '2006-08-01',
                'model_number' => 'SCPH-10x',
                'serial_number' => null,
                'slug' => 'ps1-slim',
                'model_id' => 2, // PS One Slim
            ],

            // PS2 Phat
            [
                'name' => 'SCPH-10000/15000',
                'description' => 'The original launch models of the Japanese PS2. Also known as the "ProtoKernels" due to their early buggy kernal software. These revisions lack the expansion bay of the later phat models and instead have a slot for a PCMCIA card (SCPH-10190). These offered the same functionalities as later network adapters, but keeping the HDD external. They also can\'t boot HDD software autonomously by design.',
                'release_date' => '2000-01-01',
                'end_production_date' => '2001-12-31',
                'model_number' => 'SCPH-1x000',
                'serial_number' => null,
                'slug' => 'ps2-phat-scph-10x00',
                'model_id' => 3, // PS2 Phat
            ],
            [
                'name' => 'SCPH-18000',
                'description' => 'Similar to the SCPH-10000/15000, but the kernal issues are fixed. This is also the last revision to use the PCMCIA interface for the HDD.',
                'release_date' => '2000-01-01',
                'end_production_date' => '2001-12-31',
                'model_number' => 'SCPH-18000',
                'serial_number' => null,
                'slug' => 'ps2-phat-scph-18000',
                'model_id' => 3, // PS2 Phat
            ],
            [
                'name' => 'SCPH-3000X',
                'description' => 'Launch models outside of Japan. Very similar to the SCPH-18000, but with an expansion bay interface for the HDD. Can easily be spotted by the iLink port aligned to the lower USB and 10 bottom screws. Japanese 30000 models will not match this specific model, due to the SCPH-18000 still circulating. Instead, the\'re equivalent to the 3000XR.',
                'release_date' => '2000-01-01',
                'end_production_date' => '2001-12-31',
                'model_number' => 'SCPH-3000X',
                'serial_number' => null,
                'slug' => 'ps2-phat-scph-3000X',
                'model_id' => 3, // PS2 Phat
            ],
            [
                'name' => 'SCPH-3000XR',
                'description' => 'These models got some heavy redesigning on the motherboard. This wouldn\'t change much up to the 390XX series. The major difference was the chassis redesign, as these models have the amount of bottom screws dropped to 8 with disassembling now required to start from the top side of the casing.',
                'release_date' => '2001-01-01',
                'end_production_date' => '2002-12-31',
                'model_number' => 'SCPH-3000XR',
                'serial_number' => null,
                'slug' => 'ps2-phat-scph-3000XR',
                'model_id' => 3, // PS2 Phat
            ],
            [
                'name' => 'SCPH-37000',
                'description' => 'Japanese exclusive model. Power consumption was reduced compared to previous models. These models featured exclusive colors, never seen again on any other PS2 model. These are the SCPH-37000L: The "Ocean Blue" model, featuring a semi-transparent blue colored casing and the SCPH-37000B: The "Zen Black" model, featuring a semi-transparent black colored casing.',
                'release_date' => '2002-01-01',
                'end_production_date' => '2002-12-31',
                'model_number' => 'SCPH-37000',
                'serial_number' => null,
                'slug' => 'ps2-phat-scph-37000',
                'model_id' => 3, // PS2 Phat
            ],
            [
                'name' => 'SCPH-390XX',
                'description' => 'The next revision. Similar to the SCPH-37000, but released worldwide. These models are susceptible to the MechaCon crash, but it\'s highly unlikely to happen.',
                'release_date' => '2002-01-01',
                'end_production_date' => '2003-12-31',
                'model_number' => 'SCPH-390XX',
                'serial_number' => null,
                'slug' => 'ps2-phat-scph-390XX',
                'model_id' => 3, // PS2 Phat
            ],
            [
                'name' => 'SCPH-500XX',
                'description' => 'The last phat revision. This revision changed several things: introduction of a built-in IR receiver for DVD remotes, replacement of the MechaCon with a new model (and thus the removal of the SYSCON chip with its functionality carried over), ability to update MechaCon software via patches on encrypted area of EEPROM (this feature is the one exploited by MechaPwn), Removal of the IEEE 1394 (iLink) port, Progressive scan (480p) DVD playback, and support for DVD±R/RW and much quieter fans. Worth noting is that on these models the frequency of MechaCon crashes is much higher. These models also had a hidden feature on the BIOS to search for software updates inside the XFROM using OSDSYS (main menu). Eventually, only the PSX DESR systems had this feature working.',
                'release_date' => '2003-01-01',
                'end_production_date' => '2004-12-31',
                'model_number' => 'SCPH-500XX',
                'serial_number' => null,
                'slug' => 'ps2-phat-scph-500XX',
                'model_id' => 3, // PS2 Phat
            ],

            // PS2 Slim
            [
                'name' => 'SCPH-700XX',
                'description' => 'The first slim revision. The slim models are considerably smaller than the phat models. They lost the expansion port and the IEEE 1394 (iLink) port. These models also required an external power brick and the DVD drive was changed to a top loading tray. In one of the later revisions of this model, the Graphics Synthetiser was merged with the Emotion Engine (EE+GS). In addition, these models were very susceptible to the MechaCon crash to the point Sony was sued in the USA. The last revision with software version 6.04 (or higher) fixed this issue completely. All 700XX models use BIOS version 2.00.',
                'release_date' => '2004-01-01',
                'end_production_date' => '2005-12-31',
                'model_number' => 'SCPH-700XX',
                'serial_number' => null,
                'slug' => 'ps2-slim-scph-700XX',
                'model_id' => 4, // PS2 Slim
            ],
            [
                'name' => 'SCPH-750XX',
                'description' => 'The second slim revision and the first PS2 without hardware-based backwards compatibility. Sony removed the PS1 MIPS R3000A I/O CPU, replacing it with a PowerPC CPU that emulates the behaviour of the PS1 CPU. The new chip also took control over the network features of the SPEED chip, which was removed from the design of the console. This allowed Sony to finally and completely ditch the hard drive support. The replacement of the PS1 CPU affected both PS1 and PS2 software. Compatibility fixes were introduced for some of those affected games. All 750XX models use BIOS version 2.20.',
                'release_date' => '2005-09-01',
                'end_production_date' => '2006-09-30',
                'model_number' => 'SCPH-750XX',
                'serial_number' => null,
                'slug' => 'ps2-slim-scph-750XX',
                'model_id' => 4, // PS2 Slim
            ],
            [
                'name' => 'SCPH-770XX',
                'description' => 'The third slim revision. Not much has changed from the previous revision, except game compatibility. Software changes starting from this revision improved compatibility with a few more PS1 and PS2 games, which in essence makes it a slightly better version of the 750XX model. All 770XX models use BIOS version 2.20.',
                'release_date' => '2006-09-01',
                'end_production_date' => '2007-12-31',
                'model_number' => 'SCPH-770XX',
                'serial_number' => null,
                'slug' => 'ps2-slim-scph-770XX',
                'model_id' => 4, // PS2 Slim
            ],
            [
                'name' => 'SCPH-790XX',
                'description' => 'The fourth and final slim revision. This revision is the smallest (internally) and lightest of all Slim models. This is the only non-phat PS2 model that doesn\'t suffer from the ribbon cable disc scratching issue, due to a tiny plastic ribbon cable holder. This prevents the cable from flexing upwards towards the disc. This makes it the best Slim model to purchase. Regrettably, this clip was later removed with the Super Slim models. The GS was once again separated from the EE, with the Graphicss Synthesizer having the most efficient fabrication process at 65nm. The EE wass combined with the RDRAM, SPU2 and IOP into a single SOC. All 790XX use BIOS version 2.20.',
                'release_date' => '2007-06-01',
                'end_production_date' => '2008-06-30',
                'model_number' => 'SCPH-790XX',
                'serial_number' => null,
                'slug' => 'ps2-slim-scph-790XX',
                'model_id' => 4, // PS2 Slim
            ],

            // Super Slim
            [
                'name' => 'SCPH-900XX',
                'description' => 'The first Super Slim revision. Sony returned to the internal PSU design, whilst also adjusting the external cosmetics slightly. Reliability has also been enhanced a significant amount. However, the one huge issue is that the majority of 900XX systems are incapable of running homebrew automatically, since Sony found out of FreeMcBoot\'s existence and removed the memory card system update mechanisms from OSDSYS, which was the entry point of FreeMcBoot. Early models with P- and R-chassis and datecode 8A, 8B and rarely, 8C, still have the old BIOS 2.20 version. This version does not have the patched out FreeMcBoot loading. The later models, which mostly compromise of datecode 8C and later, have BIOS version 2.30, which patched out FreeMcBoot. Luckily, softmodding with FreeDVDBoot combined with FunTuna is still possible to allow FreeMcBoot and other homebrew software.',
                'release_date' => '2008-01-01',
                'end_production_date' => '2013-01-31',
                'model_number' => 'SCPH-900XX',
                'serial_number' => null,
                'slug' => 'ps2-super-slim-scph-900XX',
                'model_id' => 5, // PS2 Super Slim
            ],

            // PSX
            [
                'name' => 'DESR-5XXX / DESR-7XXX',
                'description' => 'A DVR with a built-in PS2. Two models exist: the DESR-5XXX with a 160GB HDD and the DESR-7XXX with a 250GB HDD. The DESR-7500 and DESR-7700 models also have an IEEE 1394 (iLink) port. The PSX is the first device Sony made that used the XrossMediaBar, which would later be used in the PSP and PS3. The console is incompatible with multitaps, limiting game selection to single or 2 player games. The system is also known for poor reliability, with its HDD having high failure rates. The HDD cannot be replaced due to software security on the DVRP chip, which has no public cracks as of 2023. There is a workaround by using the ATA Express mod. It\'s simply an IDE HDD emulator that can run on a microSD card. It bypasses the encryption, but doesn\'t allow using non-official HDD drives.',
                'release_date' => '2003-12-13',
                'end_production_date' => '2005-01-01',
                'model_number' => 'DESR-5XXX / DESR-7XXX',
                'serial_number' => null,
                'slug' => 'playstation-x-dvr',
                'model_id' => 6, // PSX
            ],

            // Sony Bravia PS2 TV
            [
                'name' => 'KDL-22PX300',
                'description' => 'A Sony Bravia TV with a built-in SCPH-90004 Super Slim PS2 console. It features a 22" 1366x768 resolution screen and an exclusive V2.50 BIOS that defaults to 16:9 aspect ratio and completely removes the RGB option. This version doesn\'t support system updates through the Memory Card. The TV is connected via a YPbPr component cable: the TV does not support sync-on-green RGB as used in the PS2\'s ED and HD video modes.',
                'release_date' => '2010-11-01',
                'end_production_date' => null,
                'model_number' => 'BRAVIA KDL22PX300',
                'serial_number' => '9304563',
                'slug' => 'bravia-ps2-tv',
                'model_id' => 7, // Sony Bravia PS2 TV
            ],

            // N64
            [
                'name' => 'NUS-CPU-02 - NUS-CPU-04',
                'description' => 'The first revisions only found in early releases in North America and Japan. Their only distinctive factor is relatively important, as these consoles can be easily modded by the user to support RGB output. After the NUS-CPU-04 revision, changes to the video DAC require the user to do a much more complex RGB mod. Identifying these is quite simple, as practically all of them have a serial number that begins with NS1. Serial numbers which begin with NS2 or higher are of later motherboard revisions. NUS-CPU-04 revisions do not have composite sync (CSYNC) present on pin 3 of the multiout as the components for it were left unpopulated at the factory.',
                'release_date' => '1996-01-01',
                'end_production_date' => '1997-01-01',
                'model_number' => 'NUS-CPU-02 - NUS-CPU-04',
                'serial_number' => 'NS1',
                'slug' => 'N64-NUS-CPU-02-04',
                'model_id' => 8, // N64
            ],
            [
                'name' => 'NUS-CPU-05 - NUS-CPU-07',
                'description' => 'The second revisions. These revisions are harder to RGB mod, due to chip changes. Furthermore, the plastic around the EXT port on the bottom has been made a bit smaller. Such a change results in devices like the Doctor V64 not fitting into the plug anymore. Easily identified by their serial numbers beginning in NS2.',
                'release_date' => '1997-01-01',
                'end_production_date' => '1998-01-01',
                'model_number' => 'NUS-CPU-05 - NUS-CPU-07',
                'serial_number' => 'NS2',
                'slug' => 'N64-NUS-CPU-05-07',
                'model_id' => 8, // N64
            ],
            [
                'name' => 'NUS-CPU-08 - NUS-CPU-09-1',
                'description' => 'The third revisions. Found in, but not limited to the colorful “Funtastic” series, these revisions have a video output that is more aliased. While this may not appeal to everyone, a user that doesn\'t care about RGB modding and prefers a sharper but pixelated look, will probably take interest in these. Presumably has both the smaller EXT plastic and RGB mod difficulties found on the 05-07 systems.',
                'release_date' => '1999-01-01',
                'end_production_date' => '2001-01-01',
                'model_number' => 'NUS-CPU-08 - NUS-CPU-09-1',
                'serial_number' => null,
                'slug' => 'N64-NUS-CPU-08-09-1',
                'model_id' => 8, // N64
            ],
            [
                'name' => 'NUS-CPU-P-01',
                'description' => 'Found in all black PAL consoles & a few “Color Edition” systems. Exposes S-video to the multiout, but a special cable with certain parts is required to correctly display S-video.',
                'release_date' => '1996-01-01',
                'end_production_date' => '1996-12-01',
                'model_number' => 'NUS-CPU-P-01',
                'serial_number' => null,
                'slug' => 'N64-NUS-CPU-P-01',
                'model_id' => 8, // N64
            ],
            [
                'name' => 'NUS-CPU-P-02',
                'description' => 'Found in most of the “Color Edition” systems, and in a lesser quantity of "Pikachu" consoles. Video output is brighter & more aliased. Composite has been improved (less chroma noise). This board revision exposes S-video to the multiout, but a special cable with certain parts is required to correctly display S-video.',
                'release_date' => '1999-01-01',
                'end_production_date' => '1999-12-01',
                'model_number' => 'NUS-CPU-P-02',
                'serial_number' => null,
                'slug' => 'N64-NUS-CPU-P-02',
                'model_id' => 8, // N64
            ],
            [
                'name' => 'NUS-CPU-P-03',
                'description' => 'Found in the PAL "Clear Blue" (turquoise blue top, eggshell white bottom) model as well as in the majority of Pikachu consoles. Video output quality is the same as NUS-CPU-P-02. This board does not make S-video available on the multiout, but it is possible to restore it.',
                'release_date' => '2000-01-01',
                'end_production_date' => '2000-12-01',
                'model_number' => 'NUS-CPU-P-03',
                'serial_number' => null,
                'slug' => 'N64-NUS-CPU-P-03',
                'model_id' => 8, // N64
            ],
            [
                'name' => 'NUS-CPU-R-01',
                'description' => 'Found in black PAL consoles sold in France. These can be easily identified by the label on the bottom of the console reading “FRA” instead of “EUR”. This motherboard can be easily RGB modded by completing the footprints already present on the motherboard or by adding a simple RGB amplifier circuit, similar to early NTSC consoles. S-video can also be restored the same way as in the New-Style SNES or Super Famicom Jr.',
                'release_date' => '1997-01-01',
                'end_production_date' => '1997-12-01',
                'model_number' => 'NUS-CPU-R-01',
                'serial_number' => null,
                'slug' => 'N64-NUS-CPU-R-01',
                'model_id' => 8, // N64
            ],
        ]);
    }
}
