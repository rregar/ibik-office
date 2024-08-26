<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
};
use App\Http\Controllers\Modules\Masters\{
    UserController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/sign-in');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/master')->name('master.')->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('user');
    });
});

require __DIR__.'/auth.php';