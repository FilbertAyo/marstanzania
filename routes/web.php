<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogueController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalogues', [CatalogueController::class, 'index'])->name('catalogues.index');
