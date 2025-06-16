<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NinoRequest extends FormRequest
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
			'nombre_completo' => 'required|string',
			'fecha_nacimiento' => 'required',
			'direccion' => 'required|string',
			'telefono' => 'required|string',
			'estado' => 'required',
        ];
    }
}
