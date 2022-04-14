<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardTemplateController;
use App\Http\Controllers\LogoutController;

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

Route::get('/',[CollectionController::class,'home'])->name('home');//->middleware('guest');
Route::get('/templates', [CollectionController::class,'templates'])->name('template');//->middleware('guest');
Route::get('/news', [CollectionController::class,'news'])->name('news')->middleware('guest');
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

Route::get('/app',[CollectionController::class,'appCategories'])->name('app')->middleware('guest');
Route::get('/about', [CollectionController::class,'about'])->name('about')->middleware('guest');
Route::fallback([CollectionController::class,'error']);

//============== DASHBOARD==============//
// Route::get('/dashboard/{user?}',[DashboardController::class,'dash'])->name('dashboard')->middleware('auth');
Route::resource('/dashboard',DashboardController::class)->middleware('auth');
//============== DASHBOARD.TEMPLATE==============//
// Route::get('/dashboard/template',function(){
//     return view('dashboard.template');
// })->name('dashboard.template')->middleware('auth');
Route::get('/dashboard/template',[DashboardTemplateController::class,'index'])->middleware('auth');

Route::group(['middleware'=>['guest']],function(){

    //============== REGISTER ==============//
    Route::get('/signup', function(){
        return view('register');
    })->name('signup');
    Route::post('/signup', [RegisController::class,'signup'])->name('signup');

    //============== LOGIN ==============//
    Route::post('/login',[LoginController::class,'login']);
    Route::get('/login',function(){
        return view('login');
    })->name('login');

});

//============== LOGOUT ==============//
Route::post('/logout',[LogoutController::class,'logout']);
