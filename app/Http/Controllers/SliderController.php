<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Slider;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class SliderController extends Controller
{
    public function Authlogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('/dashboard');
        } else{
            return Redirect::to('/admin')->send();
        }
    }

    public function all_slider(){
        $this->Authlogin();
        $all_slider = Slider::all();
        return view('admin.slider.all_slider')->with('all_slider', $all_slider);
    }

    public function add_slider(){
        $this->Authlogin();
        return view('admin.slider.add_slider');
    }

    public function save_slider(Request $request){
        $this->Authlogin();
        $data = $request->all();
        $slider = new Slider();
        $slider->slider_name = $data['slider_name'];
        $slider->slider_desc = $data['slider_desc'];
        $slider->slider_status = $data['slider_status'];
        $get_image = $request->file('slider_image');
        $path = 'public/uploads/slider/';

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $slider->slider_image = $new_image;
        }

        $slider->save();
        return redirect('/all-slider')->with('message', 'Thêm slider thành công');
    }

    public function unactive_slider($slider_id){
        $this->Authlogin();
        DB::table('tbl_slider')->where('slider_id', $slider_id)->update(['slider_status' => 0]);
        Session::put('message', 'Ẩn slider thành công');
        return Redirect::to('/all-slider');
    }

    public function active_slider($slider_id){
        $this->Authlogin();
        DB::table('tbl_slider')->where('slider_id', $slider_id)->update(['slider_status' => 1]);
        Session::put('message', 'Hiển thị slider thành công');
        return Redirect::to('/all-slider');
    }

    public function edit_slider($slider_id){
        $this->Authlogin();
        $edit_slider = Slider::where('slider_id', $slider_id)->get();
        $manager_slider = view('admin.slider.edit_slider')->with('edit_slider', $edit_slider);
        return view('admin_layout')->with('admin.slider.edit_slider', $manager_slider);

    }


    public function update_slider(Request $request, $slider_id) {
        $this->Authlogin();
        $data = $request->all();
        $slider = Slider::find($slider_id);
        $slider->slider_name = $data['slider_name'];
        $slider->slider_desc = $data['slider_desc'];
        $get_image = $request->file('slider_image');
        $path = 'public/uploads/slider/';

        if($get_image){
            unlink($path.$slider->slider_image);
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $slider->slider_image = $new_image;
        }
        $slider->save();
        return Redirect::to('/all-slider')->with('message', 'Cập nhật slider thành công');
    }

    public function delete_slider($slider_id) {
        $this->Authlogin();
        $slider = Slider::find($slider_id);
        unlink('public/uploads/slider/'.$slider->slider_image);
        $slider->delete();
        return Redirect::to('/all-slider')->with('message', 'Xóa slider thành công');
    }
}
