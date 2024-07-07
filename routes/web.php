<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('account/register', [AccountController::class, 'register'])->name('account.register');
// Route::post('account/register', [AccountController::class, 'processRegister'])->name('account.processRegister');
// Route::get('account/login', [AccountController::class, 'login'])->name('account.login');

// Route::post('account/login', [AccountController::class, 'authenticate'])->name('account.authenticate');

// Route::get('account/profile', [AccountController::class, 'profile'])->name('account.profile');

//here prefix is used which means we dont have to add the same path again and again
Route::group(['prefix' => 'account'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('register', [AccountController::class, 'register'])->name('account.register');
        //removed 'account/register' to 'register' 
        Route::post('register', [AccountController::class, 'processRegister'])->name('account.processRegister');

        Route::get('login', [AccountController::class, 'login'])->name('account.login');

        Route::post('login', [AccountController::class, 'authenticate'])->name('account.authenticate');
    });
    Route::group(['middleware' => 'auth'], function () {

        Route::get('profile', [AccountController::class, 'profile'])->name('account.profile');
        Route::get('logout', [AccountController::class, 'logout'])->name('account.logout');
    });
});
