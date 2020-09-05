<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Log;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function shop(){
        $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '0')->orderby('product_id', 'desc')->get();

        return view('pages.shop.shop')->with('category', $cate_product)->with('all_product', $all_product);
    }

    public function contact(){
        return view('pages.contact');
    }
}
