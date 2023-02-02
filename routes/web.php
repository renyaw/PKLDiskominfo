<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kreditController;
use App\Http\Controllers\kredit2Controller;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\SKTMController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DomisiliController;
use App\Http\Controllers\EditDataController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\StatMasyController;


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
// All
Route::get('/signin', function () {
    return view('signin');
});

Route::get('/', function () {https://drive.google.com/drive/u/0/folders/1o9fY_8y0e5w20aezfzSjXKbyqBQJW1dC
    return view('guest/berandaguest');
});

Route::get('/signup', function () {
    return view('masyarakat/signup');
});

Route::get('/beranda', function () {
    return view('masyarakat/beranda');
});

Route::get('/sktm1', function () {
    return view('masyarakat/sktm1');
});

Route::get('/sktm2', function () {
    return view('masyarakat/sktm2');
});

Route::get('/dashboardpeg', function () {
    return view('kelurahan/dashboardpeg');
});

Route::get('/usaha', function () {
    return view('masyarakat/usaha');
});

Route::get('/domisili', function () {
    return view('masyarakat/domisili');
});

Route::get('/berkas', function () {
    return view('masyarakat/berkas');
});

Route::get('/verifkredit', [kreditController::class, 'index']);
Route::get('/verifsktm', [SKTMController::class, 'index']);
Route::get('/verifdom', [DomisiliController::class, 'index']);
Route::get('/status', [StatMasyController::class, 'index']);
Route::get('/datadiri', [EditDataController::class, 'index']);
Route::get('/signup', [MasyarakatController::class, 'index']);

Route::get('/berhasil', function () {
    return view('masyarakat/berhasil');
});

Route::get('/datadiri', function () {
    return view('masyarakat/datadiri');
});

Route::get('/kitas', function () {
    return view('masyarakat/kitas');
});

Route::get('/lain', function () {
    return view('masyarakat/lain');
});


Route::get('/lihatberkas', function () {
    return view('/kelurahan/lihatberkas');
});

//Route::get('/status', function () {
//    return view('masyarakat/status');
//});

Route::get('/lihatdomisili', function () {
    return view('kelurahan/lihatdomisili');
});

Route::get('/lihatsktm', function () {
    return view('kelurahan/lihatsktm');
});

Route::get('/lihatkitas', function () {
    return view('kelurahan/lihatkitas');
});

Route::get('/dashboardkec', function () {
    return view('kecamatan/dashboardkec');
});

Route::get('/dashboardkec2', function () {
    return view('kecamatan/dashboardkec2');
});


// navbar
Route::get('/navbaruser', function () {
    return view('navbar/navbaruser');
});

Route::get('/navbarguest', function () {
    return view('navbar/navbarguest');
});

Route::get('/navbaradmin', function () {
    return view('navbar/navbaradmin');
});

Route::get('/navbarkec', function () {
    return view('navbar/navbarkec');
});

Route::get('/dashboardmasy', function () {
    return view('masyarakat/dashboard');
});

Route::resource('akun', AkunController::class);

Route::resource('antreanSKTM', SKTMController::class);

Route::resource('antreandomisili', DomisiliController::class);

Route::resource('kelurahan', KelurahanController::class);

Route::resource('kecamatan', KecamatanController::class);

Route::resource('kredit', kredit2Controller::class);

