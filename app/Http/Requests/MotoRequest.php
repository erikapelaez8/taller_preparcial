<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'cilindraje' => 'required|integer',
            'ano' => 'required|date',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'categoria' => 'required|in:deportiva,naked,custom,touring,scooter',
            'color' => 'required|in:blanco,negro,gris,azul,amarillo,rojo',
        ];
    }
}

