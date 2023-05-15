<?php

use Illuminate\Support\Facades\Route;
//All
use App\Http\Controllers\buatAkunController;
use App\Http\Controllers\loginController;
//guest
use App\Http\Controllers\berandaGuestController;
//Masyarakat
use App\Http\Controllers\profileController;
use App\Http\Controllers\editProfileController;
use App\Http\Controllers\editProfile2Controller;
use App\Http\Controllers\dashMasyController;
use App\Http\Controllers\formDomController;
use App\Http\Controllers\formKredController;
use App\Http\Controllers\formSKTM1Controller;
use App\Http\Controllers\formSKTM2Controller;
use App\Http\Controllers\kumpulanBerkasController;
use App\Http\Controllers\riwayatController;
use App\Http\Controllers\riwayat2Controller;
use App\Http\Controllers\riwayatDomController;
use App\Http\Controllers\riwayatKredController;
use App\Http\Controllers\riwayatSKTMController;
//Kelurahan
use App\Http\Controllers\dashKelController;
use App\Http\Controllers\antreanDomController;
use App\Http\Controllers\antreanKredController;
use App\Http\Controllers\antreanSKTMController;
use App\Http\Controllers\verifKredController;
use App\Http\Controllers\verifSKTMController;
use App\Http\Controllers\verifDomController;
//Kecamatan
use App\Http\Controllers\dashKecController;
use App\Http\Controllers\dashKec2Controller;

use App\Http\Middleware\IsKelurahan;
use App\Http\Middleware\IsKecamatan;
use App\Http\Middleware\IsMasyarakat;
//All
Route::resource('daftar', buatAkunController::class);
// Route::resource('login', loginController::class, [
//     'name' => 'login',
// ])->middleware('guest');
// Route::resource('login', loginController::class)->name('login')->middleware('guest');
//Guest
Route::resource('/', berandaGuestController::class)->middleware('guest');

//Kecamatan
Route::resource('dashKec', dashKecController::class)->middleware(['auth', 'IsKecamatan']);
Route::resource('dashKec2', dashKec2Controller::class)->middleware(['auth','IsKecamatan']);

//Kelurahan
Route::resource('antreanDom', antreanDomController::class)->middleware(['auth', 'IsKelurahan']);
Route::resource('antreanKred', antreanKredController::class)->middleware(['auth', 'IsKelurahan']);
Route::resource('antreanSKTM', antreanSKTMController::class)->middleware(['auth', 'IsKelurahan']);
Route::resource('dashKel', dashKelController::class)->middleware(['auth', 'IsKelurahan']);

//DOMISILI
Route::resource('verifDom', verifDomController::class)->middleware(['auth', 'IsKelurahan']);
Route::get('verifDom/diterima/{id}', [verifDomController::class, 'diterima'])->middleware(['auth', 'IsKelurahan']);
Route::get('verifDom/ditolak/{id}', [verifDomController::class, 'ditolak'])->middleware(['auth', 'IsKelurahan']);
Route::get('verifDom/kembali/{id}', [verifDomController::class, 'kembali'])->middleware(['auth', 'IsKelurahan']);

//KREDIT
Route::resource('verifKred', verifKredController::class)->middleware(['auth', 'IsKelurahan']);
Route::get('verifKred/diterima/{id}', [verifKredController::class, 'diterima'])->middleware(['auth', 'IsKelurahan']);
Route::get('verifKred/ditolak/{id}', [verifKredController::class, 'ditolak'])->middleware(['auth', 'IsKelurahan']);
Route::get('verifKred/kembali/{id}', [verifKredController::class, 'kembali'])->middleware(['auth', 'IsKelurahan']);

//SKTM
Route::resource('verifSKTM', verifSKTMController::class)->middleware(['auth', 'IsKelurahan']);
Route::get('verifSKTM/diterima/{id}', [verifSKTMController::class, 'diterima'])->middleware(['auth', 'IsKelurahan']);
Route::get('verifSKTM/ditolak/{id}', [verifSKTMontroller::class, 'ditolak'])->middleware(['auth', 'IsKelurahan']);
Route::get('verifSKTM/kembali/{id}', [verifSKTMController::class, 'kembali'])->middleware(['auth', 'IsKelurahan']);

//Masyarakat
Route::resource('dashMasy', dashMasyController::class)->middleware(['auth', 'IsMasyarakat']);
Route::resource('editProfile', editProfileController::class)->middleware(['auth', 'IsMasyarakat']);
Route::resource('editProfile2', editProfile2Controller::class)->middleware(['auth', 'IsMasyarakat']);
Route::resource('formDom', formDomController::class)->middleware(['auth', 'IsMasyarakat']);
Route::resource('formKred', formKredController::class)->middleware(['auth', 'IsMasyarakat']);
Route::resource('formSKTM1', formSKTM1Controller::class)->middleware(['auth', 'IsMasyarakat']);
Route::resource('formSKTM2', formSKTM2Controller::class)->middleware(['auth', 'IsMasyarakat']);
Route::resource('kumpulanBerkas', kumpulanBerkasController::class);
Route::resource('profile', profileController::class)->middleware('auth');
Route::resource('riwayat', riwayatController::class)->middleware(['auth', 'IsMasyarakat']);
Route::resource('riwayat2', riwayat2Controller::class)->middleware(['auth', 'IsMasyarakat']);
Route::resource('riwayatSKTM', riwayatSKTMController::class)->middleware(['auth', 'IsMasyarakat']);
Route::resource('riwayatDom', riwayatDomController::class)->middleware(['auth', 'IsMasyarakat']);
Route::resource('riwayatKred', riwayatKredController::class)->middleware(['auth', 'IsMasyarakat']);

// Ajax
Route::post('/getKelurahan', [buatAkunController::class, 'getKelurahan'])->name('getKelurahan');
Route::post('/getKelurahan1', [buatAkunController::class, 'getKelurahan1'])->name('getKelurahan1');



//Input From User
// Route::post('/daftar', [buatAkunController::class, 'store']);
// Route::post('/formDom', [formDomController::class, 'store']);

//Login
Route::get('login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [loginController::class, 'store']);
Route::post('logout', [loginController::class, 'logout']);

//EditProfile
//Route::get('edit', [editProfileController::class, 'edit'])->name('profile.edit');
//Route::put('update', [editProfileController::class, 'update'])->name('profile.update');

// Route::resource('TryFormDom', TryFormDomController::class)->middleware(['auth', 'IsMasyarakat']);
