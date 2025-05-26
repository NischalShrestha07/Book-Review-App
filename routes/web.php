<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });




Route::group(['middleware' => 'guest'], function () {
    Route::get('register', [AccountController::class, 'register'])->name('account.register');
    //removed 'account/register' to 'register'
    Route::post('register', [AccountController::class, 'processRegister'])->name('account.processRegister');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/login', [AccountController::class, 'login'])->name('account.login');

    Route::post('login', [AccountController::class, 'authenticate'])->name('account.authenticate');
});
Route::group(['middleware' => 'auth'], function () {

    Route::get('profile', [AccountController::class, 'profile'])->name('account.profile');
    Route::get('logout', [AccountController::class, 'logout'])->name('account.logout');
    Route::post('updateProfile', [AccountController::class, 'updateProfile'])->name('account.updateProfile');
    Route::post('books', [AccountController::class, 'index'])->name('books.index');



    //books route
    Route::get('books', [BookController::class, 'books'])->name('books.list');
    Route::get('reviews', [BookController::class, 'reviews'])->name('reviews');
    Route::get('my-reviews', [BookController::class, 'myReviews'])->name('myReviews');
    Route::get('change-password', [BookController::class, 'changePassword'])->name('changePassword');
    // Route::get('books', [BookController::class, 'books'])->name('books.list');
});
