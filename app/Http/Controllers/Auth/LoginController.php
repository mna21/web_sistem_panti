<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required'
        ]);
    
        // Validasi ReCaptcha
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response')
        ]);

        if (!$response->successful() || !$response->json('success')) {
            return back()->withErrors(['g-recaptcha-response' => 'Verifikasi ReCaptcha gagal. Silakan coba lagi.']);
        }

        // Cek kredensial login
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            $user = Auth::user();

            // Cek apakah akun aktif
            if ($user->is_active != 1) {
                Auth::logout();
                return back()->withErrors(['email' => 'Akun Anda tidak aktif.']);
            }

            // ✅ Set notifikasi flash session
            session()->flash('login_success', 'Selamat datang, ' . $user->name . '!');

            // ✅ Pastikan session `login_success` dikirim saat redirect
            return match ($user->role) {
                'superadmin' => redirect()->route('dashboard.superadmin')->with('login_success', 'Selamat datang, ' . $user->name . '!'),
                'admin' => redirect()->route('dashboard.admin')->with('login_success', 'Selamat datang, ' . $user->name . '!'),
                //'donatur' => redirect()->route('dashboard.donatur')->with('login_success', 'Selamat datang, ' . $user->name . '!'),
                //'anak' => redirect()->route('dashboard.anak')->with('login_success', 'Selamat datang, ' . $user->name . '!'),
                default => abort(403, 'Unauthorized'),
            };
        }

        return back()
        ->withErrors(['email' => 'Email atau password anda salah!'])
        ->withInput()
        ->with('toast_error', 'Email atau password anda salah!');
    
    }

    public function logout(Request $request)
    {
        Auth::logout();
        session()->flash('toast_success', 'Anda Telah Berhasil Keluar');
        return redirect()->route('login'); // Ganti dengan route login kamu
    }
}
