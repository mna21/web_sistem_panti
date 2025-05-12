<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Tentang;
use App\Models\Kegiatan;
use App\Models\ProgramDonasi;
use App\Models\ProfilPanti;

class HomeController extends Controller
{
    public function index()
    {
        $heroUtama = Hero::where('category', 'utama')->first(); // Hero utama
        $heroDonasi = Hero::where('category', 'donasi')->first(); // Hero donasi
        $heroKegiatan = Hero::where('category', 'kegiatan')->first(); // Hero kegiatan

        $tentangs = Tentang::first();
        $kegiatans = Kegiatan::all();
        $programs = ProgramDonasi::all();
        $profil = ProfilPanti::first();

        return view('home', compact(
            'heroUtama', 'heroDonasi', 'heroKegiatan', // Data heroes
            'tentangs', 'kegiatans', 'programs', 'profil' // Data lainnya
        ));
    }
}
