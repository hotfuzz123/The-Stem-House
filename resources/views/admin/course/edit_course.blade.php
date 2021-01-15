@extends('layouts.admin_layout.admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Cập nhật khóa học</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ URL::to('/admin/dashboard') }}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Cập nhật khóa học</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            @foreach ($edit_course as $key => $pro)
            <form action="{{ URL::to('/update-course/'.$pro->course_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="simpleFormEmail">Tên khóa học</label>
                    <input type="text" name="course_name" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{ $pro ->course_name }}">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Slug khóa học</label>
                    <input type="text" name="course_slug" class="form-control" id="convert_slug" value="{{ $pro ->course_slug }}">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Giá khóa học</label>
                    <input type="text" name="course_price" class="form-control" id="simpleFormEmail" value="{{ $pro ->course_price }}">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh bìa khóa học</label>
                    <input type="file" name="course_image" class="form-control" id="simpleFormEmail">
                    <img src="{{ URL::to('uploads/course/' .$pro->course_image)}}" height="100" width="100">
                </div>
                <div class="form-group">
                    <label>Mô tả khóa học</label>
                    <textarea class="form-control" name="course_desc" rows="3" id="editor-product-1" style="margin-top: 0px; margin-bottom: 0px; height: 163px;">{{ $pro ->course_desc }}</textarea>
                </div>
                <div class="form-group">
                    <label>Nội dung khóa học</label>
                    <textarea class="form-control" name="course_content" rows="3" id="editor-product-2" style="margin-top: 0px; margin-bottom: 0px; height: 163px;">{{ $pro ->course_content }}</textarea>
                </div>
                <div class="form-group">
                    <label>Danh mục khóa học</label>
                    <select name="course_cate" class="form-control">
                        @foreach ($cate_course as $key => $cate)
                            @if($cate->category_id==$pro->category_id)
                            <option selected value="{{$cate -> category_id}}">{{$cate ->category_name}}</option>
                            @else
                            <option value="{{$cate -> category_id}}">{{$cate ->category_name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit"  name="add_course" class="btn btn-primary">Cập nhật khóa học</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
