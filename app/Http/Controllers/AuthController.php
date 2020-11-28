<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Admin;
use App\Roles;
use App\Product;
use App\Course;
use App\Http\Requests;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Redirect;
session_start();

class AuthController extends Controller
{
    public function all_auth(){
        $all_auth = Admin::all();
        return view('admin.auth.all_auth')->with('all_auth', $all_auth);
    }

    public function add_auth(){
        return view('admin.auth.add_auth');
    }


    public function save_auth(AdminRequest $request){
        $admin = new Admin();
        $admin->admin_name = $data['admin_name'];
        $admin->admin_email = $data['admin_email'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_type = $data['admin_type'];
        $admin->admin_password = md5($data['admin_password']);
        $get_image = $request->file('admin_image');
        $path = 'public/uploads/admin/';

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $admin->admin_image = $new_image;
        }

        $admin->save();
        return redirect('/all-auth')->with('message', 'Đăng ký thành công');

    }

    public function edit_auth($admin_id){
        $edit_admin = Admin::where('admin_id', $admin_id)->get();
        return view('admin.auth.edit_auth')->with('edit_admin', $edit_admin);
    }


    public function update_auth(Request $request, $admin_id) {
        $data = $request->all();
        $admin = Admin::find($admin_id);
        $admin->admin_name = $data['admin_name'];
        $admin->admin_email = $data['admin_email'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_type = $data['admin_type'];
        $get_image = $request->file('admin_image');
        $path = 'public/uploads/admin/';

        if($get_image){
            unlink($path.$admin->admin_image);
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $admin->admin_image = $new_image;
        }
        $admin->save();
        return Redirect::to('/all-auth')->with('message', 'Cập nhật người dùng thành công');
    }

    public function delete_auth($admin_id) {
        $admin = Admin::find($admin_id);
        unlink('public/uploads/admin/'.$admin->admin_image);
        $admin->delete();
        return Redirect::to('/all-auth')->with('message', 'Xóa người dùng thành công');
    }

}
