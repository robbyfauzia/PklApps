<?php

use Illuminate\Support\Facades\Route;

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

Route ::get('/makanan/{makanan?}', function($a = "Pesanan tidak ada dalam daftar"){
    return view('pages.makanan', compact('a'));
});
