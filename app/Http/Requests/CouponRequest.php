<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
            'coupon_code' => 'required|',
            'coupon_amount' => 'required|',
            'coupon_amount_type' => 'required|',
            'coupon_expire_date' => 'required|',
            'coupon_status' => 'required|',
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
            'coupon_code.required' => 'Vui lòng nhập mã coupon',
            'coupon_amount.required' => 'Vui lòng nhập coupon sẽ được giảm bao nhiêu',
            'coupon_amount_type.required' => 'Vui lòng chọn loại coupon',
            'coupon_expire_date.required' => 'Vui lòng ngày hết hạn coupon',
            'coupon_status.required' => 'Vui lòng hiển thị coupon',
        ];
    }
}
