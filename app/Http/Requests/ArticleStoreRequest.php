<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
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
            'title' => ['required', 'unique:articles', 'max:255'],
            'description' => ['required'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif', 'max:2048'],
            'author' => ['required', 'max:255'],
        ];
    }
}
