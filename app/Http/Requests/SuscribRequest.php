<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SuscribRequest extends FormRequest
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
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required|min:0|max:120',
            'sexe' => 'required',
            'adress' => 'required',
            'email' => 'required|email',
            'role_id' => 'required',
            'pseudo' => 'required',
            'password' => [
                'required',
                'min:12',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*?[0-9]).+$/',
            ]
        ];
    }
}
