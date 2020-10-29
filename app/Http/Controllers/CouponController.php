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
    public function Authlogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('/dashboard');
        } else{
            return Redirect::to('/admin')->send();
        }
    }

    public function add_coupon(){
        $this->Authlogin();
        return view('admin.coupon.add_coupon');
    }

    public function all_coupon(){
        $this->Authlogin();
        $all_coupon = Coupon::orderby('coupon_id', 'desc')->get();
        return view('admin.coupon.all_coupon')->with('all_coupon', $all_coupon);
    }

    public function save_coupon(Request $request){
        $this->Authlogin();
        $this->validation($request);
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
        $this->Authlogin();
        $coupon = Coupon::where('coupon_id', $coupon_id)->update(['coupon_status' => 0]);
        return Redirect::to('/all-coupon')->with('message', 'Ẩn coupon thành công');
    }

    public function active_coupon($coupon_id){
        $this->Authlogin();
        $coupon = Coupon::where('coupon_id', $coupon_id)->update(['coupon_status' => 1]);
        return Redirect::to('/all-coupon')->with('message', 'Hiển thị coupon thành công');
    }

    public function edit_coupon($coupon_id){
        $this->Authlogin();
        $edit_coupon = Coupon::where('coupon_id', $coupon_id)->get();
        return view('admin.coupon.edit_coupon')->with('edit_coupon', $edit_coupon);
    }

    public function update_coupon(Request $request, $coupon_id) {
        $this->Authlogin();
        $data = $request->all();
        $coupon = Coupon::find($coupon_id);
        $coupon->coupon_code = $data['coupon_code'];
        $coupon->coupon_amount = $data['coupon_amount'];
        $coupon->coupon_amount_type = $data['coupon_amount_type'];
        $coupon->coupon_expire_date = $data['coupon_expire_date'];
        $coupon->save();
        return Redirect::to('/all-coupon')->with('message', 'Cập nhật coupon thành công');
    }

    public function validation($request){
        return $this->validate($request,[
            'coupon_code' => 'required|',
            'coupon_amount' => 'required|',
            'coupon_amount_type' => 'required|',
            'coupon_expire_date' => 'required|',
            'coupon_status' => 'required|',
        ],
        [
            'coupon_code.required' => 'Vui lòng nhập mã coupon',
            'coupon_amount.required' => 'Vui lòng nhập coupon sẽ được giảm bao nhiêu',
            'coupon_amount_type.required' => 'Vui lòng chọn loại coupon',
            'coupon_expire_date.required' => 'Vui lòng ngày hết hạn coupon',
            'coupon_status.required' => 'Vui lòng hiển thị coupon',
        ]);
    }

    public function delete_coupon($coupon_id) {
        $this->Authlogin();
        $coupon = Coupon::find($coupon_id)->delete();
        return Redirect::to('/all-coupon')->with('message', 'Xóa coupon thành công');
    }
}
