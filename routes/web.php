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
use App\Http\Controllers\mobileAppController;
use App\Http\Controllers\desktopAppController;
use App\Http\Controllers\hybridController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Admin;
use App\Http\Controllers\AdminController;


Route::get('/',[CollectionController::class,'home'])->name('home');//->middleware('guest');
Route::get('/templates', [CollectionController::class,'templates'])->name('template');//->middleware('guest');
Route::get('/news', [CollectionController::class,'news'])->name('news');

//============== WEB ==============//
Route::get('/templates/web', [CollectionController::class,'web'])->name('web');
Route::get('/templates/web/{web:title}',[WebController::class,'show'])->name('web.show');
// Route::resource('/templates/web',WebController::class);
Route::get('/templates/web/detail/{detail}',[WebController::class,'detail']);

//=========== APP===============//
Route::get('/templates/mobile-app',[CollectionController::class,'mobileApp'])->name('mobileApp');
Route::get('/templates/mobile-app/{mobileApp:title}',[mobileAppController::class,'show'])->name('mobileApp.show');
Route::get('/templates/mobile-app/detail/{detail}',[mobileAppController::class,'detail']);

Route::get('/templates/desktop-app',[CollectionController::class,'desktopApp'])->name('desktopApp');
Route::get('/templates/desktop-app/{desktopApp:title}',[desktopAppController::class,'show'])->name('desktopApp.show');
Route::get('/templates/desktop-app/detail/{detail}',[desktopAppController::class,'detail']);

Route::get('/templates/hybrid',[CollectionController::class,'hybrid'])->name('hybrid');
Route::get('/templates/hybrid/{hybrid:title}',[hybridController::class,'show'])->name('hybrid.show');
Route::get('/templates/hybrid/detail/{detail}',[hybridController::class,'detail']);

//============== ADMIN ==============//
Route::get('/admin-authentication',[AdminController::class,'authAdmin'])->name('admin');
Route::get('/admin-post',[AdminController::class,'postAdmin'])->name('postAdmin');
Route::get('/admin-user',[AdminController::class,'userAdmin'])->name('userAdmin');

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

//==============FORGOT PASSWORD==========//
Route::get('/forgotpass',[LoginController::class,'forgotpass']);
Route::post('/forgotpass',[LoginController::class,'forgotpass2']);
Route::get('/reset-password/{token}', function ($token) {
    return view('resetpass', ['token' => $token]);
})->middleware('guest');
Route::post('/reset-password',[LoginController::class,'reset']);


//==============UPDATE PROFILE==========//
Route::get('/dashboard/settings/update-profile/{update}/edit',[SettingController::class,'index'])->middleware('auth');
Route::post('/dashboard/settings/update-profile',[SettingController::class,'update'])->middleware('auth');
Route::get('/dashboard/settings/privacy-and-security',[SettingController::class,'chgpass'])->middleware('auth');
Route::post('/dashboard/settings/privacy-and-security',[SettingController::class,'chgpass2'])->middleware('auth');

//============== UPDATE PASSWORD ==============//
Route::post('/dashboard/settings/update-pass',[SettingController::class,'chgpass3'])->middleware('auth');


//============== LOGOUT ==============//
Route::post('/logout',[LogoutController::class,'logout']);


//============== NEWS.COMPUTER ==============//
Route::get('/news/computer',[CollectionController::class,'computer'])->name('computer');
Route::get('/news/programmer',[CollectionController::class,'programmer'])->name('programmer');
Route::get('/news/automotive',[CollectionController::class,'automotive'])->name('automotive');

//============== DOWNLOAD ==============//
Route::get('/download/{download}',[DownloadController::class,'index']);// "/download" diganti dengan "/{app / web}/{category}/{id}"
