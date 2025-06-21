<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

// Halaman awal menampilkan ucapan selamat datang
Route::get('/', function () {
    return view('welcome');
});

// Resource route untuk fitur CRUD
Route::resource('items', ItemController::class);
