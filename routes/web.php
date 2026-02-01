<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;

Route::get('/', [PortoController::class, 'index']);
Route::post('/testimoni', [PortoController::class, 'storeTestimoni'])->name('testimoni.store');
