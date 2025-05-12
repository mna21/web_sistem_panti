<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'superadmin') {
            return redirect()->route('dashboard.superadmin');
        } elseif ($user->role === 'admin') {
            return redirect()->route('dashboard.admin');
        } elseif ($user->role === 'donatur') {
            return redirect()->route('dashboard.donatur');
        }

        abort(403, 'Unauthorized');
    }

    public function superadmin()
    {
        return view('superadmin.dashboard');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }

    public function donatur()
    {
        return view('donatur.dashboard');
    }
}
