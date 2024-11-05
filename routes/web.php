<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ingredientes', [IngredienteController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.ingredientes.index');
Route::get('/ingredientes/create', [IngredienteController::class, 'create'])->middleware(['auth', 'verified'])->name('admin.ingredientes.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
