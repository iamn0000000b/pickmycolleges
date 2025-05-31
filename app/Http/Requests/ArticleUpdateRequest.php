<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArticleUpdateRequest extends FormRequest
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
            'title' => ['required', Rule::unique('articles','title')->ignore($this->article), 'max:255'],
            'description' => ['required'],
            'image' => ['image', 'mimes:jpg,png,jpeg,gif', 'max:2048'],
            'author' => ['required', 'max:255'],
        ];
    }
}
