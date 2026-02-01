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
                'title' => 'One Techno Website',
                'description' => 'Modern technology website with responsive design',
                'url' => 'https://onetechno.id',
                'laptop_image' => 'portfolio/laptop/01KG15KMFV1N3M53PHV5E9S82V.jpg',
                'laptop_url' => 'https://onetechno.id',
                'hp_image' => 'portfolio/mobile/01KG15KMFW8V34CADG7EC6TSH8.jpg',
                'hp_url' => 'https://onetechno.id',
                'full_image' => 'portfolio/desktop/01KG15KMFW8V34CADG7EC6TSH9.jpg',
                'full_url' => 'https://onetechno.id',
                'is_featured' => true,
                'is_active' => true,
                'order' => 1
            ],
            [
                'title' => 'E-Commerce Platform',
                'description' => 'Professional e-commerce website with modern design',
                'url' => '#',
                'laptop_image' => 'portfolio/laptop/01KG1RG8H5KQ3K4TEX1Q8DVWK9.webp',
                'laptop_url' => '#',
                'hp_image' => 'portfolio/mobile/01KG1RG8H7502DY5CTBH1M73X1.webp',
                'hp_url' => '#',
                'full_image' => 'portfolio/desktop/01KG1RGG8YF50E9R9KNW31FV0N.webp',
                'full_url' => '#',
                'is_featured' => true,
                'is_active' => true,
                'order' => 2
            ],
            [
                'title' => 'Corporate Dashboard',
                'description' => 'Business dashboard with analytics and reporting',
                'url' => '#',
                'laptop_image' => 'portfolio/laptop/01KG3X1QA063J6Z4FWRSBYB4NM.webp',
                'laptop_url' => '#',
                'hp_image' => 'portfolio/mobile/01KG3X1QA1WKJVY3N655ZV16YP.webp',
                'hp_url' => '#',
                'full_image' => 'portfolio/desktop/01KG3X1QA1WKJVY3N655ZV16YQ.webp',
                'full_url' => '#',
                'is_featured' => true,
                'is_active' => true,
                'order' => 3
            ],
            [
                'title' => 'Restaurant Management',
                'description' => 'Restaurant website with online ordering system',
                'url' => '#',
                'laptop_image' => 'portfolio/laptop/01KG3X31F09QNDJNEMB334S71Y.webp',
                'laptop_url' => '#',
                'hp_image' => 'portfolio/mobile/01KG3X31F1SSADJA7X0QFDW3J1.webp',
                'hp_url' => '#',
                'full_image' => 'portfolio/desktop/01KG3X31F1SSADJA7X0QFDW3J2.webp',
                'full_url' => '#',
                'is_featured' => false,
                'is_active' => true,
                'order' => 4
            ],
            [
                'title' => 'Portfolio Website',
                'description' => 'Creative portfolio for designers and developers',
                'url' => '#',
                'laptop_image' => 'portfolio/laptop/01KG3X4AQW6E2X615WPY66ZNR9.webp',
                'laptop_url' => '#',
                'hp_image' => 'portfolio/mobile/01KG3X4AQX2ZNA24438CHMA0PD.webp',
                'hp_url' => '#',
                'full_image' => 'portfolio/desktop/01KG3X4AQX2ZNA24438CHMA0PE.webp',
                'full_url' => '#',
                'is_featured' => true,
                'is_active' => true,
                'order' => 5
            ],
            [
                'title' => 'Real Estate Platform',
                'description' => 'Property listing and management system',
                'url' => '#',
                'laptop_image' => 'portfolio/laptop/01KG3X5KWYYECK4GSVSFQ620Z4.webp',
                'laptop_url' => '#',
                'hp_image' => 'portfolio/mobile/01KG3X5KWZ3G6SHAH1AQ36DGDG.webp',
                'hp_url' => '#',
                'full_image' => 'portfolio/desktop/01KG3X5KWZ3G6SHAH1AQ36DGDH.webp',
                'full_url' => '#',
                'is_featured' => false,
                'is_active' => true,
                'order' => 6
            ],
            [
                'title' => 'Education Platform',
                'description' => 'Online learning management system',
                'url' => '#',
                'laptop_image' => 'portfolio/laptop/01KG3X6Z9PQGEDVAD2SR6XW127.webp',
                'laptop_url' => '#',
                'hp_image' => 'portfolio/mobile/01KG3X6Z9R74FTBTR4ZP82P6KJ.webp',
                'hp_url' => '#',
                'full_image' => 'portfolio/desktop/01KG3X6Z9R74FTBTR4ZP82P6KK.webp',
                'full_url' => '#',
                'is_featured' => true,
                'is_active' => true,
                'order' => 7
            ],
            [
                'title' => 'Healthcare System',
                'description' => 'Medical practice management system',
                'url' => '#',
                'laptop_image' => 'portfolio/laptop/01KG3X8BR0GMNMWNK5YSRMXTDY.webp',
                'laptop_url' => '#',
                'hp_image' => 'portfolio/mobile/01KG3X8BR1VXME3865GSB1YT7Z.webp',
                'hp_url' => '#',
                'full_image' => 'portfolio/desktop/01KG3X8BR1VXME3865GSB1YT80.webp',
                'full_url' => '#',
                'is_featured' => false,
                'is_active' => true,
                'order' => 8
            ],
            [
                'title' => 'Financial Dashboard',
                'description' => 'Investment and financial tracking platform',
                'url' => '#',
                'laptop_image' => 'portfolio/laptop/01KG3X9DE4AGW66K95PQEHA83X.webp',
                'laptop_url' => '#',
                'hp_image' => 'portfolio/mobile/01KG3X9DE51BCD31PNFRPJSKJ2.webp',
                'hp_url' => '#',
                'full_image' => 'portfolio/desktop/01KG3X9DE51BCD31PNFRPJSKJ3.webp',
                'full_url' => '#',
                'is_featured' => true,
                'is_active' => true,
                'order' => 9
            ],
            [
                'title' => 'Travel Booking',
                'description' => 'Travel and hotel booking management system',
                'url' => '#',
                'laptop_image' => 'portfolio/laptop/01KG3XAK4H2P6KXQASXS5183AM.webp',
                'laptop_url' => '#',
                'hp_image' => 'portfolio/mobile/01KG3XAK4KJ2CJ2FKEB96CSNPE.webp',
                'hp_url' => '#',
                'full_image' => 'portfolio/desktop/01KG3XAK4M1F8MNQPETYYEZMYY.webp',
                'full_url' => '#',
                'is_featured' => false,
                'is_active' => true,
                'order' => 10
            ],
            [
                'title' => 'Event Management',
                'description' => 'Event planning and management platform',
                'url' => '#',
                'laptop_image' => 'portfolio/laptop/01KG3XBNH420YKK4Y25T36PTS0.webp',
                'laptop_url' => '#',
                'hp_image' => 'portfolio/mobile/01KG3XBNH6KRJA3TWTTG4GXC48.webp',
                'hp_url' => '#',
                'full_image' => 'portfolio/desktop/01KG3XBNH6KRJA3TWTTG4GXC49.webp',
                'full_url' => '#',
                'is_featured' => true,
                'is_active' => true,
                'order' => 11
            ],
            [
                'title' => 'Social Media Platform',
                'description' => 'Community and social networking application',
                'url' => '#',
                'laptop_image' => 'portfolio/laptop/01KG3XCQDAZQ3SKKRFZ71PJ8DF.webp',
                'laptop_url' => '#',
                'hp_image' => 'portfolio/mobile/01KG3XCQDAZQ3SKKRFZ71PJ8DG.webp',
                'hp_url' => '#',
                'full_image' => 'portfolio/desktop/01KG3XCQDBS1KW14SAEWA1XEM3.webp',
                'full_url' => '#',
                'is_featured' => false,
                'is_active' => true,
                'order' => 12
            ]
        ];

        foreach ($portfolios as $portfolio) {
            Porto::create($portfolio);
        }
    }
}
