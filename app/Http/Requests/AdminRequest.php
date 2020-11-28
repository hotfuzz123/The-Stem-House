<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => 'required|',
            'email' => 'required|unique:App\Admin,email|email',
            'phone' => 'required|',
            'image' => 'required|image',
            'type' => 'required|string',
            'password' => 'required|',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên admin',
            'email.required' => 'Vui lòng nhập địa chỉ email!',
            'email.unique' => 'Email đã tồn tại!',
            'email.email' => 'Vui lòng nhập đúng định dạng email!',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'image.required' => 'Vui lòng thêm ảnh đại diện admin',
            'image.image' => 'Ảnh admin phải là hình',
            'type.required' => 'Vui lòng chọn chức vụ admin',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ];
    }
}
