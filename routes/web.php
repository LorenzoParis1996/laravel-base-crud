<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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

Route::get('/', [AnimalController::class, 'index'])->name('pages.index');
Route::post('/', [AnimalController::class, 'store'])->name('pages.store');
Route::get('/create', [AnimalController::class, 'create'])->name('pages.create');
Route::get('/show/{animal}', [AnimalController::class, 'show'])->name('pages.show');