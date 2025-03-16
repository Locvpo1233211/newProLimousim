<?php

use App\Http\Controllers\Web\categoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\test;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [test::class,'views'])->name('index');

Route::group(['prefix'=> 'thanh-vien', 'as'=>'member.','namespace'=> 'Web'], function () {
    Route::get('/category.html', [categoryController::class,'views'])->name('category');
    Route::post('/store-category', [categoryController::class,'store'])->name('storeCategory');
    Route::get('/edit-form-category/{id}', [categoryController::class,'editForm'])->name('editFormCategory');
    Route::put('/update/category/{id}', [categoryController::class,'update'])->name('updateCategory');
    Route::delete('/delete/category/{id}', [categoryController::class,'destroy'])->name('deleteCategory');
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
