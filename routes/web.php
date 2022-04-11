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

Route::view('/web/categories/all','all');
Route::view('/web/categories/technology','technology');
Route::view('/web/categories/business','business');
Route::view('/web/categories/entertainment','entertainment');
Route::view('/web/categories/health','health');
Route::view('/web/categories/science','science');
Route::view('/web/categories/sports','sports');
Route::view('/web/categories/travel','travel');
Route::view('/web/categories/gaming','gaming');
Route::view('/web/categories/music','music');
Route::view('/web/categories/finance','finance');
Route::view('/web/categories/food','food');

//=====X====== WEB =======X========//

Route::get('/app',[CollectionController::class,'appCategories'])->name('app');
Route::get('/about', [CollectionController::class,'about'])->name('about');
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::get('/signup', [CollectionController::class,'signup'])->name('signup');
Route::fallback([CollectionController::class,'error']);
