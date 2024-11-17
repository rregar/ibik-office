<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
};
use App\Http\Controllers\Modules\Masters\{
    UserController,
};
use App\Http\Controllers\Modules\Inbox\{
    InboxController,
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
    return view('landing-page');
});


Route::middleware(['guest'])->group(function () {
    Route::prefix('/inbox')->name('inbox.')->group(function () {
        Route::get('/create', [InboxController::class, 'create'])->name('create');
        Route::post('/get-prodi-based-faculty', [InboxController::class, 'getProdiBasedFaculty'])->name('get-prodi-based-faculty');
        Route::post('/store', [InboxController::class, 'store'])->name('store');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/master')->name('master.')->group(function () {
        Route::prefix('/user')->name('user.')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::get('/get-cms-table', [UserController::class, 'getCmsTable'])->name('get-cms-table');
        });
    });
    Route::prefix('/inbox')->name('inbox.')->group(function () {
        Route::get('/', [InboxController::class, 'index'])->name('index');
        Route::get('/get-cms-table', [InboxController::class, 'getCmsTable'])->name('get-cms-table');
    });
});

require __DIR__.'/auth.php';