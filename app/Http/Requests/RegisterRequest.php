<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "name" => "required|string|max:255|unique:users,name",
            "email" => "required|email|max:255|unique:users,email",
            "password" => "required|string|min:8"
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "name should be provided",
            "name.string" => "name should be string",
            "name.max" => "name should be less than 255",
            "name.unique" => "name is already taken",

            'email.required' => 'email should be given',
            'email.email' => 'email should be a valid email address',
            'email.max' => 'email should be less than 255 characters',
            'email.unique' => 'email already taken',

            'password.required' => 'password should be given',
            'password.string' => 'password should be string',
            'password.min' => 'password should be at least 8 characters',
        ];
    }
}
