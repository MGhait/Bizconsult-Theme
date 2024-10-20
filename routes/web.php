<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticalController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController;
use Illuminate\Foundation\Console\AboutCommand;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//  ============= FRONT ROUTES ===============
Route::name('front.')->controller(FrontController::class)->group(function(){
    // ============= HOME PAGE ==============
    Route::get('/','index')->name('index');
    Route::post('/subscriber/store', 'subscriberStore' )->name('subscriber.store');
    
    // ============= ABOUT PAGE ==============
    Route::get('/about','about')->name('about');
    
    // ============= SERVICE PAGE ==============
    Route::get('/service','service')->name('service');
    
    // ============= CONTACT PAGE ==============
    Route::post('/contact/store', 'contactStore' )->name('contact.store');
    Route::get('/contact','contact')->name('contact');
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
    // =============  MESSAGES ==============
    Route::controller(MessageController::class)->group(function (){
        Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
    });
    // =============  SUBSCRIBERS ==============
    Route::controller(SubscriberController::class)->group(function (){
        Route::resource('subscribers', SubscriberController::class)->only(['index','destroy']);
    });
    
    // =============  TESTMONIALS ==============
    Route::controller(TestmonialController::class)->group(function (){
        Route::resource('testmonials', TestmonialController::class);
    });
    
    // =============  COMPANIES ==============
    Route::controller(CompanyController::class)->group(function (){
        Route::resource('companies', CompanyController::class)->except(['show']);
    });
    
    // =============  MEMBERS ==============
    Route::controller(MemberController::class)->group(function (){
        Route::resource('members', MemberController::class);
    });
    
    // =============  SETTINGS ==============
    Route::controller(SettingController::class)->group(function (){
        Route::resource('settings', SettingController::class)->only(['index', 'update']);
    });
    
    // =============  ARTICALS ==============
    Route::controller(ArticalController::class)->group(function (){
        Route::resource('articals', ArticalController::class)->only(['index', 'update']);
    });

    // =============  ABOUT ==============
    Route::controller(AboutController::class)->group(function (){
        Route::resource('abouts', AboutController::class);
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

