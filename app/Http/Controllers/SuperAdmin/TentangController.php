<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $tentangs = Tentang::first();
        return view('superadmin.tentang.index', compact('tentangs'));
    }

    public function edit($id)
    {
        $tentangs = Tentang::findOrFail($id);
        return view('superadmin.tentang.edit', compact('tentang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $tentangs = Tentang::findOrFail($id);
        $tentangs->title = $request->title;
        $tentangs->subtitle = $request->subtitle;
        $tentangs->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('tentang', 'public');
            $tentangs->image = $imagePath;
        }

        $tentangs->save();

        return redirect()->route('superadmin.tentang.index')->with('success', 'Data berhasil diperbarui!');
    }
}
