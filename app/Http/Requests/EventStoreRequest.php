<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
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
            'goal_id' => ['required', 'exists:goals,id'],
            'title' => ['required', 'unique:events', 'max:255'],
            'description' => ['required'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif', 'max:2048'],
            'exam_date' => ['required', 'date'],
            'application_last_date' => ['required', 'date'],
            'exam_info' => ['nullable'],
            'exam_dates' => ['nullable'],
            'exam_highlight' => ['nullable'],
        ];
    }
}
