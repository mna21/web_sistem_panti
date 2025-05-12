<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperAdmin\ProfilPantiController;
use App\Http\Controllers\SuperAdmin\ChartController;
use App\Http\Controllers\Public\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home');




Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('dashboard/superadmin/charts')->name('superadmin.charts.')->group(function () {
    Route::get('/chartjs', [ChartController::class, 'chartjs'])->name('chartjs');
    Route::get('/flot', [ChartController::class, 'flot'])->name('flot');
    Route::get('/inline', [ChartController::class, 'inline'])->name('inline');
    Route::get('/uplot', [ChartController::class, 'uplot'])->name('uplot');
});

/*
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;


// Login & Logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('recaptcha')->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
*/

// Dashboard (Redirect sesuai role)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Role-Specific Routes
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/dashboard/superadmin', [DashboardController::class, 'superadmin'])->name('dashboard.superadmin');

    Route::get('/dashboard/superadmin/profil', [ProfilPantiController::class, 'index'])->name('superadmin.profil.index');
    Route::put('/dashboard/superadmin/profil/{id}', [ProfilPantiController::class, 'update'])->name('superadmin.profil.update');

    
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
});

Route::middleware(['auth', 'role:donatur'])->group(function () {
    Route::get('/dashboard/donatur', [DashboardController::class, 'donatur'])->name('dashboard.donatur');
});


use App\Http\Controllers\Superadmin\HeroesController;
use App\Http\Controllers\Superadmin\TentangController;

Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::prefix('dashboard/superadmin/beranda')->group(function () {
        
        // Routes untuk Heroes
        Route::prefix('heroes')->name('superadmin.heroes.')->group(function () {
            Route::get('/', [HeroesController::class, 'index'])->name('index');
            Route::get('/{id}/edit', [HeroesController::class, 'edit'])->name('edit');
            Route::put('/{id}', [HeroesController::class, 'update'])->name('update');
        });

        // Routes untuk Tentang
        Route::prefix('tentang')->name('superadmin.tentang.')->group(function () {
            Route::get('/', [TentangController::class, 'index'])->name('index');
            Route::get('/{id}/edit', [TentangController::class, 'edit'])->name('edit');
            Route::put('/{id}', [TentangController::class, 'update'])->name('update');
        });

    });
});


use App\Http\Controllers\Superadmin\HomeSectionController;

Route::prefix('superadmin')->group(function () {
    Route::get('/home-sections', [HomeSectionController::class, 'index'])->name('superadmin.home-sections.index');
});