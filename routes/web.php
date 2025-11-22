<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
/*
* GUEST CONTROLLERS
*/
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\Guest\BeritaGuestController;
use App\Http\Controllers\Guest\KabinetGuestController;
use App\Http\Controllers\Guest\KontakGuestController;
use App\Http\Controllers\Guest\PartnershipGuestController;
use App\Http\Controllers\Guest\KegiatanGuestController;
use App\Http\Controllers\Guest\StrukturalGuestController;

/*
* GUEST ROUTES
*/

Route::get('/', [GuestController::class, 'index'])->name('guest.index');
Route::get('/berita', [BeritaGuestController::class, 'index'])->name('guest.berita.index');
Route::get('/kabinet', [KabinetGuestController::class, 'index'])->name('guest.kabinet.index');
Route::get('/kontak', [KontakGuestController::class, 'index'])->name('guest.kontak.index');
Route::get('/partnership', [PartnershipGuestController::class, 'index'])->name('guest.partnership.index');
Route::get('/kegiatan', [KegiatanGuestController::class, 'index'])->name('guest.kegiatan.index');
Route::get('/struktural', [StrukturalGuestController::class, 'index'])->name('guest.struktural.index');

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
