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
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/martikulasi', function () {
    return view('martikulasi', [
        'title' => 'Martikulasi',
    ]);
});

Route::get('/sejarah', function () {
    return view('sejarah', [
        'title' => 'Sejarah',
    ]);
});

Route::get('/kantin', function () {
    return view('kantin', [
        'title' => 'Kantin',
    ]);
});

Route::get('/perpustakaan', function () {
    return view('perpustakaan', [
        'title' => 'Perpustakaan',
    ]);
});

