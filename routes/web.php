<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/templates', function () {
    return view('template');
})->name('template');
Route::get('/web', function () {
    return view('web');
})->name('web');
Route::get('/app', function () {
    return view('app');
})->name('app');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::fallback(function () {
    return view('error');
});
