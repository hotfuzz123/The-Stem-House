@extends('layouts.admin_layout.admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Cập nhật thông tin Admin</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ URL::to('/admin/dashboard') }}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Cập nhật thông tin Admin</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="panel">
        <header class="menuBar">Cập nhật thông tin Admin </header>
        <div class="panel-body">

            @include('partials.messages')

            <form action="{{ URL::to('/admin/settings') }}" method="POST" name="settings" id="settings" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="simpleFormEmail">Tên Admin</label>
                    <input type="text" name="admin_name" id="admin_name" class="form-control" value="{{ Auth::guard('admin')->user()->name }}" placeholder="Nhập Tên Admin">
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Email Admin</label>
                    <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->email }}" placeholder="Nhập Email Admin" readonly>
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Chức vụ Admin</label>
                    <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->type }}" placeholder="Nhập Chức vụ Admin" readonly >
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Mobile</label>
                    <input type="text" name="admin_mobile" id="admin_mobile" class="form-control" value="{{ Auth::guard('admin')->user()->mobile }}" placeholder="Nhập SĐT">
                    @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh đại diện Admin</label>
                    <input type="file" name="admin_image" id="admin_image" class="form-control" accept="image/*">
                    @if(!empty(Auth::guard('admin')->user()->image))
                    <a href="{{ url('uploads/admin/'.Auth::guard('admin')->user()->image) }}" target="_blank">Xem hình ảnh</a>
                    <input type="hidden" name="current_admin_image" value="{{ Auth::guard('admin')->user()->image }}">
                    @endif
                </div>
                <button type="submit"  name="add_course" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
