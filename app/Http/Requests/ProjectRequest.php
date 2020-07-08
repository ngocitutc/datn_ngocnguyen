<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'program_lan' => ['bail','required', 'max:200'],
            'program_tool' => ['bail','required', 'max:200'],
            'link_word' => ['bail','required', 'url'],
            'link_code' => ['bail','required', 'url'],
            'description' => ['nullable', 'max:1000'],
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
            'program_lan.required' => 'Trường này không được bỏ trống',
            'program_tool.required' => 'Trường này không được bỏ trống',
            'link_word.required' => 'Trường này không được bỏ trống',
            'link_code.required' => 'Trường này không được bỏ trống',
            'program_lan.max' => 'Tối đa 200 ký tự',
            'program_tool.max' => 'Tối đa 200 ký tự',
            'description.max' => 'Tối đa 1000 ký tự',
            'link_word.url' => 'Sai định dạng đường dẫn',
            'link_code.url' => 'Sai định dạng đường dẫn',
        ];
    }
}
