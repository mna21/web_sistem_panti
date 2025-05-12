<?php

namespace App\Http\Controllers\SuperAdmin;;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfilPanti;

class ProfilPantiController extends Controller
{
    public function index()
    {
        $profil = ProfilPanti::first();
        //dd($profil);
        return view('superadmin.profil.index', compact('profil')); 
        //return view('superadmin.profil', );
       
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_panti' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'email' => 'required|email',
            'jam_buka' => 'required',
        ]);

        $profil = ProfilPanti::findOrFail($id);
        $profil->update($request->all());

        return redirect()->route('superadmin.profil')->with('toast_success', 'Profil berhasil diperbarui!');
    }
}
