<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    public function run()
    {
        Hero::create([
            'category' => 'utama',
            'title' => 'Selamat Datang',
            'description' => 'Bantu anak-anak untuk mendapatkan masa depan yang lebih baik.',
            'image' => 'utama.jpg',
            'button_text' => 'Donasi Sekarang',
            'button_link' => '/donasi',
        ]);
        
        Hero::create([
            'category' => 'donasi',
            'title' => 'Program Donasi',
            'description' => null, // Sekarang bisa null
            'image' => 'program-donasi.jpg',
        ]);
        
        Hero::create([
            'category' => 'kegiatan',
            'title' => 'Kegiatan Anak Darul Ihsan',
            'description' => null,
            'image' => null,
        ]);
        
    }
}
