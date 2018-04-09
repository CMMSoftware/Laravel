<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' => 'required|cpf',
            'telefone1' => 'required|celular_com_ddd',
            'telefone2' => 'celular_com_ddd',
            'telefone3' => 'celular_com_ddd',
            'dataNascimento' => 'data'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nome.required' => 'O Campo Nome é Obrigatório!',
            'cpf.required' => 'O Campo CPF é Obrigatório!',
            'telefone1.required' => 'O Campo Telefone Celular 1 é Obrigatório!',

            'cpf.cpf' => 'O Campo CPF Inválido!',
            'telefone1.celular_com_ddd' => 'O Campo Telefone Celular 1 é Inválido',
            'telefone2.celular_com_ddd' => 'O Campo Telefone Celular 2 é Inválido',
            'telefone3.celular_com_ddd' => 'O Campo Telefone Fixo é Inválido',
            'dataNascimento.data' => 'O Campo Data de Nascimento não é uma Data com Formato Válido'
        ];
    }
}
