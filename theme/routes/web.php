<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MenuController::class,'index']);
// Route::get('/menu', [MenuController::class,'showMenu']);


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('Registration');
})->name('register');

Route::fallback(function () {
    return view('Erro');
});

