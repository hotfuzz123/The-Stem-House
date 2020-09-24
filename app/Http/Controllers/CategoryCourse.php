<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryCourse extends Controller
{

    public function Authlogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('/dashboard');
        } else{
            return Redirect::to('/admin')->send();
        }
    }

    public function add_category_course(){
        $this->Authlogin();
        return view('admin.add_category_course');
    }

    public function all_category_course(){
        $this->Authlogin();
        $all_category_course = DB::table('tbl_category_course')->get();
        $manager_category_course = view('admin.all_category_course')->with('all_category_course', $all_category_course);
        return view('admin_layout')->with('admin.all_category_course', $manager_category_course);
    }

    public function save_category_course(Request $request){
        $this->Authlogin();
        $data = array();
        $data['category_name'] = $request->category_course_name;
        $data['category_desc'] = $request->category_course_desc;
        $data['category_status'] = $request->category_course_status;

        DB::table('tbl_category_course')->insert($data);
        Session::put('message', 'Thêm danh mục khóa học thành công');
        return Redirect::to('/add-category-course');
    }

    public function unactive_category_course($category_course_id){
        $this->Authlogin();
        DB::table('tbl_category_course')->where('category_id', $category_course_id)->update(['category_status' => 1]);
        Session::put('message', 'Ẩn danh mục khóa học thành công');
        return Redirect::to('/all-category-course');
    }

    public function active_category_course($category_course_id){
        $this->Authlogin();
        DB::table('tbl_category_course')->where('category_id', $category_course_id)->update(['category_status' => 0]);
        Session::put('message', 'Hiển thị danh mục khóa học thành công');
        return Redirect::to('/all-category-course');
    }

    public function edit_category_course($category_course_id){
        $this->Authlogin();
        $edit_category_course = DB::table('tbl_category_course')->where('category_id', $category_course_id)->get();
        $manager_category_course = view('admin.edit_category_course')->with('edit_category_course', $edit_category_course);
        return view('admin_layout')->with('admin.edit_category_course', $manager_category_course);

    }

    public function update_category_course(Request $request, $category_course_id) {
        $this->Authlogin();
        $data = array();
        $data['category_name'] = $request->category_course_name;
        $data['category_desc'] = $request->category_course_desc;
        DB::table('tbl_category_course')->where('category_id', $category_course_id)->update($data);
        Session::put('message', 'Cập nhật danh mục khóa học thành công');
        return Redirect::to('/add-category-course');
    }

    public function delete_category_course($category_course_id) {
        $this->Authlogin();
        DB::table('tbl_category_course')->where('category_id', $category_course_id)->delete();
        Session::put('message', 'Xóa danh mục khóa học thành công');
        return Redirect::to('/all-category-course');
    }
}
