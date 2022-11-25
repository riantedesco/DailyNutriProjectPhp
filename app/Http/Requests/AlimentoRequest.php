<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlimentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:50|unique:alimentos',
            'quantidadePorcao' => 'required|numeric',
            'unidadeMedida' => 'required|min:3|max:30',
            'referencialMedida' => 'required|min:3|max:30',
        ];
    }
}
