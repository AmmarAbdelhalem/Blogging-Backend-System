<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "email" => "required|email",
            "password" => "required|string"
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'email should be given',
            'email.email' => 'email should be a valid email address',

            'password.required' => 'password should be given',
            'password.string' => 'password should be string',
        ];
    }
}
