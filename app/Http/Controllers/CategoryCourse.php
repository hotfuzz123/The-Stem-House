<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Course;
use App\CateCourse;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryCourse extends Controller
{
    public function add_category_course(){
        return view('admin.add_category_course');
    }

    public function all_category_course(){
        $all_category_course = DB::table('tbl_category_course')->get();
        $manager_category_course = view('admin.all_category_course')->with('all_category_course', $all_category_course);
        return view('admin_layout')->with('admin.all_category_course', $manager_category_course);
    }

    public function save_category_course(Request $request){
        $data = array();
        $data['category_name'] = $request->category_course_name;
        $data['slug_category_course'] = $request->slug_category_course;
        $data['meta_keywords'] = $request->category_course_keywords;
        $data['category_desc'] = $request->category_course_desc;
        $data['category_status'] = $request->category_course_status;

        DB::table('tbl_category_course')->insert($data);
        Session::put('message', 'Thêm danh mục khóa học thành công');
        return Redirect::to('/all-category-course');
    }

    public function unactive_category_course($category_course_id){
        DB::table('tbl_category_course')->where('category_id', $category_course_id)->update(['category_status' => 0]);
        Session::put('message', 'Ẩn danh mục khóa học thành công');
        return Redirect::to('/all-category-course');
    }

    public function active_category_course($category_course_id){
        DB::table('tbl_category_course')->where('category_id', $category_course_id)->update(['category_status' => 1]);
        Session::put('message', 'Hiển thị danh mục khóa học thành công');
        return Redirect::to('/all-category-course');
    }

    public function edit_category_course($category_course_id){
        $edit_category_course = DB::table('tbl_category_course')->where('category_id', $category_course_id)->get();
        $manager_category_course = view('admin.edit_category_course')->with('edit_category_course', $edit_category_course);
        return view('admin_layout')->with('admin.edit_category_course', $manager_category_course);

    }

    public function update_category_course(Request $request, $category_course_id) {
        $data = array();
        $data['category_name'] = $request->category_course_name;
        $data['slug_category_course'] = $request->slug_category_course;
        $data['meta_keywords'] = $request->category_course_keywords;
        $data['category_desc'] = $request->category_course_desc;
        DB::table('tbl_category_course')->where('category_id', $category_course_id)->update($data);
        Session::put('message', 'Cập nhật danh mục khóa học thành công');
        return Redirect::to('/add-category-course');
    }

    public function delete_category_course($category_course_id) {
        DB::table('tbl_category_course')->where('category_id', $category_course_id)->delete();
        Session::put('message', 'Xóa danh mục khóa học thành công');
        return Redirect::to('/all-category-course');
    }

    public function show_category_home($slug_category_course) {
        $cate_course = DB::table('tbl_category_course')->where('category_status', '1')->orderby('category_id', 'desc')->get();

        $category_by_id = Course::join('tbl_category_course', 'tbl_course.category_id', '=', 'tbl_category_course.category_id')
        ->where('tbl_category_course.slug_category_course',$slug_category_course)
        ->where('course_status', '1')
        ->orderby('course_id', 'desc')->paginate(9);

        // foreach($cate_course as $key => $val){
        //     // SEO
        //     $meta_desc = $val->$category_desc;
        //     $meta_keywords = $val->$meta_keywords;
        //     $meta_title = $val->$category_name;
        //     $url_canonical = $request->url();
        // }

        $category_name = DB::table('tbl_category_course')->where('tbl_category_course.slug_category_course', $slug_category_course )->limit(1)->get();
        return view('pages.category.show_category_course')
        ->with('category', $cate_course)->with('category_by_id', $category_by_id)->with('category_name', $category_name);
        // ->with(compact('meta_desc', 'meta_keywords', 'meta_title', 'url_canonical'));
        // ->with('meta_desc', $meta_desc)->with('meta_keywords', $meta_keywords)->with('meta_title', $meta_title)->with('url_canonical', $url_canonical);

    }
}
