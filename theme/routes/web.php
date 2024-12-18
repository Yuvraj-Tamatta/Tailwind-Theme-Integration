<?php

use App\Http\Controllers\menuController;
use App\Http\Controllers\MenuController as ControllersMenuController;
use App\Http\Controllers\permissionController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ControllersMenuController::class, 'index']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('Registration');
})->name('register');

Route::fallback(function () {
    return view('Erro');
});


Route::get('/admin/role', [roleController::class, 'index']);


Route::get('/admin/menu', [menuController::class, 'index'])->name('menu.show');
Route::post('admin/menu/store', [menuController::class, 'create'])->name('menu.store');


Route::get('/admin/user', [UserController::class, 'index']);

Route::get('/admin/userprofile', [userProfileController::class, 'index']);

Route::get('/admin/permission', [permissionController::class, 'index']);



