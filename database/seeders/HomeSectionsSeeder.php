<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeSectionsSeeder extends Seeder
{
    public function run()
    {
        DB::table('home_sections')->insert([
            [
                'name' => 'hero',
                'title' => 'Mari Kita Berbagi Dengan Sesama',
                'subtitle' => NULL,
                'description' => 'Salurkan dana dan donasi anda kepada kami, insyaallah kami akan menyalurkan dan donasi anda menjadi shodaqoh jariyah yang terus bermanfaat.',
                'image' => 'hero.jpg',
                'button_text' => 'Donasi Sekarang',
                'button_link' => '/donasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'tentang',
                'title' => 'Tentang Kami',
                'subtitle' => 'YAYASAN YATIM PIATU DAN ANAK DHUAFA DARUL IHSAN',
                'description' => 'Yayasan Yatim Piatu dan Anak Dhuafa Darul Ihsan adalah salah satu lembaga sosial anak di Jepara yang mengasuh anak-anak yatim, piatu, fakir miskin, dan dhuafa. Semangat utama dari yayasan ini adalah untuk meringankan beban serta memberikan santunan agar mereka bisa mendapatkan kehidupan yang lebih baik.',
                'image' => 'tentang.jpg',
                'button_text' => 'Baca Selengkapnya',
                'button_link' => '/tentang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'kegiatan',
                'title' => 'Kegiatan Anak',
                'subtitle' => 'KEGIATAN ANAK DARUL IHSAN',
                'description' => 'Anak-anak Darul Ihsan aktif dalam berbagai kegiatan.',
                'image' => NULL,
                'button_text' => NULL,
                'button_link' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'donasi',
                'title' => 'Program Donasi',
                'subtitle' => 'DARUL IHSAN DONATION PROGRAM',
                'description' => 'DARUL IHSAN DONATION PROGRAM',
                'image' => 'program-donasi.jpg',
                'button_text' => NULL,
                'button_link' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
