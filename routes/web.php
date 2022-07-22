<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\SlotController;


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

Route::get('/', function () {
    return view('welcome');
});

//route basic
Route::get('/belajar', function () {
    echo '<center>';
    echo '<u><h1>HALO SEMUANYA</h1><br>';
    echo '<h1>Kami sedang belajar laravel</h1><br></u>';
    echo '</center>';
});

//route basic lanjut ke view
Route ::get('home', function (){
    return view('home');
});

Route ::get('index', function (){
    return view('pages.index');
});

Route ::get('about', function (){
    return view('pages.about');
});

Route ::get('beranda', function (){
    return view('pages.beranda');
});

//route Parameter
Route ::get('/biodata/{nama}/{umur}/{alamat}/{jeniskelamin}/{kelas}/{hobby}', function($a,$b,$c,$d,$e,$f){
    return view('pages.biodata', compact('a','b','c','d','e','f'));
});

//route optional parameter
Route ::get('/pesanan/{makanan?}', function($a = "Pesanan Kosong"){
    return view('pages.pesanan', compact('a'));
});

Route ::get('/makanan/{makanan?}/{makanan2?}', function($a = "Pesanan tidak ada dalam daftar" , $b = "Pesanan tidak ada dalam daftar"){
    return view('pages.makanan', compact('a','b'));
});

use App\Http\Controllers\pengenalanController;

//passing data dari controller ke view
Route::get('/pengenalan',[App\Http\Controllers\pengenalanController::class, 'pengenalan']);

//passing data dinamis(route parameter) dari controller ke view
Route::get('/intro/{nama}/{alamat}/{umur}',[App\Http\Controllers\pengenalanController::class, 'intro']);

Route::get('/siswa',[App\Http\Controllers\pengenalanController::class, 'siswa']);

use App\Http\Controllers\LatihanController;
Route::get('/menu',[App\Http\Controllers\LatihanController::class, 'menu']);

Route::get('/dosen',[App\Http\Controllers\LatihanController::class, 'dosen']);

Route::get('/tv',[App\Http\Controllers\LatihanController::class, 'tv']);

Route::get('/post',[PostController::class, 'index']);

Route::get('/siswa',[SiswaController::class, 'siswa']);

Route::get('/peserta',[PesertaController::class, 'peserta']);

Route::get('/mapel',[MapelController::class, 'mapel']);

Route::get('/hotel',[HotelController::class, 'hotel']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('slot', SlotController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
