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
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'product_name.required' => 'Vui lòng nhập tên sản phẩm',
            'product_slug.required' => 'Vui lòng nhập đường dẫn sản phẩm',
            'product_price.required' => 'Vui lòng nhập giá sản phẩm',
            'product_quantity.required' => 'Vui lòng nhập số lượng hàng có trong kho',
            'product_desc.required' => 'Vui lòng nhập mô tả sản phẩm',
            'product_desc.max' => 'Vui lòng nhập tối đa 255 kí tự',
            'product_content.required' => 'Vui lòng nhập nội dung sản phẩm',
            'product_content.max' => 'Vui lòng nhập tối đa 255 kí tự',
            'product_cate.required' => 'Vui lòng chọn danh mục sản phẩm',
            'product_image.required' => 'Vui lòng thêm ảnh sản phẩm',
            'product_image.image' => 'Ảnh sản phẩm phải là hình',
            'product_status.required' => 'Vui lòng chọn hiển thị sản phẩm',
        ];
    }
}
