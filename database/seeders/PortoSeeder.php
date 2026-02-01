<?php

namespace Database\Seeders;

use App\Models\Porto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortoSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'Iraga Coffee',
                'url' => 'https://iragacoffee.com/',
                'laptop_image' => 'portfolio/laptop/01KG15KMFV1N3M53PHV5E9S82V.jpg',
                'hp_image' => 'portfolio/mobile/01KG15KMFW8V34CADG7EC6TSH8.jpg',
                'full_image' => 'portfolio/desktop/01KG15KMFW8V34CADG7EC6TSH9.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 1
            ],
            [
                'title' => 'Padi Consulting',
                'url' => 'https://padiconsulting.id/',
                'laptop_image' => 'portfolio/laptop/01KG1RG8H5KQ3K4TEX1Q8DVWK9.webp',
                'hp_image' => 'portfolio/mobile/01KG1RG8H7502DY5CTBH1M73X1.webp',
                'full_image' => 'portfolio/desktop/01KG1RGG8YF50E9R9KNW31FV0N.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 2
            ],
            [
                'title' => 'Kos Management',
                'url' => null,
                'laptop_image' => 'portfolio/laptop/01KG3X1QA063J6Z4FWRSBYB4NM.webp',
                'hp_image' => 'portfolio/mobile/01KG3X1QA1WKJVY3N655ZV16YP.webp',
                'full_image' => 'portfolio/desktop/01KG3X1QA1WKJVY3N655ZV16YQ.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 3
            ],
            [
                'title' => 'Prestige Investment Global Group',
                'url' => 'https://prestigeinvestmentglobalgroup.com',
                'laptop_image' => 'portfolio/laptop/01KG3X31F09QNDJNEMB334S71Y.webp',
                'hp_image' => 'portfolio/mobile/01KG3X31F1SSADJA7X0QFDW3J1.webp',
                'full_image' => 'portfolio/desktop/01KG3X31F1SSADJA7X0QFDW3J2.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 4
            ],
            [
                'title' => 'Black Bali Paradise',
                'url' => 'https://blackbaliparadise.com/',
                'laptop_image' => 'portfolio/laptop/01KG3X4AQW6E2X615WPY66ZNR9.webp',
                'hp_image' => 'portfolio/mobile/01KG3X4AQX2ZNA24438CHMA0PD.webp',
                'full_image' => 'portfolio/desktop/01KG3X4AQX2ZNA24438CHMA0PE.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 5
            ],
            [
                'title' => 'East Land Bali Tour',
                'url' => 'https://eastlandbalitour.com/',
                'laptop_image' => 'portfolio/laptop/01KG3X5KWYYECK4GSVSFQ620Z4.webp',
                'hp_image' => 'portfolio/mobile/01KG3X5KWZ3G6SHAH1AQ36DGDG.webp',
                'full_image' => 'portfolio/desktop/01KG3X5KWZ3G6SHAH1AQ36DGDH.webp',
                'is_featured' => false,
                'is_active' => true,
                'order' => 6
            ],
            [
                'title' => 'Maguro Ubud',
                'url' => 'https://maguroubud.com/',
                'laptop_image' => 'portfolio/laptop/01KG3X6Z9PQGEDVAD2SR6XW127.webp',
                'hp_image' => 'portfolio/mobile/01KG3X6Z9R74FTBTR4ZP82P6KJ.webp',
                'full_image' => 'portfolio/desktop/01KG3X6Z9R74FTBTR4ZP82P6KK.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 7
            ],
            [
                'title' => 'Bali To Your Door Step',
                'url' => 'https://balitoyourdoorstep.com/',
                'laptop_image' => 'portfolio/laptop/01KG3X8BR0GMNMWNK5YSRMXTDY.webp',
                'hp_image' => 'portfolio/mobile/01KG3X8BR1VXME3865GSB1YT7Z.webp',
                'full_image' => 'portfolio/desktop/01KG3X8BR1VXME3865GSB1YT80.webp',
                'is_featured' => false,
                'is_active' => true,
                'order' => 8
            ]
        ];

        foreach ($portfolios as $portfolio) {
            Porto::create($portfolio);
        }
    }
}
