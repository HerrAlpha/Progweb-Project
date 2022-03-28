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

//============== WEB ==============//
Route::get('/web', function () {
    return view('web');
})->name('web');

Route::view('/web/technology')->name('technology');
Route::view('/web/art&design')->name('art&design');
Route::view('/web/food&restaurant')->name('food&restaurant');
Route::view('/web/education')->name('education');
Route::view('/web/industrial')->name('industrial');
Route::view('/web/fashion&beauty')->name('fashion&beauty');
Route::view('/web/business&law')->name('business&law');
Route::view('/web/sport')->name('sport');
Route::view('/web/travel&hotels')->name('travel&hotels');
Route::view('/web/portfolio')->name('portfolio');

//=====X====== WEB =======X========//

Route::get('/app', function () {
    return view('app');
})->name('app');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::fallback(function () {
    return view('error');
});
