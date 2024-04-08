<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/edit/{post}',[PostController::class,'edit'])->name('edit');
Route::match(['get','patch'],'/post/update/{post}',[PostController::class,'update'])->name('update');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/post',[PostController::class,'index'])->name('index');
require __DIR__.'/auth.php';
Route::post('/post/create',[PostController::class,'create'])->name('create');
