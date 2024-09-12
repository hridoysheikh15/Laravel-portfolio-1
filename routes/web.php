<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

// frontend route
Route::get('/quick-info', [HomeController::class, 'index'])->name('quick.info');
Route::get('/about-me', [AboutController::class, 'index'])->name('about.me');
Route::get('/my-works', [ProjectsController::class, 'index'])->name('my.work');
Route::get('/what-am-i-do', [ServiceController::class, 'index'])->name('service');
Route::get('/explore-with-me', [BlogController::class, 'index'])->name('blog');
Route::get('/make-a-meeting', [ContactController::class, 'index'])->name('contact.me');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
