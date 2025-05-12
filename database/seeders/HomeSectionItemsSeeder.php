<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeSectionItemsSeeder extends Seeder
{
    public function run()
    {
        DB::table('home_section_items')->insert([
            [
                'home_section_id' => 3, // ID dari 'kegiatan'
                'title' => 'Sholat Berjama\'ah',
                'description' => 'Melatih persatuan terutama dalam hal beragama.',
                'image' => 'kegiatan/sholat.jpg',
                'button_text' => NULL,
                'button_link' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'home_section_id' => 3,
                'title' => 'Sekolah Formal',
                'description' => 'Mengembangkan kemampuan dan kepribadian.',
                'image' => 'kegiatan/sekolah.jpg',
                'button_text' => NULL,
                'button_link' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'home_section_id' => 3,
                'title' => 'Bermain',
                'description' => 'Kebahagiaan di waktu kecil harus ditanamkan.',
                'image' => 'kegiatan/bermain.jpg',
                'button_text' => NULL,
                'button_link' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'home_section_id' => 3,
                'title' => 'Bermain',
                'description' => 'Kebahagiaan di waktu kecil harus ditanamkan.',
                'image' => 'kegiatan/bermain.jpg',
                'button_text' => NULL,
                'button_link' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'home_section_id' => 3,
                'title' => 'Bermain',
                'description' => 'Kebahagiaan di waktu kecil harus ditanamkan.',
                'image' => 'kegiatan/bermain.jpg',
                'button_text' => NULL,
                'button_link' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'home_section_id' => 3,
                'title' => 'Bermain',
                'description' => 'Kebahagiaan di waktu kecil harus ditanamkan.',
                'image' => 'kegiatan/bermain.jpg',
                'button_text' => NULL,
                'button_link' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'home_section_id' => 4, // ID dari 'donasi'
                'title' => 'Program Pendidikan',
                'description' => 'Program pembiayaan sekolah untuk anak yatim.',
                'image' => 'program/pendidikan.jpg',
                'button_text' => NULL,
                'button_link' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'home_section_id' => 4,
                'title' => 'Program Orang Tua Asuh',
                'description' => 'Bantuan biaya kuliah bagi anak yatim.',
                'image' => 'program/orangtua.jpg',
                'button_text' => NULL,
                'button_link' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'home_section_id' => 4,
                'title' => 'Program Orang Tua Asuh',
                'description' => 'Bantuan biaya kuliah bagi anak yatim.',
                'image' => 'program/orangtua.jpg',
                'button_text' => NULL,
                'button_link' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
