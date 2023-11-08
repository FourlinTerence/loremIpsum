<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CreateVideoRequest extends FormRequest
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
            'video_url' => ['required'],
            'title' => ['required', 'min:4'],
            'slug' => ['required', 'min:4', 'regex:/^[a-z0-9\-]+$/', Rule::unique('videos')->ignore($this->video)],
            'description' => ['required'],
            'duration' => ['required'],
            'category_id' => ['required', 'exists:categories,id']
        ];
    }
    
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => $this->input('slug') ?: Str::slug($this->input('title'))
        ]);
    }
}
