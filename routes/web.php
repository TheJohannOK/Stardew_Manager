<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/ojete', function () {
    return view('ojete');
});

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/progreso-granjero', function () {
    return view('progreso-granjero');
})->middleware(['auth', 'verified'])->name('progreso-granjero');

Route::get('/granjas', function () {
    return view('granjas');
})->middleware(['auth', 'verified'])->name('granjas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cformulario-granero', function () {
        return view('formulario-granjero');
    });
});

require __DIR__.'/auth.php';
