<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlPanel\AuthController;
use App\Http\Controllers\ControlPanel\SiteInfoEditController;
use App\Http\Controllers\ControlPanel\SliderImagesController;
use App\Http\Controllers\ControlPanel\ContactSupportController;

Route::controller(AuthController::class)->group(function(){

    Route::get('/','login')->middleware('guest')->name('login');
    Route::post('authAdmin','authAdmin')->name('authAdmin');
    Route::get('dashboard','dashboard')->name('dashboard')->middleware('auth:admin');

});

Route::controller(ContactSupportController::class)->middleware('auth:admin')->group(function(){

    Route::get('contactSupport','contactSupportMessage')->name('contactSupport');
});

Route::controller(SiteInfoEditController::class)->middleware('auth:admin')->group(function(){

    Route::get('siteInfo','siteInfo')->name('siteInfo');
    Route::post('updateSiteInfo','updateSiteInfo')->name('updateSiteInfo');

});


Route::controller(SliderImagesController::class)->group(function(){

    Route::get('/test/{type}','UploadSlider');


});

