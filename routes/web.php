<?php

use App\Http\Controllers\Web\categoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\test;
use App\Http\Controllers\AuthDashboardController;
use App\Http\Controllers\QuoteRequestController;
use Illuminate\Support\Facades\Route;





Route::group(['as'=>'member.','namespace'=> 'Web'], function () {
    Route::get('/', function(){return view('welcome');})->name('home'  );
    Route::get('/price-list', function(){return view('web.price');})->name('priceList');
    Route::get('/news', function(){return view('web.news');})->name('news' );
    Route::get('/about',function(){return view('web.about');})->name('about' );

Route::get('/test', [test::class,'views'])->name('index');
    

});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Auth Dashboard Route
    Route::get('/auth-dashboard', [AuthDashboardController::class, 'index'])
        ->name('auth.dashboard')
        ->middleware(['auth', 'verified']);
});

// Quote Request Routes
Route::post('/quote', [QuoteRequestController::class, 'store'])->name('quote.store');

Route::middleware(['auth', 'verified'])->group(function () {
    // Quote Management Routes
    Route::get('/admin/quote-requests', [QuoteRequestController::class, 'index'])->name('quote-requests.index');
    Route::put('/admin/quote-requests/{quoteRequest}/status', [QuoteRequestController::class, 'updateStatus'])->name('quote-requests.update-status');
    Route::get('/admin/quote-requests/latest', [QuoteRequestController::class, 'getLatestQuotes'])->name('quote-requests.latest');
});

require __DIR__.'/auth.php';