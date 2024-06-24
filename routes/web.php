<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GroupController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('contact', ContactController::class);
    // Route::get('/user', [UserController::class, 'create'])->name('user.create');

    // Route::get('/user', [UserController::class, 'store'])->name('user.store');
    // Route::get('/user', [UserController::class, 'show'])->name('user.show');
    // Route::get('/user', [UserController::class, 'edit'])->name('user.edit');
    // Route::get('/user', [UserController::class, 'update'])->name('user.update');
    // Route::get('/user', [UserController::class, 'destroy'])->name('user.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/group', [GroupController::class, 'index'])->name('group.index');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';