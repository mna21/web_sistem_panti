<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tentang;

class TentangSeeder extends Seeder
{
    public function run()
    {
        Tentang::create([
            'title' => 'Tentang Kami',
            'subtitle' => 'YAYASAN YATIM PIATU DAN ANAK DHUAFA DARUL IHSAN',
            'description' => 'Yayasan Yatim Piatu dan Anak Dhuafa Darul Ihsan adalah salah satu lembaga sosial anak di Jepara yang mengasuh anak-anak yatim, piatu, fakir miskin, dan dhuafa. Semangat utama dari yayasan ini adalah untuk meringankan beban serta memberikan santunan agar mereka bisa mendapatkan kehidupan yang lebih baik.',
            'image' => 'tentang.jpg', // Pastikan file ini ada di storage
            'button_link' => '/tentang',
        ]);
    }
}
