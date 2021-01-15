@extends('layouts.admin_layout.admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Đổi mật khẩu Admin</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ URL::to('/admin/dashboard') }}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Đổi mật khẩu Admin</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="panel">
        <header class="menuBar">Đổi mật khẩu Admin </header>
        <div class="panel-body">

            @include('partials.messages')

            <form action="{{ URL::to('/admin/update-current-pwd') }}" method="POST" name="updatePasswordForm" id="updatePasswordForm" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="simpleFormEmail">Mật Khẩu Hiện Tại</label>
                    <input type="password" name="current_pwd" id="current_pwd" class="form-control" placeholder="Nhập Mật Khẩu Hiện Tại">
                    <span id="chkCurrentPwd"></span>
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Mật Khẩu Mới</label>
                    <input type="password" name="new_pwd" id="new_pwd" class="form-control" placeholder="Nhập Mật Khẩu Mới">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Xác Nhận Mật Khẩu Mới</label>
                    <input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control"  placeholder="Xác Nhận Mật Khẩu Mới">
                </div>
                <button type="submit"  name="add_course" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
