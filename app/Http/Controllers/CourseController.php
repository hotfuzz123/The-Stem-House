<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CourseController extends Controller
{
    public function Authlogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('/dashboard');
        } else{
            return Redirect::to('/admin')->send();
        }
    }

    public function add_course(){
        $this->Authlogin();
        $cate_course = DB::table('tbl_category_course')->orderby('category_id', 'desc')->get();
        return view('admin.course.add_course')->with('cate_course', $cate_course);
    }

    public function all_course(){
        $this->Authlogin();
        $all_course = DB::table('tbl_course')
        ->join('tbl_category_course', 'tbl_category_course.category_id', '=', 'tbl_course.category_id')
        ->orderby('tbl_course.course_id', 'desc')->get();
        $manager_course = view('admin.course.all_course')->with('all_course', $all_course);
        return view('admin_layout')->with('admin.course.all_course', $manager_course);

    }

    public function save_course(Request $request){
        $this->Authlogin();
        $data = array();
        $data['course_name'] = $request->course_name;
        $data['course_slug'] = $request->course_slug;
        $data['course_price'] = $request->course_price;
        $data['course_image'] = $request->course_image;
        $data['course_desc'] = $request->course_desc;
        $data['course_content'] = $request->course_content;
        $data['category_id'] = $request->course_cate;
        $data['course_status'] = $request->course_status;
        $get_image = $request->file('course_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/course', $new_image);
            $data['course_image'] = $new_image;
            DB::table('tbl_course')->insert($data);
            Session::put('message', 'Thêm khóa học thành công');
            return Redirect::to('all-course');
        }
        $data['course_image'] = '';
        DB::table('tbl_course')->insert($data);
        Session::put('message', 'Thêm khóa học thành công');
        return Redirect::to('/add-course');
    }

    public function unactive_course($course_id){
        $this->Authlogin();
        DB::table('tbl_course')->where('course_id', $course_id)->update(['course_status' => 1]);
        Session::put('message', 'Ẩn khóa học thành công');
        return Redirect::to('/all-course');
    }

    public function active_course($course_id){
        $this->Authlogin();
        DB::table('tbl_course')->where('course_id', $course_id)->update(['course_status' => 0]);
        Session::put('message', 'Hiển thị khóa học thành công');
        return Redirect::to('/all-course');
    }

    public function edit_course($course_id){
        $this->Authlogin();
        $cate_course = DB::table('tbl_category_course')->orderby('category_id', 'desc')->get();
        $edit_course = DB::table('tbl_course')->where('course_id', $course_id)->get();
        $manager_course = view('admin.course.edit_course')->with('edit_course', $edit_course)
        ->with('cate_course', $cate_course);
        return view('admin_layout')->with('admin.course.edit_course', $manager_course);

    }


    public function update_course(Request $request, $course_id) {
        $this->Authlogin();
        $data = array();
        $data['course_name'] = $request->course_name;
        $data['course_slug'] = $request->course_slug;
        $data['course_price'] = $request->course_price;
        $data['course_desc'] = $request->course_desc;
        $data['course_content'] = $request->course_content;
        $data['category_id'] = $request->course_cate;
        $get_image = $request->file('course_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/course', $new_image);
            $data['course_image'] = $new_image;
            DB::table('tbl_course')->where('course_id', $course_id)->update($data);
            Session::put('message', 'cập nhật khóa học thành công');
            return Redirect::to('all-course');
        }

        DB::table('tbl_course')->where('course_id', $course_id)->update($data);
        Session::put('message', 'cập nhật khóa học thành công');
        return Redirect::to('/all-course');
    }

    public function delete_course($course_id) {
        $this->Authlogin();
        DB::table('tbl_course')->where('course_id', $course_id)->delete();
        Session::put('message', 'Xóa khóa học thành công');
        return Redirect::to('/all-course');
    }

    //End Admin Page
    public function details_course(){
        return view('pages.course.course_details');
    }
}
