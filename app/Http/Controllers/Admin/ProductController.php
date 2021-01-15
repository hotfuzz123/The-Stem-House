<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Product;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    public function add_product(){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        return view('admin.product.add_product')->with('cate_product', $cate_product);
    }

    public function all_product(){
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
        ->orderby('tbl_product.product_id', 'desc')->get();
        $manager_product = view('admin.product.all_product')->with('all_product', $all_product);
        return view('layouts.admin_layout.admin_layout')->with('admin.product.all_product', $manager_product);
    }

    public function save_product(ProductRequest $request){
        $data = $request->all();
        $product = new Product();
        $product->product_name = $data['product_name'];
        $product->product_slug = $data['product_slug'];
        $product->product_price = $data['product_price'];
        $product->product_quantity = $data['product_quantity'];
        $product->product_desc = $data['product_desc'];
        $product->product_content = $data['product_content'];
        $product->category_id = $data['product_cate'];
        $product->product_status = $data['product_status'];
        $get_image = $request->file('product_image');
        $path = 'uploads/product/';

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $product->product_image = $new_image;
        }
        $product->save();
        return Redirect::to('/all-product')->with('message', 'Thêm sản phẩm thành công');
    }

    public function unactive_product($product_id){
        $product = Product::where('product_id', $product_id)->update(['product_status' => 0]);
        return Redirect::to('/all-product')->with('message', 'Ẩn sản phẩm thành công');
    }

    public function active_product($product_id){
        $product = Product::where('product_id', $product_id)->update(['product_status' => 1]);
        return Redirect::to('/all-product')->with('message', 'Hiển thị sản phẩm thành công');
    }

    public function edit_product($product_id){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id', $product_id)->get();
        $manager_product = view('admin.product.edit_product')->with('edit_product', $edit_product)
        ->with('cate_product', $cate_product);
        return view('layouts.admin_layout.admin_layout')->with('admin.product.edit_product', $manager_product);
    }

    public function update_product(ProductRequest $request, $product_id) {
        $data = $request->all();
        $product = Product::find($product_id);
        $product->product_name = $data['product_name'];
        $product->product_slug = $data['product_slug'];
        $product->product_price = $data['product_price'];
        $product->product_quantity = $data['product_quantity'];
        $product->product_desc = $data['product_desc'];
        $product->product_content = $data['product_content'];
        $product->category_id = $data['product_cate'];
        $get_image = $request->file('product_image');
        $path = 'uploads/product/';

        if($get_image){
            unlink($path.$product->product_image);
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $product->product_image = $new_image;
        }
        $product->save();
        return Redirect::to('/all-product')->with('message', 'Cập nhật sản phẩm thành công');
    }

    public function delete_product($product_id) {
        $product = Product::find($product_id);
        unlink('uploads/product/'.$product->product_image);
        $product->delete();
        return Redirect::to('/all-product')->with('message', 'Xóa sản phẩm thành công');
    }

    //End Admin Page
    public function details_product($product_slug) {

        $details_product = DB::table('tbl_product')
        ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
        ->where('tbl_product.product_slug',$product_slug)->get();

        foreach($details_product as $key => $value){
            $category_id = $value->category_id;
        }

        // Sản phẩm liên quan
        $related_product = DB::table('tbl_product')
        ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
        ->where('tbl_category_product.category_id', $category_id)
        ->whereNotIn('tbl_product.product_slug',[$product_slug])->inRandomOrder()->take(6)->get();

        return view('pages.shop.shop_details')->with('product_details', $details_product)->with('relate', $related_product);
    }

}
