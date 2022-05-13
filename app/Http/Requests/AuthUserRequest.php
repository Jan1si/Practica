<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthUserRequest extends FormRequest
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
            'email' => 'required|exists:App\Models\User',
            'password' => 'required|max:20|min:3',
        ];
    }

    public function messages()
    {
        return [
            'email.exists' => 'Пользователя с таким email не существует',
            'password.max' => 'Слишкоми длинный пароль макс(20 символов)',
            'password.min' => 'Слишком короткий пароль мин(3 символов)',
        ];
    }
}
