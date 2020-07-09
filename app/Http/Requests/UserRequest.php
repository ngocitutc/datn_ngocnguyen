<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => ['bail','required', 'min:8', 'max:8'],
            'user_name' => ['bail','required'],
            'password' => ['bail','required','string','min:8', 'max:25'],
            'user_email' => ['bail','required', 'unique:profiles,user_email', 'email'],
            'phone_number' => ['nullable'],
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
            'email.required' => 'Mã đăng nhập không được bỏ trống',
            'user_name.required' => 'Tên không được bỏ trống',
            'user_email.required' => 'Email không được bỏ trống',
            'user_email.unique' => 'Email đã tồn tại',
            'email.min' => 'Mã đăng nhập phải là 8 chữ số',
            'email.max' => 'Mã đăng nhập phải là 8 chữ số',
            'password.required' => 'Mật khẩu không được bỏ trống',
            'password.min' => 'Mật khẩu phải từ 8 đến 25 ký tự',
            'password.max' => 'Mật khẩu phải từ 8 đến 25 ký tự',
            'user_email.email' => 'Định dạng email không đúng',
        ];
    }
}
