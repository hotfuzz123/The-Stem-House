<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Coupon;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CouponController extends Controller
{
    public function add_coupon(){
        return view('admin.coupon.add_coupon');
    }

    public function all_coupon(){
        $all_coupon = Coupon::orderby('coupon_id', 'desc')->get();
        return view('admin.coupon.all_coupon')->with('all_coupon', $all_coupon);
    }

    public function save_coupon(Request $request){
        $data = $request->all();
        $coupon = new Coupon();
        $coupon->coupon_code = $data['coupon_code'];
        $coupon->coupon_amount = $data['coupon_amount'];
        $coupon->coupon_amount_type = $data['coupon_amount_type'];
        $coupon->coupon_expire_date = $data['coupon_expire_date'];
        $coupon->coupon_status = $data['coupon_status'];
        $coupon->save();
        return Redirect::to('/all-coupon')->with('message', 'Thêm coupon thành công');
    }

    public function unactive_coupon($coupon_id){
        $coupon = Coupon::where('coupon_id', $coupon_id)->update(['coupon_status' => 0]);
        return Redirect::to('/all-coupon')->with('message', 'Ẩn coupon thành công');
    }

    public function active_coupon($coupon_id){
        $coupon = Coupon::where('coupon_id', $coupon_id)->update(['coupon_status' => 1]);
        return Redirect::to('/all-coupon')->with('message', 'Hiển thị coupon thành công');
    }

    public function edit_coupon($coupon_id){
        $edit_coupon = Coupon::where('coupon_id', $coupon_id)->get();
        return view('admin.coupon.edit_coupon')->with('edit_coupon', $edit_coupon);
    }

    public function update_coupon(Request $request, $coupon_id) {
        $data = $request->all();
        $coupon = Coupon::find($coupon_id);
        $coupon->coupon_code = $data['coupon_code'];
        $coupon->coupon_amount = $data['coupon_amount'];
        $coupon->coupon_amount_type = $data['coupon_amount_type'];
        $coupon->coupon_expire_date = $data['coupon_expire_date'];
        $coupon->save();
        return Redirect::to('/all-coupon')->with('message', 'Cập nhật coupon thành công');
    }

    public function delete_coupon($coupon_id) {
        $coupon = Coupon::find($coupon_id)->delete();
        return Redirect::to('/all-coupon')->with('message', 'Xóa coupon thành công');
    }
}
