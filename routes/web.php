<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// all pages view routes
Route::get('/', [FileController::class,'home'])->name('home');
Route::get('/sports', [FileController::class,'sports'])->name('sports');
Route::get('/entertainment', [FileController::class,'entertainment'])->name('entertainment');
Route::get('/science-health', [FileController::class,'science'])->name('science');
Route::get('/business', [FileController::class,'business'])->name('business');
Route::get('/technology', [FileController::class,'technology'])->name('technology');
Route::get('/travel', [FileController::class,'travel'])->name('travel');
