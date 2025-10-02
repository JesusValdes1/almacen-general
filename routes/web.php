<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('ejemploBaseV2');
});

Route::post('/usuarios', [HomeController::class, 'storeUsuario'])->name('usuarios.store');
