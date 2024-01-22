<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Agrupar rutas de autenticación
Route::prefix('auth')->group(function () {
    require __DIR__.'/auth.php';
});

