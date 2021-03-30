<?php

namespace App\Http\Requests;

// use App\Product;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        // $rules = [
        //     'name' => 'required',
        //     'email' => 'required',
        // ];
    
        // if ($this->getMethod() == 'POST') {
        //     $rules += ['password' => 'required|min:6'];
        // }
    
        // return $rules;

        return [
            'product_name' => 'required|',
            'product_slug' => 'required|',
            'product_price' => 'required|',
            'product_quantity' => 'required|',
            'product_desc' => 'required|max:255',
            'product_content' => 'required|max:255',
            'product_cate' => 'required|',
            'product_status' => 'required|',
            'product_image' => 'required|image',
        ];
    }

    /**
     * Get the error messages attributes for the defined validation rules.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'product_name' => 'Tên sản phẩm',
            'brand_id' => 'Nhãn hiệu',
            'category_id' => 'Danh mục',
            'tax_id' => 'Thuế',
            'description' => 'Giới thiệu',
            'price' => 'Giá',
            'quantity' => 'Số lượng hàng trong kho',
            'featured_image' => 'Ảnh đại diện',
            'images' => 'Album ảnh'
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
            'required' => ':attribute không được bỏ trống',
            'string' => ':attribute phải là chuỗi',
            'name.max' => 'Tên sản phẩm tối đa 255 ký tự',
            'featured_image.max' => 'Ảnh dung lượng tối đa 10mb',
            'price.min' => 'Giá sản phẩm không được âm',
            'quantity.min' => 'Số lượng hàng trong kho không được âm',
            'numeric' => ':attribute phải là số',
            'mimes' => ':attribute chỉ chấp nhận file ảnh',
            'exists' => ':attribute không tồn tại',
        ];
    }
}
