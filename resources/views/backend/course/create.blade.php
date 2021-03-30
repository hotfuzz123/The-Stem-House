@extends('Backend.layouts.master')
@section('content')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Thêm khóa học</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ URL::to('/admin/dashboard') }}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Thêm khóa học</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            <form action="{{ URL::to('/save-course') }}" method="POST" id="demoForm" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="simpleFormEmail">Tên khóa học</label>
                    <input type="text" name="course_name" class="form-control" onkeyup="ChangeToSlug();" id="slug">
                    @if ($errors->has('course_name'))
                    <span class="text-danger">{{ $errors->first('course_name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Slug khóa học</label>
                    <input type="text" name="course_slug" class="form-control" id="convert_slug">
                    @if ($errors->has('course_slug'))
                    <span class="text-danger">{{ $errors->first('course_slug') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Giá khóa học</label>
                    <input type="text" name="course_price" class="form-control" id="simpleFormEmail">
                    @if ($errors->has('course_price'))
                    <span class="text-danger">{{ $errors->first('course_price') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh bìa khóa học</label>
                    <input type="file" name="course_image" class="form-control" id="simpleFormEmail">
                    @if ($errors->has('course_image'))
                    <span class="text-danger">{{ $errors->first('course_image') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Mô tả khóa học</label>
                    <textarea class="form-control" name="course_desc" rows="3" id="editor-course-1" placeholder="Mô tả khóa học..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;"></textarea>
                    @if ($errors->has('course_desc'))
                    <span class="text-danger">{{ $errors->first('course_desc') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Nội dung khóa học</label>
                    <textarea class="form-control" name="course_content" rows="3" id="editor-course-2" placeholder="Nội dung khóa học..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;"></textarea>
                    @if ($errors->has('course_content'))
                    <span class="text-danger">{{ $errors->first('course_content') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Danh mục khóa học</label>
                    <select name="course_cate" class="form-control">
                        @foreach ($cate_course as $key => $cate)
                            <option value="{{$cate -> category_id}}">{{$cate -> category_name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('course_cate'))
                    <span class="text-danger">{{ $errors->first('course_cate') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Hiển thị</label>
                    <select name="course_status" class="form-control">
                        <option value="1">Hiển thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                    @if ($errors->has('course_status'))
                    <span class="text-danger">{{ $errors->first('course_status') }}</span>
                    @endif
                </div>
                <button type="submit"  name="add_course" class="btn btn-primary">Thêm khóa học mới</button>
            </form>
        </div>
    </div>
</div>

@endsection
