<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta de la página de inicio
Route::get('/', function () {
    return view('welcome');
});

/*
Register web routes for your app's RouteServiceProvider 
in a group containing the "web" middleware
*/

// Ruta para mostrar el formulario de registro
Route::get('register', [RegisterController::class, 'create']);

// Ruta para procesar el formulario de registro
Route::post('register', [RegisterController::class, 'store']);
