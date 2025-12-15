<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/page4', [ProdukController::class, 'showCollection'])->name('page4');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD USERS
    Route::resource('/users', UserController::class);

    // Halaman lain
    Route::get('/page1', function () {
        return view('page1');
    })->name('page1');

    Route::get('/page2', function () {
        return view('page2');
    })->name('page2');

    Route::get('/page3', function () {
        return view('page3');
    })->name('page3');

    Route::get('/page5', function () {
        return view('page5');
    })->name('page5');
});

Route::resource('produk', ProdukController::class);
