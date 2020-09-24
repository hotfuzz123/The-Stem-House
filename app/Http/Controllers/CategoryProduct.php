<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\CateProduct;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function Authlogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('/dashboard');
        } else{
            return Redirect::to('/admin')->send();
        }
    }

    public function add_category_product(){
        $this->Authlogin();
        return view('admin.add_category_product');
    }

    public function all_category_product(){
        $this->Authlogin();
        $all_category_product = CateProduct::all();
        // $all_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product', $all_category_product);
        return view('admin_layout')->with('admin.all_category_product', $manager_category_product);
    }

    public function save_category_product(Request $request){
        $this->Authlogin();
        // $data = $request->all();
        // $CateProduct = new CateProduct();
        // $CateProduct->category_name = $data['category_product_name'];
        // $CateProduct->slug_category_product = $data['slug_category_product'];
        // $CateProduct->meta_keywords = $data['category_product_keywords'];
        // $CateProduct->category_desc = $data['category_product_desc'];
        // $CateProduct->category_status = $data['category_product_status'];
        // $CateProduct->save();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['meta_keywords'] = $request->category_product_keywords;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;
        DB::table('tbl_category_product')->insert($data);
        Session::put('message', 'Thêm danh mục sản phẩm thành công');
        return Redirect::to('/all-category-product');
    }

    public function unactive_category_product($category_product_id){
        // Ẩn danh mục
        $this->Authlogin();
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 1]);
        Session::put('message', 'Ẩn danh mục sản phẩm thành công');
        return Redirect::to('/all-category-product');
    }

    public function active_category_product($category_product_id){
        // Hiển thị danh mục
        $this->Authlogin();
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 0]);
        Session::put('message', 'Hiển thị danh mục sản phẩm thành công');
        return Redirect::to('/all-category-product');
    }

    public function edit_category_product($category_product_id){
        $this->Authlogin();
        // $edit_category_product = CateProduct::find($category_product_id);
        $edit_category_product = CateProduct::where('category_id', $category_product_id)->get();
        // $edit_category_product = DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
        $manager_category_product = view('admin.edit_category_product')->with('edit_category_product', $edit_category_product);
        return view('admin_layout')->with('admin.edit_category_product', $manager_category_product);

    }

    public function update_category_product(Request $request, $category_product_id) {
        $this->Authlogin();
        // $data = $request->all();
        // $CateProduct = CateProduct::find($category_product_id);
        // $CateProduct->category_name = $data['category_product_name'];
        // $CateProduct->category_desc = $data['category_product_desc'];
        // $CateProduct->save();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        $data['meta_keywords'] = $request->category_product_keywords;
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update($data);
        Session::put('message', 'Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('/all-category-product');
    }

    public function delete_category_product($category_product_id) {
        $this->Authlogin();
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->delete();
        Session::put('message', 'Xóa danh mục sản phẩm thành công');
        return Redirect::to('/all-category-product');
    }

    //End Function Admin Page

    public function show_category_home($slug_category_product) {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();

        $category_by_id = DB::table('tbl_product')
        ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
        ->where('tbl_category_product.slug_category_product',$slug_category_product)->get();

        // foreach($cate_product as $key => $val){
        //     // SEO
        //     $meta_desc = $val->$category_desc;
        //     $meta_keywords = $val->$meta_keywords;
        //     $meta_title = $val->$category_name;
        //     $url_canonical = $request->url();
        // }

        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.slug_category_product', $slug_category_product )->limit(1)->get();
        return view('pages.category.show_category')
        ->with('category', $cate_product)->with('category_by_id', $category_by_id)->with('category_name', $category_name);
        // ->with(compact('meta_desc', 'meta_keywords', 'meta_title', 'url_canonical'));
        // ->with('meta_desc', $meta_desc)->with('meta_keywords', $meta_keywords)->with('meta_title', $meta_title)->with('url_canonical', $url_canonical);

    }

}
