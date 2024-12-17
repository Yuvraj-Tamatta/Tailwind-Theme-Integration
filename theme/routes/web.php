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

Route::get('/admin/user', function(){
    return view('user');
});

Route::get('/admin/userprofile', function(){
    return view('userprofile');
});

Route::get('/admin/permission', function(){
    return view('permission');
});

Route::get('/admin/role', function(){
    return view('role');
});

Route::get('/admin/menu', function(){
    return view('menu');
});

