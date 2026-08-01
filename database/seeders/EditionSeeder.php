<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('editions')->insert([
            // PS1
            [
                'name' => 'PS1 Grey',
                'description' => 'The standard colour of the Playstation 1.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => false,
                'slug' => 'ps1-grey'
            ],
            [
                'name' => '10 Million',
                'description' => 'Marine Blue edition of the Playstation 1 to commemorate 10 million units made. Came with a matching controller and memory card.',
                'release_date' => null,
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps1-10-million'
            ],
            [
                'name' => 'Net Yaroze',
                'description' => 'A black hobbyist PS1 dev kit. Came with two black controllers, two black memory cards and a black VGA video cable.',
                'release_date' => '1997-01-01',
                'end_production_date' => '2000-01-01',
                'is_limited_edition' => true,
                'slug' => 'ps1-net-yaroze'
            ],
            [
                'name' => 'PS1 Black',
                'description' => 'The black colour of the Playstation 1 original controller.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => false,
                'slug' => 'ps1-black'
            ],
            [
                'name' => 'PS1 Red',
                'description' => 'The red colour of the Playstation 1 original controller.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => false,
                'slug' => 'ps1-red'
            ],
            [
                'name' => 'PS1 Blue Developer',
                'description' => 'A blue developer exclusive Playstation 1 original controller.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => true,
                'slug' => 'ps1-developer-blue'
            ],
            [
                'name' => 'PS1 Gold',
                'description' => 'A golden colour of the Playstation 1 original controller.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => true,
                'slug' => 'ps1-gold'
            ],
            [
                'name' => 'PS1 Clear Black',
                'description' => 'A transparent black colour of the Playstation 1 DualShock controller. Also known as Slate Grey.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => false,
                'slug' => 'ps1-clear-black'
            ],
            [
                'name' => 'PS1 Clear Blue',
                'description' => 'A transparent blue colour of the Playstation 1 DualShock controller. Also known as Island Blue or Ocean Blue.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => false,
                'slug' => 'ps1-clear-blue'
            ],
            [
                'name' => 'PS1 Clear Green',
                'description' => 'A transparent green colour of the Playstation 1 DualShock controller. Also known as Emerald Green.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => true,
                'slug' => 'ps1-clear-green'
            ],
            [
                'name' => 'PS1 Clear Red',
                'description' => 'A transparent red colour of the Playstation 1 DualShock controller.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => true,
                'slug' => 'ps1-clear-red'
            ],
            [
                'name' => 'PS1 Crystal Clear',
                'description' => 'A fully transparent Playstation 1 DualShock controller.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => true,
                'slug' => 'ps1-crystal-clear'
            ],
            [
                'name' => 'PS1 White',
                'description' => 'The white colour of the Playstation 1 memory card.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => false,
                'slug' => 'ps1-white'
            ],
            [
                'name' => 'PS1 Lemon Yellow',
                'description' => 'A transparent yellow colour of the Playstation 1 memory card.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => false,
                'slug' => 'ps1-lemon-yellow'
            ],
            [
                'name' => 'PS1 Clear Orange',
                'description' => 'A transparent orange colour of the Playstation 1 memory card.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => false,
                'slug' => 'ps1-clear-orange'
            ],
            [
                'name' => 'PS1 10 Silver',
                'description' => 'A silver colour of the Playstation 1 memory card.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => true,
                'slug' => 'ps1-10-silver'
            ],
            [
                'name' => 'PS1 Red Cherry',
                'description' => 'A transparent red colour of the Playstation 1 memory card.',
                'release_date' => '1995-09-29',
                'end_production_date' => '2006-03-23',
                'is_limited_edition' => true,
                'slug' => 'ps1-red-cherry'
            ],

            // PS2
            [
                'name' => 'PS2 Black',
                'description' => 'The standard colour of the Playstation 2.',
                'release_date' => '2000-01-01',
                'end_production_date' => '2001-12-31',
                'is_limited_edition' => false,
                'slug' => 'ps2-black'
            ],
            [
                'name' => 'Snow White',
                'description' => 'A white version of the Playstation 2.',
                'release_date' => '2001-12-21',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-snow-white'
            ],
            [
                'name' => 'Super Red',
                'description' => 'A red version of the Playstation 2.',
                'release_date' => '2001-12-21',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-super-red'
            ],
            [
                'name' => 'Light Yellow',
                'description' => 'A yellow version of the Playstation 2.',
                'release_date' => '2001-12-21',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-light-yellow'
            ],
            [
                'name' => 'Astral Blue',
                'description' => 'A blue version of the Playstation 2.',
                'release_date' => '2001-12-21',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-astral-blue'
            ],
            [
                'name' => 'Metallic Silver',
                'description' => 'A metallic silver version of the Playstation 2.',
                'release_date' => '2001-12-21',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-metallic-silver'
            ],
            [
                'name' => 'Ocean Blue',
                'description' => 'A transparent blue version of the Playstation 2.',
                'release_date' => '2002-07-18',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-ocean-blue'
            ],
            [
                'name' => 'Zen Black',
                'description' => 'A transparent black version of the Playstation 2.',
                'release_date' => '2002-08-01',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-zen-black'
            ],
            [
                'name' => 'Toys Blue',
                'description' => 'A pastel blue version of the Playstation 2.',
                'release_date' => '2002-12-03',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-toys-blue'
            ],
            [
                'name' => 'Silver',
                'description' => 'A silver version of the Playstation 2.',
                'release_date' => '2003-02-13',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-silver'
            ],
            [
                'name' => 'Sakura Purple',
                'description' => 'A light purple version of the Playstation 2.',
                'release_date' => '2003-02-13',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-sakura-purple'
            ],
            [
                'name' => 'Aqua Blue',
                'description' => 'A metallic blue version of the Playstation 2.',
                'release_date' => '2003-02-13',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-aqua-blue'
            ],
            [
                'name' => 'Opaque Black',
                'description' => 'A translucent black version of the Playstation 2.',
                'release_date' => '2003-11-13',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-opaque-black'
            ],
            [
                'name' => 'Toys Satin Silver',
                'description' => 'A satin silver version of the Playstation 2.',
                'release_date' => '2003-11-19',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-satin-silver'
            ],
            [
                'name' => 'Ceramic White',
                'description' => 'A ceramic white version of the Playstation 2.',
                'release_date' => '2004-03-18',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-ceramic-white'
            ],
            [
                'name' => 'Pearl White',
                'description' => 'A pearl white version of the Playstation 2.',
                'release_date' => '2004-07-15',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-pearl-white'
            ],
            [
                'name' => 'Opaque Blue',
                'description' => 'A translucent midnight blue version of the Playstation 2.',
                'release_date' => '2004-11-03',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-opaque-blue'
            ],
            [
                'name' => 'Gundam Gold',
                'description' => 'A Mobile Suit Gundam Type 100 gold version of the Playstation 2.',
                'release_date' => '2003-12-04',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-gundam-gold'
            ],
            [
                'name' => 'PS2 Crystal Clear',
                'description' => 'A fully transparent version of the DualShock 2 controller.',
                'release_date' => '2002-06-27',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-crystal-clear'
            ],
            [
                'name' => 'PS2 Emerald Green',
                'description' => 'A transparent green version of the DualShock 2 controller.',
                'release_date' => '2002-06-27',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-emerald-green'
            ],
            [
                'name' => 'PS2 Crimson Red',
                'description' => 'A transparent red version of the DualShock 2 controller.',
                'release_date' => '2002-06-27',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-crimson-red'
            ],
            [
                'name' => 'PS2 Lemon Yellow',
                'description' => 'A transparent yellow version of the DualShock 2 controller.',
                'release_date' => '2002-06-27',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-lemon-yellow'
            ],
            [
                'name' => 'PS2 Midnight Black',
                'description' => 'An opaque black version of the DualShock 2 controller.',
                'release_date' => '2003-11-13',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-midnight-black'
            ],
            [
                'name' => 'PS2 Grey Smoke',
                'description' => 'An opaque grey version of the DualShock 2 controller.',
                'release_date' => null,
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-grey-smoke'
            ],

            // PS2 Slim
            [
                'name' => 'Slim Charcoal Black',
                'description' => 'A black version of the Playstation 2 Slim.',
                'release_date' => '2005-05-26',
                'end_production_date' => null,
                'is_limited_edition' => false,
                'slug' => 'ps2-slim-charcoal-black'
            ],
            [
                'name' => 'Slim Ceramic White',
                'description' => 'A ceramic white version of the Playstation 2 Slim.',
                'release_date' => '2005-05-26',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-slim-ceramic-white'
            ],
            [
                'name' => 'Slim Final Fantasy',
                'description' => 'A black version of the Playstation 2 Slim with Final Fantasy graphics.',
                'release_date' => '2006-03-06',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-slim-final-fantasy'
            ],
            [
                'name' => 'Slim Pink',
                'description' => 'A pink version of the Playstation 2 Slim.',
                'release_date' => '2006-11-22',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-slim-pink'
            ],

            // PS2 Super Slim
            [
                'name' => 'Super Slim Charcoal Black',
                'description' => 'A charcoal black version of the Playstation 2 Super Slim.',
                'release_date' => '2007-11-22',
                'end_production_date' => null,
                'is_limited_edition' => false,
                'slug' => 'ps2-super-slim-charcoal-black'
            ],
            [
                'name' => 'Super Slim Satin Silver',
                'description' => 'A satin silver version of the Playstation 2 Super Slim.',
                'release_date' => '2007-11-22',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-super-slim-satin-silver'
            ],
            [
                'name' => 'Super Slim Cinnabar Red',
                'description' => 'A metallic red version of the Playstation 2 Super Slim.',
                'release_date' => '2008-07-03',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'ps2-super-slim-cinnabar-red'
            ],

            // Nintendo 64
            // Funtastic series
            [
                'name' => 'Funtastic Blue White',
                'description' => 'A limited edition of the Nintendo 64 with a translucent blue-white\'s case. Released only in Japan and Europe.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-funtastic-blue-white'
            ],
            [
                'name' => 'Funtastic Fire Orange',
                'description' => 'A limited edition of the Nintendo 64 with a translucent fire orange case. Released globally.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-funtastic-fire-orange'
            ],
            [
                'name' => 'Funtastic Fire Red',
                'description' => 'A limited edition of the Nintendo 64 with a translucent fire red case. Released only in Europe.',
                'release_date' => '1999-07-01',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-funtastic-fire-red'
            ],
            [
                'name' => 'Funtastic Grape Purple',
                'description' => 'A limited edition of the Nintendo 64 with a translucent grape purple case. Released globally.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-funtastic-grape-purple'
            ],
            [
                'name' => 'Funtastic Ice Blue',
                'description' => 'A limited edition of the Nintendo 64 with a translucent ice blue case. Released globally.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-funtastic-ice-blue'
            ],
            [
                'name' => 'Funtastic Jungle Green',
                'description' => 'A limited edition of the Nintendo 64 with a translucent jungle green case. Released globally. Some versions came bundled with Donkey Kong 64.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-funtastic-jungle-green'
            ],
            [
                'name' => 'Funtastic Midnight Blue',
                'description' => 'A limited edition of the Nintendo 64 with a translucent midnight blue case. Released only in Japan.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-funtastic-midnight-blue'
            ],
            [
                'name' => 'Funtastic Red White',
                'description' => 'A limited edition of the Nintendo 64 with a translucent red top and white bottom case. Released only in Japan.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-funtastic-red-white'
            ],
            [
                'name' => 'Funtastic Smoke Black',
                'description' => 'A limited edition of the Nintendo 64 with a translucent black case. Released globally.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-funtastic-smoke-black'
            ],
            [
                'name' => 'Funtastic Sun Orange',
                'description' => 'A limited edition of the Nintendo 64 with a translucent sun orange case. Released globally.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-funtastic-sun-orange'
            ],
            [
                'name' => 'Funtastic Watermelon Red',
                'description' => 'A limited edition of the Nintendo 64 with a translucent watermelon red case. Released only in North America.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-funtastic-watermelon-red'
            ],
            // Matte / other colours
            [
                'name' => 'Pikachu Dark Blue',
                'description' => 'A limited edition of the Nintendo 64 with a unique dark blue case inspired by the yellow mouse. Released only in North America and Europe. It is now highly sought after by collectors.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-pikachu-dark-blue'
            ],
            [
                'name' => 'Pikachu Light Blue',
                'description' => 'A limited edition of the Nintendo 64 with a unique light blue case inspired by the yellow mouse. Released only in Japan. It is now highly sought after by collectors.',
                'release_date' => '1999-11-21',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-pikachu-light-blue'
            ],
            [
                'name' => 'Pikachu Orange',
                'description' => 'A limited edition of the Nintendo 64 with a unique orange case inspired by the yellow mouse. Released only in Japan. It is now highly sought after by collectors.',
                'release_date' => '1999-11-21',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-pikachu-orange'
            ],
            [
                'name' => 'Pokemon Battle Set',
                'description' => 'A limited edition of the Nintendo 64 with a unique dark blue and orange case with pokemon stickers. Released only in the United Kingdom, Sweden and Australia. In Australia it is called the Pokemaniac Edition. It is now highly sought after by collectors.',
                'release_date' => null,
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-pokemon-battle-set'
            ],
            [
                'name' => 'Gold',
                'description' => 'A limited edition of the Nintendo 64 with a golden case. Released only in Japan and North America. In North America, this version could be bought at Toys R Us.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-gold'
            ],
            [
                'name' => 'Ana',
                'description' => 'A limited edition of the Nintendo 64 with a black case and a Ana sticker near the expansion port. Released only in Japan. It was released as a promotional item, exclusively through All Nippon Airways (ANA, Japan\'s national airline) as part of a holiday travel package in 1999.',
                'release_date' => '1999-12-01',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-ana'
            ],
            [
                'name' => 'Buck Bumble',
                'description' => 'A limited edition of the Nintendo 64 with a Buck Bumble graphic, covering the entire system. Released only in Germany as part of a giveaway in the 11/1998 issue of the Fun Generation magazine.',
                'release_date' => '1998-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-buck-bumble'
            ],
            [
                'name' => 'Daiei Hawks',
                'description' => 'A limited edition of the Nintendo 64 with a translucent orange top and matte black bottom case. Released only in Japan to commemorate the Daiei Hawks, a professional baseball team based in Fukuoka, Japan.',
                'release_date' => '1999-09-11',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-daiei-hawks'
            ],
            [
                'name' => 'IQue Console',
                'description' => 'A unique variant of the Nintendo 64 that was released in China in 2003. It was the result of a partnership between Nintendo and iQue, the console itself is included inside the controller making it a plug-and-play Nintendo 64.',
                'release_date' => '2003-01-01',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-ique-console'
            ],
            [
                'name' => 'Jusco 30th Anniversary',
                'description' => 'A unique variant of the Nintendo 64 with a translucent black case. It was released in Japan in 1999 to commemorate the 30th anniversary of Jusco, a major Japanese retail chain (now part of Aeon)',
                'release_date' => '1999-01-01',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-jusco-30th-anniversary'
            ],
            [
                'name' => 'Lawson Station',
                'description' => 'A special edition version of the Nintendo 64 with a black case and a Lawson Station sticker. It was released in Japan in 1999 as part of a collaboration between Nintendo and Lawson, a popular convenience store chain in Japan.',
                'release_date' => '1999-01-01',
                'end_production_date' => null,
                'is_limited_edition' => true,
                'slug' => 'n64-lawson-station'
            ],
        ]);
    }
}
