<?php

namespace App\Http\Requests\website;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'name' => 'required|string|max:20',
            'email' => 'required|string|max:50|unique:users,email',
            'password' => 'required|string|min:3|max:20',
            'phone' => 'required|string',
            'id_country' => 'required|exists:countries,id|not_in:Please select',
            'address' => 'required|string|max:100',
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
