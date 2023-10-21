<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElicitacaoRequest extends FormRequest
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
            'titulo'=>'required',
            'tipo'=>'required',
            'setor_envolvido'=>'required',
            'data_reuniao'=>'required',
            'conteudo'=>'required',
            'id_user' =>'required',
        ];
    }

    public function messages()
{
    return [
        'titulo.required' => 'Informe o titulo da elicitação',
        'tipo.required' => 'Informe o tipo da elicitação',
        'setor_envolvido.required' => 'Informe o setor envolvido na elicitação',
        'data_reuniao.required' => 'Informe a data da elicitação',
        'conteudo.required' => 'Descreva a elicitação',

    ];
}


}
