<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        /* La validación se maneja a través del parámtro RegisterRequest
        La función validated() se utiliza para obtener los datos validados de una solicitud 
        HTTP después de pasar por las reglas de validación definidas en una clase 
        de solicitud (Request).
        Esta función está disponible dentro de los controladores 
        después de que la solicitud haya sido validada.
        Devuelve un array con los datos validados.
        Si la validación falla, Laravel automáticamente redireccionará de 
        vuelta con los errores de validación y los datos antiguos en la sesión.*/
        $user = User::create($request->validated());
        // Redirige a la página de inicio después de un registro exitoso
        return redirect()->route('register');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
