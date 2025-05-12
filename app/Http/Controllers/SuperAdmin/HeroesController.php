<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    public function index()
    {
        $hero = Hero::first(); // Ambil satu data pertama
        return view('superadmin.heroes.index', compact('hero'));
    }

    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        return view('superadmin.heroes.edit', compact('hero'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $hero = Hero::findOrFail($id);
        $hero->title = $request->title;
        $hero->subtitle = $request->subtitle;
        $hero->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('heroes', 'public');
            $hero->image = $imagePath;
        }

        $hero->save();

        return redirect()->route('superadmin.heroes.index')->with('success', 'Data berhasil diperbarui!');
    }
}
