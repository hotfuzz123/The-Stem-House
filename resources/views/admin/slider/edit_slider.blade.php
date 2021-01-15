@extends('layouts.admin_layout.admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Cập nhật slider</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ URL::to('/admin/dashboard') }}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Cập nhật slider</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            @foreach ($edit_slider as $key => $pro)
            <form action="{{ URL::to('/update-slider/'.$pro->slider_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="simpleFormEmail">Tên slider</label>
                    <input type="text" name="slider_name" class="form-control" value="{{ $pro ->slider_name }}">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh slider</label>
                    <input type="file" name="slider_image" class="form-control" id="simpleFormEmail">
                    <img src="{{ URL::to('uploads/slider/' .$pro->slider_image)}}" height="100" width="100">
                </div>
                <div class="form-group">
                    <label>Mô tả slider</label>
                    <textarea class="form-control" name="slider_desc" rows="3" id="editor-slider-1" style="margin-top: 0px; margin-bottom: 0px; height: 163px;">{{ $pro ->slider_desc }}</textarea>
                </div>
                <button type="submit"  name="add_slider" class="btn btn-primary">Cập nhật slider</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
