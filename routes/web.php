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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'show'])->name('home');

use App\Http\Controllers\LibraryController;

Route::get('/library', [LibraryController::class, 'show'])->name('library');

use App\Http\Controllers\SongController;

Route::get('/songs', [SongController::class, 'show'])->name('songs');