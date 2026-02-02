<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $testimonis = [
            [
                'nama' => 'Sari Pratama',
                'nama_website' => 'Intimas Surya',
                'komentar' => 'Puas banget sama hasil kerjanya one techno. Website jadi lebih menarik dan modern!',
                'rate' => 5,
                'is_active' => true
            ],
            [
                'nama' => 'Made Wijaya',
                'nama_website' => 'Bali To Your Door Step',
                'komentar' => 'Website tour kami sekarang keren abis! one techno emang jago bikin website.',
                'rate' => 5,
                'is_active' => true
            ],
            [
                'nama' => 'Yuki Tanaka',
                'nama_website' => 'Maguro Ubud',
                'komentar' => 'Hasil website restoran kami bagus banget! one techno mantap deh.',
                'rate' => 5,
                'is_active' => true
            ],
            [
                'nama' => 'Nyoman Arya',
                'nama_website' => 'Black Bali Paradise',
                'komentar' => 'one techno berhasil bikin website yang sesuai brand kami. Keren!',
                'rate' => 5,
                'is_active' => true
            ],
            [
                'nama' => 'Alex Lim',
                'nama_website' => 'Prestige Investment Global Group',
                'komentar' => 'Website investment kami sekarang lebih professional. one techno recommended!',
                'rate' => 5,
                'is_active' => true
            ],
        ];

        foreach ($testimonis as $testimoni) {
            Testimoni::create($testimoni);
        }
    }
}
