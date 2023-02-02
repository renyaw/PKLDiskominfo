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
use App\Http\Controllers\dashMasyController;
use App\Http\Controllers\formDomController;
use App\Http\Controllers\formKredController;
use App\Http\Controllers\formSKTM1Controller;
use App\Http\Controllers\formSKTM2Controller;
use App\Http\Controllers\kumpulanBerkasController;
use App\Http\Controllers\riwayatController;
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


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/signin', function () {
//     return view('signin');
// });

// Route::get('/', function () {https://drive.google.com/drive/u/0/folders/1o9fY_8y0e5w20aezfzSjXKbyqBQJW1dC
//     return view('guest/berandaguest');
// });

//All
Route::resource('daftar', buatAkunController::class);
Route::resource('login', loginController::class);
//Guest
Route::resource('/', berandaGuestController::class);

//Kecamatan
Route::resource('dashKec', dashKecController::class);
Route::resource('dashKec2', dashKec2Controller::class);

//Kelurahan
Route::resource('antreanDom', antreanDomController::class);
Route::resource('antreanKred', antreanKredController::class);
Route::resource('antreanSKTM', antreanSKTMController::class);
Route::resource('dashKel', dashKelController::class);
Route::resource('verifDom', verifDomController::class);
Route::resource('verifKred', verifKredController::class);
Route::resource('verifSKTM', verifSKTMController::class);

//Masyarakat
Route::resource('dashMasy', dashMasyController::class);
Route::resource('editProfile', editProfileController::class);
Route::resource('formDom', formDomController::class);
Route::resource('formKred', formKredController::class);
Route::resource('formSKTM1', formSKTM1Controller::class);
Route::resource('formSKTM2', formSKTM2Controller::class);
Route::resource('kumpulanBerkas', kumpulanBerkasController::class);
Route::resource('profile', profileController::class);
Route::resource('riwayat', riwayatController::class);
Route::resource('riwayatSKTM', riwayatSKTMController::class);
Route::resource('riwayatDom', riwayatDomController::class);
Route::resource('riwayatKred', riwayatKredController::class);




