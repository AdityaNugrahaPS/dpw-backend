<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaTamuController;

Route::resource('nama-tamu', NamaTamuController::class);

// Ganti dari /{nama} ke /tamu/{nama}
Route::get('/opening/{nama}', [NamaTamuController::class, 'showByName'])->name('nama-tamu.showByName');

// Intro Page Routes
Route::get('/', function () {
    return view('intro');
});


