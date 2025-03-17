<?php

use App\Http\Controllers\Web\categoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\test;
use Illuminate\Support\Facades\Route;



Route::get('/test', [test::class,'views'])->name('index');


Route::group(['as'=>'member.','namespace'=> 'Web'], function () {
    Route::get('/', function(){return view('welcome');})->name('home'  );
    Route::get('/price-list', function(){return view('web.price');})->name('priceList');
    Route::get('/news', function(){return view('web.news');})->name('news' );
    Route::get('/about',function(){return view('web.about');})->name('about' );

    

});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';