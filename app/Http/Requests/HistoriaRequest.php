<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoriaRequest extends FormRequest
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
            'id_requisito'=>'required',
            'id_elicitacao'=>'required',
            'id_user'=>'required',
            'necessidade'=>'required',
            'solucao'=>'required',
            'cenario_teste'=>'required',
            'especificacao'=>'required',
            'status'=>'required',
        ];
    }

    public function messages()
{
    return [
        'id_requisito.required' => 'Informe o programa',
        'id_elicitacao.required' => 'Informe a elicitação',
        'id_user.required' => 'Informe o usuário',
        'necessidade.required' => 'Informe a necessidade',
        'solucao.required' => 'Informe a solução',
        'cenario_teste.required' => 'Informe o cenário de teste',
        'especificacao.required' => 'Informe a EF',
        'status.required' => 'Informe o status',

    ];
}


}
