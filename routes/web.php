<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('front.home');


Route::get('langs/{locale}',[App\Http\Controllers\profileController::class,'langSwitcher'])
        ->name('lang.swithcher');

Route::get('daxil-ol',[App\Http\Controllers\sign\sign_in_upController::class,'login'])
    ->middleware('locale')
    ->name('login');

Route::post('daxil-ol',[App\Http\Controllers\sign\sign_in_upController::class,'loginPost'])
    ->middleware('locale')
    ->middleware('throttle:5,60')
    ->name('login.post');

Route::get('cixis-et',[App\Http\Controllers\sign\sign_in_upController::class,'logout'])
    ->middleware( 'auth' )
    ->name( 'logout' );

Route::post('avatar-upload',[ App\Http\Controllers\profileController::class,'avatarUpload' ])
    ->name('front.avatar.upload')
    ->middleware('auth');

Route::post('profile',[ App\Http\Controllers\profileController::class,'profileUpdate' ])
    ->name('front.profile.update')
    ->middleware('auth');

Route::group(['prefix'=>'admin','middleware'=>['auth', 'locale']],function (){

    Route::get('/',[App\Http\Controllers\AdminController::class,'index'])
        ->name('back.dashboard');
    Route::get('profile',[App\Http\Controllers\profileController::class,'profile'])
        ->name('back.profile');
    Route::resource('option',App\Http\Controllers\OptionController::class);

    Route::get('banner', [HomeController::class,'index'])->name('back.banner');
    Route::post('bannerPost', [HomeController::class,'indexPost'])->name('back.banner.post');
    Route::delete('bannerDelete/{id}', [HomeController::class,'bannerDelete'])->name('back.banner.delete');

    Route::get('slider_banner', [HomeController::class,'slider_index'])->name('back.slider_banner');
    Route::post('slider_bannerPost', [HomeController::class,'slider_indexPost'])->name('back.slider_banner.post');
    Route::delete('slider_bannerDelete/{id}', [HomeController::class,'slider_bannerDelete'])->name('back.slider_banner.delete');

    Route::resource('doctor', DoctorController::class);
    Route::resource('about', AboutController::class);


});
