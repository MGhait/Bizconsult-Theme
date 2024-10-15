<?php

use App\Models\Feature;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//  ============= FRONT ROUTES ===============
Route::name('front.')->group(function(){
    Route::view('/','front.index')->name('index');
    Route::view('/about','front.about')->name('about');
    Route::view('/service','front.service')->name('service');
    Route::view('/contact','front.contact')->name('contact');
});

// ============== ADMIN ROUTES ==============
// there is a problem naming the route with admin
Route::name('admin.')->prefix(LaravelLocalization::setLocale() .'/myAdmin')->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function(){

    // ============= HOME PAGE ==============
    Route::middleware('auth')->group(function(){
        Route::view('/','admin.index')->name('index');
    });
    // =============  SERVICES ==============
    Route::controller(ServiceController::class)->group(function (){
        Route::resource('services', ServiceController::class);
    });
    // =============  FEATURES ==============
    Route::controller(FeatureController::class)->group(function (){
        Route::resource('features', FeatureController::class);
    });
    
    require __DIR__.'/auth.php';
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

