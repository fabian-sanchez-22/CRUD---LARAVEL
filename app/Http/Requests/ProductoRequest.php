<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|unique:productos|string|min:3|max:10',
            'cantidad' => 'required|min:1|max:1000',
            'precio' => 'required|numeric|min:2'
        ];
    }

    public function messages(){
        return [
            'required' => "El campo:attribute es obligatorio",
            'min' => "la cantidad minima es de :min",
            'max'=>"No puede excederse de :max",
            'nombre.required' => "El campo nombre debe ser obligatorio"
        ];
    }
}


