<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardTemplateController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WebController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


Route::get('/',[CollectionController::class,'home'])->name('home');//->middleware('guest');
Route::get('/templates', [CollectionController::class,'templates'])->name('template');//->middleware('guest');
Route::get('/news', [CollectionController::class,'news'])->name('news');

//============== WEB ==============//
Route::get('/web', [CollectionController::class,'web'])->name('web');
Route::get('/web/{web:title}',[WebController::class,'show'])->name('web.show');
// Route::resource('/web',WebController::class);
Route::get('/web/detail/{detail}',[WebController::class,'detail']);

//=========== APP===============//
Route::get('/app',[CollectionController::class,'apps'])->name('app'); //->middleware('guest');

//=========== ABOUT===============//
Route::get('/about', [CollectionController::class,'about'])->name('about'); //->middleware('guest');

//=========== ERROR===============//
Route::fallback([CollectionController::class,'error']);

//============== DASHBOARD==============//
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::resource('/dashboard/template',DashboardTemplateController::class)->middleware('auth');
Route::get('/dashboard/settings',[DashboardController::class,'settings'])->middleware('auth');


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

//==============UPDATE PROFILE==========//
Route::get('/dashboard/settings/update-profile/{update}/edit',[SettingController::class,'index'])->middleware('auth');
Route::post('/dashboard/settings/update-profile',[SettingController::class,'update'])->middleware('auth');


//============== LOGOUT ==============//
Route::post('/logout',[LogoutController::class,'logout']);


//============== NEWS.COMPUTER ==============//
Route::get('/news/computer',[CollectionController::class,'computer'])->name('computer');
Route::get('/news/programmer',[CollectionController::class,'programmer'])->name('programmer');
Route::get('/news/automotive',[CollectionController::class,'automotive'])->name('automotive');

//============== DOWNLOAD ==============//
Route::get('/download/{download}',[DownloadController::class,'index']);// "/download" diganti dengan "/{app / web}/{category}/{id}"
