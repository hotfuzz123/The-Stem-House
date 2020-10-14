<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Product;
use App\Course;
use App\Slider;
use App\CateCourse;
use App\CateProduct;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(Request $request){
        // seo
        $meta_desc = "Stemhouse Education là tổ chức giáo dục theo đuổi mục tiêu đem đến cơ hội tốt nhất cho học sinh Việt Nam tiếp cận với chương trình giáo dục bậc Tiểu Học và Trung Học dành cho học sinh bản ngữ của Anh Quốc, thông qua việc giảng dạy Toán và các môn Khoa Học bằng Tiếng Anh ngay từ sớm và xóa bỏ khoảng cách của học sinh Việt Nam và học sinh thế giới.";
        $meta_keywords = "the stem house, do iot stem, stem, stem da nang, courses, education, elearning, lms, online course, online education, stem online, stem đà nẵng";
        $meta_title = "Stemhouse Education";
        $url_canonical = $request->url();

        $all_slider = Slider::where('slider_status', '1')->orderby('slider_id', 'desc')->get();
        $all_course = DB::table('tbl_course')->where('course_status', '1')->orderby('course_id', 'desc')
        ->join('tbl_category_course', 'tbl_category_course.category_id', '=', 'tbl_course.category_id')
        ->take(4)->get();

        return view('pages.home')->with(compact('all_course', 'all_slider'))
        ->with(compact('meta_desc', 'meta_keywords', 'meta_title', 'url_canonical'));
    }

    public function shop(Request $request){
        // seo
        $meta_desc = "Stemhouse Education là tổ chức giáo dục theo đuổi mục tiêu đem đến cơ hội tốt nhất cho học sinh Việt Nam tiếp cận với chương trình giáo dục bậc Tiểu Học và Trung Học dành cho học sinh bản ngữ của Anh Quốc, thông qua việc giảng dạy Toán và các môn Khoa Học bằng Tiếng Anh ngay từ sớm và xóa bỏ khoảng cách của học sinh Việt Nam và học sinh thế giới.";
        $meta_keywords = "Cửa hàng bán hàng stem";
        $meta_title = "Shop";
        $url_canonical = $request->url();

        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'desc')->paginate(9);

        return view('pages.shop.shop')->with('category', $cate_product)->with('all_product', $all_product)
        ->with(compact('meta_desc', 'meta_keywords', 'meta_title', 'url_canonical'));
    }

    public function contact(Request $request){
        // seo
        $meta_desc = "Stemhouse Education là tổ chức giáo dục theo đuổi mục tiêu đem đến cơ hội tốt nhất cho học sinh Việt Nam tiếp cận với chương trình giáo dục bậc Tiểu Học và Trung Học dành cho học sinh bản ngữ của Anh Quốc, thông qua việc giảng dạy Toán và các môn Khoa Học bằng Tiếng Anh ngay từ sớm và xóa bỏ khoảng cách của học sinh Việt Nam và học sinh thế giới.";
        $meta_keywords = "Liên hệ The Stem House";
        $meta_title = "Contact";
        $url_canonical = $request->url();

        return view('pages.contact')
        ->with(compact('meta_desc', 'meta_keywords', 'meta_title', 'url_canonical'));
    }

    public function course(){
        $cate_course = DB::table('tbl_category_course')->where('category_status', '1')->orderby('category_id', 'desc')->get();
        $all_course = DB::table('tbl_course')->where('course_status', '1')->orderby('course_id', 'desc')
        ->join('tbl_category_course', 'tbl_category_course.category_id', '=', 'tbl_course.category_id')->paginate(9);
        return view('pages.course.course')->with('category', $cate_course)->with('all_course', $all_course);
    }

    public function post(){
        return view('pages.post.post');
    }
}
