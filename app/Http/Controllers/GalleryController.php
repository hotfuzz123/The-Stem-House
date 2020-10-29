<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Product;
use App\Gallery;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class GalleryController extends Controller
{
    public function Authlogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('/dashboard');
        } else{
            return Redirect::to('/admin')->send();
        }
    }

    public function add_gallery($product_id){
        //$this->Authlogin();
        $pro_id = $product_id;
        return view('admin.gallery.add_gallery')->with(compact('pro_id'));
    }

    public function insert_gallery(Request $request, $pro_id){
        $get_image = $request->file('file');
        if($get_image){
            foreach($get_image as $image){
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                $get_image->move('public/uploads/gallery/', $new_image);
                $gallery = new Gallery();
                $gallery->gallery_name = $new_image;
                $gallery->gallery_image = $new_image;
                $gallery->product_id = $pro_id;
                $gallery->save();
            }
        }
        Session::put('message', 'Thêm thư viện ảnh thành công');
        return redirect()->back();
    }


    public function select_gallery(Request $request){
        //$this->Authlogin();
        $product_id = $request->pro_id;
        $gallery = Gallery::where('product_id', $product_id)->get();
        $gallery_count = $gallery->count();
        $output = '
        <table
            class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer"
            style="width: 100%;" id="example4" role="grid" aria-describedby="example4_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1"
                        colspan="1" aria-sort="ascending"
                        aria-label=":activate to sort column descending" style="width: 135px;">
                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                            <input type="checkbox" class="group-checkable"
                                data-set="#sample_1 .checkboxes">
                            <span></span>
                        </label>
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                        colspan="1" aria-label=" Username : activate to sort column ascending"
                        style="width: 225px;"> Thứ tự </th>
                    <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                        colspan="1" aria-label=" Username : activate to sort column ascending"
                        style="width: 225px;"> Tên hình ảnh </th>
                    <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                        colspan="1" aria-label=" Username : activate to sort column ascending"
                        style="width: 225px;"> Hình ảnh </th>
                    <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                        colspan="1" aria-label=" Actions : activate to sort column ascending"
                        style="width: 193px;"> Quản lý </th>
                </tr>
            </thead>
            <tbody>
        ';
        if($gallery_count > 0){
            $i = 0;
            foreach($gallery as $key => $gal){
                $i++;
                $output.= '
                <tr class="gradeX odd" role="row">
                    <td class="sorting_1">
                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                            <input type="checkbox" class="checkboxes" value="1">
                            <span></span>
                        </label>
                    </td>
                    <td>'.$i.'</td>
                    <td>'.$gal->gallery_name.'</td>
                    <td><img src="'.url('public/uploads/gallery/'.$gal->gallery_image).'" height="100" width="auto" style="display: block; margin:0 auto;"></td>
                    <td class="valigntop">
                        <div class="btn-group">
                            <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                type="button" data-toggle="dropdown" aria-expanded="false">
                                Actions
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-left" role="menu">
                                <li>
                                    <a href="">
                                        <i class="far fa-edit"></i> Cập nhật </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="far fa-trash-alt"></i> Xóa </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

                ';
            }
        }else{
            $output.= '
            <tr class="gradeX odd" role="row">
                <td class="sorting_1">
                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                        <input type="checkbox" class="checkboxes" value="1">
                        <span></span>
                    </label>
                </td>
                <td class="sorting_1">
                    0
                </td>
                <td class="sorting_1">
                    Có hình đâu mà đòi có tên
                </td>
                <td class="sorting_1">
                    Sản phẩm không có hình ảnh nào
                </td>
                <td class="valigntop">
                        <div class="btn-group">
                            <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                type="button" data-toggle="dropdown" aria-expanded="false">
                                Actions
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-left" role="menu">

                            </ul>
                        </div>
                    </td>
            </tr>

            ';
        }
        echo $output;

    }

}
