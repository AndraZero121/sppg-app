<?php

use App\Http\Controllers\Admin\ComplaintController as AdminComplaintController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\SppgTeamController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/menu', [PublicController::class, 'menuHistory'])->name('menus.history');
Route::get('/menu/{menu}', [PublicController::class, 'menuShow'])->name('menus.show');
Route::get('/tim-sppg', [PublicController::class, 'teams'])->name('teams.index');
Route::get('/pengaduan', [PublicController::class, 'complaintForm'])->name('complaints.create');
Route::post('/pengaduan', [PublicController::class, 'complaintStore'])->name('complaints.store');
Route::get('/aduan', [PublicController::class, 'complaintsIndex'])->name('complaints.index');
Route::get('/kontak', [PublicController::class, 'contact'])->name('contact');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::view('/', 'admin.dashboard')->name('dashboard');
        Route::resource('schools', SchoolController::class)->except(['show']);
        Route::resource('sppg-teams', SppgTeamController::class)->except(['show']);
        Route::resource('menus', MenuController::class)->except(['show']);
        Route::resource('complaints', AdminComplaintController::class)->except(['show', 'create', 'store']);
    });
