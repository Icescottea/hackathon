<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:student'])->get('/student', function () {
    return view('dashboard.student');
});

Route::middleware(['auth', 'role:faculty'])->get('/faculty', function () {
    return view('dashboard.faculty');
});

Route::middleware(['auth', 'role:org'])->get('/org', function () {
    return view('dashboard.org');
});

Route::middleware(['auth', 'role:admin'])->get('/admin', function () {
    return view('dashboard.admin');
});

require __DIR__.'/auth.php';
