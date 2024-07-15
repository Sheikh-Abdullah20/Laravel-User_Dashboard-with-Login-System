<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class own_Request extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|min:3",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:5",
        ];
    }


    public function messages(): array{
        return [
            "name.required" => "Name Required",
            "name.min" => "Name Must be at least 3 characters",
            "email.required" => "Email Required",
            "email.email" => "Please enter a valid email address",
            "password.required" => "Password Required",
            "password.min" => "Minimum Password at least 5 characters",

        ];
    }

        public $stopOnFirstFailure = true;
}
