@extends('admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Thêm khóa học</div>
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
                    href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Thêm khóa học</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            <form action="{{URL::to('/save-course') }}" method="POST" id="demoForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="simpleFormEmail">Tên khóa học</label>
                    <input type="text" name="course_name" class="form-control" onkeyup="ChangeToSlug();" id="slug">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Slug khóa học</label>
                    <input type="text" name="course_slug" class="form-control" id="convert_slug">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Giá khóa học</label>
                    <input type="text" name="course_price" class="form-control" id="simpleFormEmail">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh bìa khóa học</label>
                    <input type="file" name="course_image" class="form-control" id="simpleFormEmail">
                </div>
                <div class="form-group">
                    <label>Mô tả khóa học</label>
                    <textarea class="form-control" name="course_desc" rows="3" id="editor-product-1" placeholder="Mô tả khóa học..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;"></textarea>
                </div>
                <div class="form-group">
                    <label>Nội dung khóa học</label>
                    <textarea class="form-control" name="course_content" rows="3" id="editor-product-2" placeholder="Nội dung khóa học..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;"></textarea>
                </div>
                <div class="form-group">
                    <label>Danh mục khóa học</label>
                    <select name="course_cate" class="form-control">
                        @foreach ($cate_course as $key => $cate)
                            <option value="{{$cate -> category_id}}">{{$cate -> category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Hiển thị</label>
                    <select name="course_status" class="form-control">
                        <option value="0">Hiển thị</option>
                        <option value="1">Ẩn</option>
                    </select>
                </div>
                <button type="submit"  name="add_course" class="btn btn-primary">Thêm khóa học mới</button>
            </form>
        </div>
    </div>
</div>
@endsection
