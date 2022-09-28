<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
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
            'nome' => 'required|min:3|max:100',
            'cpf' => 'required|min:11|max:11',
            'dataNascimento' => 'required|date',
            'genero' => 'required',
            'peso' => 'required',
            'altura' => 'required',
            'tipoCadastro' => 'required',
            'usuario' => 'required|min:3|max:20',
            'senha' => 'required|min:3|max:20',
        ];
    }
}
