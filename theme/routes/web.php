<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function(){
    return view('Registration');
})->name('register');

Route::fallback(function () {
    return view('Erro');
});
