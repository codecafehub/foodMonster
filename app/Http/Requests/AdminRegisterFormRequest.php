<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
// use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Http\FormRequest;

class AdminRegisterFormRequest extends FormRequest
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
            'username' => 'required|unique:admins',
            'email' => 'required|unique:admin|email:filter',
            'password' => [
                'required',
                'confirmed',
                Password::default(),
            ],
            'password_confirm' => 'required',
        ];
    }

    public function messages()
    {
        return
        [
            'password.confirmed'=>'Password Confirmation should match the password'
        ];
    }
}
