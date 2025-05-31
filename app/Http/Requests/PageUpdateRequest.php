<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PageUpdateRequest extends FormRequest
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
            'title' => ['required', Rule::unique('pages','title')->ignore($this->page), 'max:255'],
            'description' => ['nullable'],
            'content' => ['required'],
            'image' => ['image', 'mimes:jpg,png,jpeg,gif', 'max:2048'],
            'meta_description' => ['nullable'],
            'meta_keywords' => ['nullable'],
        ];
    }
}
