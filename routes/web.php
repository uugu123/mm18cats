<?php

use App\Http\Controllers\CatController;
use \App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|z
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function() {
    Route::get('/home', function() {
        return view('home');
    })->name('home');

    Route::get('/user/profile', function() {
        return view('profile');
    })->name('profile');
});
