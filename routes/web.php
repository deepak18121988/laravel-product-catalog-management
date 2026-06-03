<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class,'login'])
        ->name('login');

    Route::post('/login', [AuthController::class,'loginSubmit'])
        ->name('login.submit');

});

Route::middleware('auth')->group(function(){

    Route::get('/dashboard',
        [DashboardController::class,'index'])
        ->name('admin.dashboard');

    Route::get('/logout',
        [AuthController::class,'logout'])
        ->name('logout');

});

/**
 * Category Management Routes
 */
Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {

        Route::get(
            '/categories',
            [CategoryController::class, 'index']
        )->name('categories.index');

        Route::post(
            '/categories',
            [CategoryController::class, 'store']
        )->name('categories.store');

        Route::get(
            '/categories/{id}/edit',
            [CategoryController::class, 'edit']
        )->name('categories.edit');

        Route::put(
            '/categories/{id}',
            [CategoryController::class, 'update']
        )->name('categories.update');

        Route::delete(
            '/categories/{id}',
            [CategoryController::class, 'destroy']
        )->name('categories.destroy');
    });