<?php

namespace App\Http\Requests\website;

use Illuminate\Foundation\Http\FormRequest;

class UserAccountUpdateRequest extends FormRequest
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
            'name' => 'nullable|string|max:20',
            'email' => 'nullable|string|max:50|email',
            'password' => 'nullable|string|min:3|max:20',
            'phone' => 'nullable|string',
            'id_country' => 'nullable|exists:countries,id|not_in:Please select',
            'address' => 'nullable|string|max:100',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
