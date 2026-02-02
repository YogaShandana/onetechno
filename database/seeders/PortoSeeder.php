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
                'title' => 'Raj Yamuna',
                'url' => 'https://www.rajyamuna.sch.id/',
                'laptop_image' => 'img/portfolio/laptop/01KGE3ATWCGQ0MTJ7M94TX86EA.webp',
                'hp_image' => 'img/portfolio/mobile/01KGE3ATWEY83KDFXN9HFJB0S8.webp',
                'full_image' => 'img/portfolio/desktop/01KGE3ATWEY83KDFXN9HFJB0S9.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 1
            ],
            [
                'title' => 'Intimas Surya',
                'url' => 'https://intimassurya.com/',
                'laptop_image' => 'img/portfolio/laptop/01KGE3D51MDQHQREGFDT7CMZ3H.webp',
                'hp_image' => 'img/portfolio/mobile/01KGE3D51MDQHQREGFDT7CMZ3J.webp',
                'full_image' => 'img/portfolio/desktop/01KGE3D51NE62E1RZ8489TG90Q.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 2
            ],
            [
                'title' => 'Iraga Coffee',
                'url' => 'https://iragacoffee.com/',
                'laptop_image' => 'img/portfolio/laptop/01KGE3GMQ4XK3H0Z88NR2AW1FT.webp',
                'hp_image' => 'img/portfolio/mobile/01KGE3GMQ5J2QV6KJZRXHJDATA.webp',
                'full_image' => 'img/portfolio/desktop/01KGE3GMQ5J2QV6KJZRXHJDATB.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 3
            ],
            [
                'title' => 'Bali To Your Door Step',
                'url' => 'https://balitoyourdoorstep.com/',
                'laptop_image' => 'img/portfolio/laptop/01KGE3KF2G286KX575F5G51RNT.webp',
                'hp_image' => 'img/portfolio/mobile/01KGE3KF2H6PQXPWGYXC16RWE0.webp',
                'full_image' => 'img/portfolio/desktop/01KGE3KF2H6PQXPWGYXC16RWE1.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 4
            ],
            [
                'title' => 'Padi Consulting',
                'url' => 'https://padiconsulting.id/',
                'laptop_image' => 'img/portfolio/laptop/01KGE3P9VRYTG3GRT5FFQ4YSP1.webp',
                'hp_image' => 'img/portfolio/mobile/01KGE3P9VSDRFFZ68R90GNSXRK.webp',
                'full_image' => 'img/portfolio/desktop/01KGE3P9VTMBQ4ZX691S3BJ3ZA.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 5
            ],
            [
                'title' => 'Maguro Ubud',
                'url' => 'https://maguroubud.com/',
                'laptop_image' => 'img/portfolio/laptop/01KGE3RJ88EB7Q2J51Z7V00H8A.webp',
                'hp_image' => 'img/portfolio/mobile/01KGE3RJ89AMCAY65Q1GPP5SAW.webp',
                'full_image' => 'img/portfolio/desktop/01KGE3RJ8ATM8RKVP8TCTJ46G1.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 6
            ],
            [
                'title' => 'Black Bali Paradise',
                'url' => 'https://blackbaliparadise.com/',
                'laptop_image' => 'img/portfolio/laptop/01KGE412H7FVBW2983CA55W8N2.webp',
                'hp_image' => 'img/portfolio/mobile/01KGE412H818V82DAHNPMZDKZ8.webp',
                'full_image' => 'img/portfolio/desktop/01KGE412H818V82DAHNPMZDKZ9.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 7
            ],
            [
                'title' => 'Prestige Investment Global Group',
                'url' => 'https://prestigeinvestmentglobalgroup.com',
                'laptop_image' => 'img/portfolio/laptop/01KGE43AX7Q860HBSXHEVF94WR.webp',
                'hp_image' => 'img/portfolio/mobile/01KGE43AX8MRCA0KFER54TNJZV.webp',
                'full_image' => 'img/portfolio/desktop/01KGE43AX9MJQTCGZM41ESH5YR.webp',
                'is_featured' => true,
                'is_active' => true,
                'order' => 8
            ],
            [
                'title' => 'Kos Management',
                'url' => '',
                'laptop_image' => 'img/portfolio/laptop/01KGES3WQ37GBYMKDZ1WVPK5W9.webp',
                'hp_image' => 'img/portfolio/mobile/01KGES3WQ4FNJBS5KNA2TCNHY9.webp',
                'full_image' => 'img/portfolio/desktop/01KGES3WQ4FNJBS5KNA2TCNHYA.webp',
                'is_featured' => false,
                'is_active' => true,
                'order' => 9
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Porto::create($portfolio);
        }
    }
}
