<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Course;
use App\CateCourse;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CourseController extends Controller
{
    public function add_course(){
        $cate_course = DB::table('tbl_category_course')->orderby('category_id', 'desc')->get();
        return view('admin.course.add_course')->with('cate_course', $cate_course);
    }

    public function all_course(){
        $all_course = DB::table('tbl_course')
        ->join('tbl_category_course', 'tbl_category_course.category_id', '=', 'tbl_course.category_id')
        ->orderby('tbl_course.course_id', 'desc')->get();
        $manager_course = view('admin.course.all_course')->with('all_course', $all_course);
        return view('admin_layout')->with('admin.course.all_course', $manager_course);

    }

    public function save_course(Request $request){
        $data = $request->all();
        $course = new Course();
        $course->course_name = $data['course_name'];
        $course->course_slug = $data['course_slug'];
        $course->course_price = $data['course_price'];
        $course->course_desc = $data['course_desc'];
        $course->course_content = $data['course_content'];
        $course->category_id = $data['course_cate'];
        $course->course_status = $data['course_status'];
        $get_image = $request->file('course_image');
        $path = 'public/uploads/course/';

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $course->course_image = $new_image;
        }

        $course->save();
        return redirect('/all-course')->with('message', 'Thêm khóa học thành công');

    }

    public function unactive_course($course_id){
        DB::table('tbl_course')->where('course_id', $course_id)->update(['course_status' => 0]);
        Session::put('message', 'Ẩn khóa học thành công');
        return Redirect::to('/all-course');
    }

    public function active_course($course_id){
        DB::table('tbl_course')->where('course_id', $course_id)->update(['course_status' => 1]);
        Session::put('message', 'Hiển thị khóa học thành công');
        return Redirect::to('/all-course');
    }

    public function edit_course($course_id){
        $cate_course = DB::table('tbl_category_course')->orderby('category_id', 'desc')->get();
        $edit_course = DB::table('tbl_course')->where('course_id', $course_id)->get();
        $manager_course = view('admin.course.edit_course')->with('edit_course', $edit_course)
        ->with('cate_course', $cate_course);
        return view('admin_layout')->with('admin.course.edit_course', $manager_course);

    }

    public function update_course(Request $request, $course_id) {
        $data = $request->all();
        $course = Course::find($course_id);
        $course->course_name = $data['course_name'];
        $course->course_slug = $data['course_slug'];
        $course->course_price = $data['course_price'];
        $course->course_desc = $data['course_desc'];
        $course->course_content = $data['course_content'];
        $course->category_id = $data['course_cate'];
        $get_image = $request->file('course_image');
        $path = 'public/uploads/course/';

        if($get_image){
            unlink($path.$course->course_image);
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $course->course_image = $new_image;
        }
        $course->save();
        return Redirect::to('/all-course')->with('message', 'Cập nhật khóa học thành công');
    }

    public function delete_course($course_id) {
        $course = Course::find($course_id);
        unlink('public/uploads/course/'.$course->course_image);
        $course->delete();
        return Redirect::to('/all-course')->with('message', 'Xóa khóa học thành công');
    }

    //End Admin Page
    public function details_course($course_slug){

        $details_course = DB::table('tbl_course')
        ->join('tbl_category_course', 'tbl_category_course.category_id', '=', 'tbl_course.category_id')
        ->where('tbl_course.course_slug',$course_slug)->get();

        foreach($details_course as $key => $value){
            $category_id = $value->category_id;
        }

        // Sản phẩm liên quan
        $related_course = DB::table('tbl_course')
        ->join('tbl_category_course', 'tbl_category_course.category_id', '=', 'tbl_course.category_id')
        ->where('tbl_category_course.category_id', $category_id)
        ->whereNotIn('tbl_course.course_slug',[$course_slug])->take(3)->get();

        return view('pages.course.course_details')->with('course_details', $details_course)->with('relate', $related_course);
    }
}
