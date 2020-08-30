@extends('admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Thêm danh mục khóa học</div>
            <?php
            $message = Session::get('message');
            if($message){
                echo $message;
                Session::put('message', null);
            }
            ?>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Thêm danh mục khóa học</li>
        </ol>
    </div>
</div>
<div class="col-md-9 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            <form action="{{URL::to('/save-category-course') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="simpleFormEmail">Tên danh mục</label>
                    <input type="text" name="category_course_name" class="form-control" id="simpleFormEmail"
                        placeholder="Tên danh mục">
                </div>
                <div class="form-group">
                    <label>Mô tả danh mục</label>
                    <textarea class="form-control" name="category_course_desc" rows="3" placeholder="Mô tả danh mục..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;"></textarea>
                </div>
                <div class="form-group">
                    <label>Hiển thị</label>
                    <select name="category_course_status" class="form-control">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiện</option>
                    </select>
                </div>
                <button type="submit"  name="add_category_course" class="btn btn-primary">Thêm danh mục mới</button>
            </form>
        </div>
    </div>
</div>
@endsection
