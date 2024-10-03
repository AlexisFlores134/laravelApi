<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecetasRequest extends FormRequest
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
            'categoria_id' => 'required|integer',
            'user_id' => 'required|integer',
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'ingredientes' => 'required|string',
            'instrucciones' => 'required|string',
            'imagen' => 'required|image',
            'etiquetas' => 'required',
        ];
    }
}
