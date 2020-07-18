<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcessProjectRequest extends FormRequest
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
            'title' => ['bail','required'],
            'content' => ['bail','required', 'max:2000'],
            'link_file' => ['nullable','url'],
            'note' => ['nullable','max:2000'],
            'note_by_teacher' => ['nullable','max:2000'],
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
            'title.required' => 'Trường này không được bỏ trống',
            'content.required' => 'Trường này không được bỏ trống',
            'content.max' => 'Tối đa 2000 ký tự',
            'link_file.url' => 'Sai định dạng url',
            'note.max' => 'Tối đa 2000 ký tự',
            'note_by_teacher.max' => 'Tối đa 2000 ký tự',
        ];
    }
}
