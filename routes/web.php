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

Route::view('/web/all');
Route::view('/web/technology');
Route::view('/web/business');
Route::view('/web/entertainment');
Route::view('/web/health');
Route::view('/web/science');
Route::view('/web/sports');
Route::view('/web/travel');
Route::view('/web/gaming');
Route::view('/web/music');
Route::view('/web/finance');
Route::view('/web/food');

//=====X====== WEB =======X========//

Route::get('/app',[CollectionController::class,'app'])->name('app');
Route::get('/about', [CollectionController::class,'about'])->name('about');
Route::fallback([CollectionController::class,'error']);
