<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Ruta para mostrar el formulario de registro
Route::get('register', [RegisterController::class, 'create']);

// Ruta para procesar petición de formulario de registro
Route::post('register', [RegisterController::class, 'store']);

// Ruta para mostrar el formulario de inicio de sesión
Route::get('login', [LoginController::class, 'create']);

// Ruta para procesar petición de formulario de inicio de sesión
Route::post('login', [LoginController::class, 'store']);

// Otras rutas de autenticación...
