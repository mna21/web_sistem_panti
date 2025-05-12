<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSection;
use App\Models\HomeSectionItem;

class HomeSectionController extends Controller
{
    public function index()
    {
        $homeSections = HomeSection::all(); // Ambil semua data section dan itemnya
        return view('superadmin.home-sections.index', compact('homeSections'));
    }
}