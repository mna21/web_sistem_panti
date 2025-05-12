<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramDonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program_donasis')->insert([
            [
                'title' => "Program Pendidikan",
                'description' => "Membantu biaya sekolah anak yatim dan dhuafa di SD, SMP, dan SMA.",
                'icon' => 'ri-line-chart-line',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Program Pembangunan",
                'description' => "Membangun gedung untuk operasional LKSA dan kegiatan anak-anak.",
                'icon' => 'ri-stack-line',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Program Orang Tua Asuh",
                'description' => "Membantu biaya kuliah anak yatim piatu dan dhuafa.",
                'icon' => 'ri-brush-4-line',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
