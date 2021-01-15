<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB, Session, Log, Auth, Hash, Image;
use App\Admin;
use App\Roles;
use App\Product;
use App\Course;
use App\Http\Requests;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.admin_dashboard');
    }

    public function password(){
        $adminPassword = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        return view('admin.admin_password')->with(compact('adminPassword'));
    }

    public function login(Request $request){
        if($request -> isMethod('post')){
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect('admin/dashboard');
            } else {
                return redirect('/admin')->with('error_message', 'Email hoặc mật khẩu sai !!!');
            }
        }
        return view('admin.admin_login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin')->with('success_message', 'Đăng xuất admin thành công');
    }

    public function chkCurrentPassword(Request $request){
        $data = $request->all();
        //echo "<pre>"; print_r($data); die;
        //echo "<pre>"; print_r(Auth::guard('admin')->user()); die;
        if(Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)){
            echo "true";
        }else{
            echo "false";
        }
    }

    public function updateCurrentPassword(Request $request){
        if($request -> isMethod('post')){
            $data = $request->all();
            if(Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)){
                // Check new pwd and confirm pwd are same
                if ($data['new_pwd'] == $data['confirm_pwd']) {
                    Admin::where('id', Auth::guard('admin')->user()->id)->update(['password' => bcrypt($data['new_pwd'])]);
                    Session::flash('success_message', 'Mật khẩu được cập nhật thành công!');
                // Check new pwd and confirm pwd are not same
                } else {
                    Session::flash('error_message', 'Mật khẩu mới và xác nhận mật khẩu không giống nhau !!!');
                    return redirect()->back();
                }
            }else{
                Session::flash('error_message', 'Mật khẩu hiện tại sai rồi !!!');
                return redirect()->back();
            }
            return redirect()->back();
        }
    }

    public function settings(Request $request){
        if($request -> isMethod('post')){
            $data = $request->all();
            // Path of Image
            $path = 'uploads/admin/';

            if($request->hasFile('admin_image')){
                $image_tmp = $request->file('admin_image');
                if($image_tmp->isValid()){
                    // Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = $path.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->resize(250, 250)->save($imagePath);
                }
            }else if(!empty($data['current_admin_image'])){
                $imageName = $data['current_admin_image'];
            }else{
                $imageName = "";
            }

            Admin::where('email', Auth::guard('admin')->user()->email)
            ->update([
                'name' => $data['admin_name'],
                'mobile' => $data['admin_mobile'],
                'image' => $imageName
            ]);
            Session::flash('success_message', 'Cập nhật tài khoản Admin thành công !');
            return redirect()->back();
        }
        return view('admin.admin_settings');
    }


























}
