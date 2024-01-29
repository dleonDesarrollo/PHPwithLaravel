<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
/* Importa la interfaz Factory del contrato de validación de Laravel 
y la asigna a un alias ValidationFactory. Esta interfaz define los métodos 
y comportamientos que deben implementar las clases de fábrica de validación en Laravel*/
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // El campo 'email' es requerido y debe ser una dirección de correo electrónico válida
            'email' => 'required|email',
            // El campo 'password' es requerido y debe ser una cadena de texto
            'password' => 'required|string'
        ];
    }
}
