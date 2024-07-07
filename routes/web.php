<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('account/register', [AccountController::class, 'register'])->name('account.regsiter');
Route::post('account/register', [AccountController::class, 'proccessRegister'])->name('account.processRegister');
