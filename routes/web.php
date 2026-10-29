<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Beranda');
})->name('home');

Route::get('/beranda', function () {
    return view('Beranda');
})->name('beranda');

Route::redirect('/Beranda', '/beranda');