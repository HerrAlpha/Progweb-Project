<?php

use App\Http\Controllers\CollectionController;
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

Route::get('/',[CollectionController::class,'home'])->name('home');
Route::get('/templates', [CollectionController::class,'templates'])->name('template');
Route::get('/news', [CollectionController::class,'news'])->name('news');
//============== WEB ==============//
Route::get('/web', [CollectionController::class,'web'])->name('web');

// Route::view('/web/technology')->name('technology');
// Route::view('/web/art&design')->name('art&design');
// Route::view('/web/food&restaurant')->name('food&restaurant');
// Route::view('/web/education')->name('education');
// Route::view('/web/industrial')->name('industrial');
// Route::view('/web/fashion&beauty')->name('fashion&beauty');
// Route::view('/web/business&law')->name('business&law');
// Route::view('/web/sport')->name('sport');
// Route::view('/web/travel&hotels')->name('travel&hotels');
// Route::view('/web/portfolio')->name('portfolio');

//=====X====== WEB =======X========//

Route::get('/app',[CollectionController::class,'app'])->name('app');
Route::get('/about', [CollectionController::class,'about'])->name('about');
Route::fallback([CollectionController::class,'error']);
