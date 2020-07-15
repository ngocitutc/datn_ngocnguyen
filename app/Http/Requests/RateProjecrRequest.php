<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RateProjecrRequest extends FormRequest
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
            'rate_note' => ['bail','required', 'max:2000'],
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'rate_note.required' => 'Không thể bỏ trống trường này',
            'rate_note.max' => 'Tối đa 2000 kí tự',
        ];
    }
}
