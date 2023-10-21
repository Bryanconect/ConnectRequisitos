<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'

        ];
    }

    public function messages()
{
    return [
        'email.required' => 'Esse campo de email é obrigatório',
        'email.email' => 'Esse campo tem que ter um email válido',
        'password.required' => 'Esse campo password é obrigatório',
        'name.required' => 'Esse campo nome é obrigatório'
    ];
}


}
