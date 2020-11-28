<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'course_name' => 'required|',
            'course_price' => 'required|',
            'course_desc' => 'required|',
            'course_content' => 'required|',
            'course_cate' => 'required|',
            'course_status' => 'required|',
            'course_image' => 'required|',
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
            'course_name.required' => 'Vui lòng nhập tên khoá học',
            'course_price.required' => 'Vui lòng nhập giá khoá học',
            'course_desc.required' => 'Vui lòng nhập mô tả khoá học',
            'course_content.required' => 'Vui lòng nhập nội dung khoá học',
            'course_cate.required' => 'Vui lòng chọn danh mục khoá học',
            'course_image.required' => 'Vui lòng thêm ảnh khoá học',
            'course_status.required' => 'Vui lòng chọn hiển thị khoá học',
        ];
    }
}
