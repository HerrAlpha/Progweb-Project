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
});
Route::get('/templates', function () {
    return view('template');
});
Route::get('/web', function () {
    return view('web');
});
Route::get('/app', function () {
    return view('app');
});
Route::get('/about', function () {
    return view('about');
});
Route::fallback(function () {
    return view('error');
});