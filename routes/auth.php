<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\AuthController;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here you can register routes for authentication such as login, logout,
| and other related actions. These routes are loaded by the RouteServiceProvider
| within a group which contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/sign-in', [AuthController::class, 'index'])->name('sign-in');
    Route::post('/sign-in', [AuthController::class, 'signIn'])->name('sign-in.post');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/sign-out', [AuthController::class, 'signOut'])->name('sign-out');
});