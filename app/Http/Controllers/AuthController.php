<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Admin;
use App\Roles;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AuthController extends Controller
{
    public function Authlogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('/dashboard');
        } else{
            return Redirect::to('/admin')->send();
        }
    }

    public function admin(){
        return view('admin_login');
    }

    public function all_auth(){
        $this->Authlogin();
        $all_auth = Admin::all();
        return view('admin.auth.all_auth')->with('all_auth', $all_auth);
    }

    public function add_auth(){
        $this->Authlogin();
        return view('admin.auth.add_auth');
    }

    public function logout_auth(){
        $this->Authlogin();
        Auth::logout();
        return redirect('/admin')->with('message', 'Đăng xuất authentication thành công');
    }

    public function login_auth(Request $request){
        $this->validate($request,[
            'admin_email' => 'required|email|max:255',
            'admin_password' => 'required|max:255',
        ]);
        //$data = $request->all();
        if(Auth::attempt(['admin_email' => $request->admin_email, 'admin_password' => $request->admin_password])){
            return redirect('/dashboard');
        }else{
            return redirect('/admin')->with('message', 'Lỗi đăng nhập authentication');
        }
    }

    public function save_auth(Request $request){
        $this->Authlogin();
        $data = $request->all();
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

    public function validation($request){
        return $this->validate($request,[
            'admin_name' => 'required|max:255',
            'admin_email' => 'required|email|max:255',
            'admin_phone' => 'required|max:255',
            'admin_password' => 'required|max:255',
        ]);
    }

    public function edit_auth($admin_id){
        $this->Authlogin();
        $edit_admin = Admin::where('admin_id', $admin_id)->get();
        return view('admin.auth.edit_auth')->with('edit_admin', $edit_admin);
    }


    public function update_auth(Request $request, $admin_id) {
        $this->Authlogin();
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
        $this->Authlogin();
        $admin = Admin::find($admin_id);
        unlink('public/uploads/admin/'.$admin->admin_image);
        $admin->delete();
        return Redirect::to('/all-auth')->with('message', 'Xóa người dùng thành công');
    }

}
