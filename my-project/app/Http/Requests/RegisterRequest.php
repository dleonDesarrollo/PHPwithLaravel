<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255', // El campo 'name' es requerido, debe ser una cadena de texto y tener una longitud máxima de 255 caracteres.
            'email' => 'required|email|unique:users|max:255', // El campo 'email' es requerido, debe ser una dirección de correo electrónico válida, única en la tabla de usuarios y tener una longitud máxima de 255 caracteres.
            'password' => 'required|string|min:8|confirmed', // El campo 'password' es requerido, debe ser una cadena de texto con una longitud mínima de 8 caracteres y debe ser confirmado con un campo adicional 'password_confirmation'.            
        ];
    }
}
