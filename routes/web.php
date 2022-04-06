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

Route::view('/web/categories/all');
Route::view('/web/categories/technology');
Route::view('/web/categories/business');
Route::view('/web/categories/entertainment');
Route::view('/web/categories/health');
Route::view('/web/categories/science');
Route::view('/web/categories/sports');
Route::view('/web/categories/travel');
Route::view('/web/categories/gaming');
Route::view('/web/categories/music');
Route::view('/web/categories/finance');
Route::view('/web/categories/food');

//=====X====== WEB =======X========//

Route::get('/app',[CollectionController::class,'app'])->name('app');
Route::get('/about', [CollectionController::class,'about'])->name('about');
Route::fallback([CollectionController::class,'error']);
