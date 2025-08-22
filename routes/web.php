<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/catalogues', [CatalogueController::class, 'index'])->name('catalogues.index');
