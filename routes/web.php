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
    return view('frontend');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/latihanlayout', function () {
    return view('latihanlayout');
});

Route::get('/linktree', function () {
    return view('linktree'); 
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/welcome.blade', function () {
    return view('welcome.blade'); 
});

Route::get('/biodata.blade', function () {
    return view('biodata.blade'); 
});

Route::get('/dosen', [Link::class,'index']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);


Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);