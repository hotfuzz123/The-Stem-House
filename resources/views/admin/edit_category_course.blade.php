@extends('admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Cập nhật danh mục khóa học</div>
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
            <li class="active">Cập nhật danh mục khóa học</li>
        </ol>
    </div>
</div>
<div class="col-md-9 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            @foreach ($edit_category_course as $key => $edit_value)
            <form action="{{URL::to('/update-category-course/ .edit_value->category_id') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="simpleFormEmail">Tên danh mục</label>
                    <input type="text" value="{{ $edit_value ->category_name }}" name="category_course_name" class="form-control" id="simpleFormEmail"
                        placeholder="Tên danh mục">
                </div>
                <div class="form-group">
                    <label>Mô tả danh mục</label>
                    <textarea class="form-control" name="category_course_desc" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 163px;">{{$edit_value ->category_desc }}</textarea>
                </div>
                <button type="submit"  name="add_category_course" class="btn btn-primary">Cập nhật danh mục</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
