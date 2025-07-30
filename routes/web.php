<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CatalogueController::class, 'redirect']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/catalogues', [CatalogueController::class, 'catalogue'])->name('catalogues');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/catalogues/list', [CatalogueController::class, 'index'])->name('catalogues.index');
    Route::get('/catalogues/{id}/show', [CatalogueController::class, 'show'])->name('catalogues.show');
    Route::post('/', [CatalogueController::class, 'store'])->name('catalogues.store');
    Route::post('/catalogue/{id}/upload-file', [CatalogueController::class, 'storeFile'])->name('catalogue.file.store');
    Route::get('/{id}/edit', [CatalogueController::class, 'edit'])->name('catalogues.edit');
    Route::put('/{id}', [CatalogueController::class, 'update'])->name('catalogues.update');
    Route::delete('/{id}', [CatalogueController::class, 'destroy'])->name('catalogues.destroy');
});

require __DIR__ . '/auth.php';
