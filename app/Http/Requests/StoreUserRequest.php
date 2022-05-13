<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class StoreUserRequest extends FormRequest
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
            'name'=>'required|max:50|min:2',
            'email'=>'required|unique:App\Models\User',
            'password'=>'required|max:20|min:3',
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'Слишком длинное имя, макс(50 символа)',
            'name.min' => 'Слишком короткое имя, мин(2 символа)',
            'email.unique' => 'Пользователь с таким Email уже существует',
            'password.max' => 'Слишкоми длинный пароль макс(20 символов)',
            'password.min' => 'Слишком короткий пароль мин(3 символов)',
        ];
    }
}
