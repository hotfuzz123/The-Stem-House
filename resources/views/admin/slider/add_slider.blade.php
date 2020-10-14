@extends('admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Thêm slider</div>
            <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">'.$message. '</span>';
                Session::put('message', null);
            }
            ?>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="index.html">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Thêm slider</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            <form action="{{URL::to('/save-slider') }}" method="POST" id="demoForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="simpleFormEmail">Tên slider</label>
                    <input type="text" name="slider_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh bìa slider</label>
                    <input type="file" name="slider_image" class="form-control" id="simpleFormEmail">
                </div>
                <div class="form-group">
                    <label>Mô tả slider</label>
                    <textarea class="form-control" name="slider_desc" rows="3" id="editor-slider-1" placeholder="Mô tả slider..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;"></textarea>
                </div>
                <div class="form-group">
                    <label>Hiển thị</label>
                    <select name="slider_status" class="form-control">
                        <option value="1">Hiển thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>
                <button type="submit"  name="add_slider" class="btn btn-primary">Thêm slider mới</button>
            </form>
        </div>
    </div>
</div>
@endsection
