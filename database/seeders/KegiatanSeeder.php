<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kegiatans')->insert([
            [
                'title' => "Sholat Berjama'ah",
                'deskripsi' => "Melatih persatuan terutama dalam hal beragama.",
                'image' => 'kegiatan/sholat.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Sekolah Formal",
                'deskripsi' => "Mengembangkan kemampuan dan kepribadian mereka lewat pendidikan formal.",
                'image' => 'kegiatan/sekolah.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Bermain",
                'deskripsi' => "Kebahagiaan di waktu kecil harus ditanamkan dalam hati agar kelak mereka tahu pentingnya membahagiakan orang lain.",
                'image' => 'kegiatan/bermain.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Pendidikan Agama",
                'deskripsi' => "Pendidikan agama sangat diperlukan untuk membentun insan yang berakhlaqul karimah",
                'image' => 'kegiatan/pendidikan_agama.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Belajar Mandiri",
                'deskripsi' => "Kemandirian sangat diperlukan agar mereka dapat berjuang dalam hidup",
                'image' => 'kegiatan/belajar.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

