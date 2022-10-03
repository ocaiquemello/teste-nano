<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'login' => 'required|unique:employees',
            'password' => 'min:6|required_with:password_confirm|same:password_confirm',
            'password_confirm' => 'required|min:6',
            'current_balance' => 'required'
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
            'name.required' => 'Por favor, informe um nome!',
            'password.min' => 'A senha requer no mínimo 6 caracteres.',
            'password.same' => 'A senha deve ser confirmada!',
            'password_confirm.required' => 'É necessário confirmar a senha!',
            'password_confirm.min' => 'A senha requer no mínimo 6 caracteres.',
            'current_balance.required' => 'O saldo atual é obrigatório!',
        ];
    }
}
