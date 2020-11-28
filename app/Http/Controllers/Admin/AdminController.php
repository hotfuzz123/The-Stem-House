<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.admin_dashboard');
    }

    public function login(Request $request){
        if($request -> isMethod('post')){
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect('admin/dashboard');
            } else {
                return redirect('/admin')->with('message', 'Email hoặc mật khẩu sai !!!');
            }
        }
        return view('admin.admin_login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin')->with('message', 'Đăng xuất admin thành công');
    }

























}
