@extends('admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Cập nhật người dùng</div>
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
            <li class="active">Cập nhật người dùng</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            @foreach ($edit_admin as $key => $auth)
            <form action="{{URL::to('/update-auth/'.$auth->admin_id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="simpleFormEmail">Nhập Họ & Tên</label>
                    <input type="text" name="admin_name" class="form-control" value="{{ $auth ->admin_name }}">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh đại diện</label>
                    <input type="file" name="admin_image" class="form-control" id="simpleFormEmail">
                    <img src="{{URL::to('public/uploads/admin/' .$auth->admin_image)}}" height="100" width="100">

                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Nhập Email</label>
                    <input type="text" name="admin_email" class="form-control" value="{{ $auth ->admin_email }}">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Nhập Số Điện Thoại</label>
                    <input type="text" name="admin_phone" class="form-control" value="{{ $auth ->admin_phone }}">
                </div>
                {{-- <div class="form-group">
                    <label for="simpleFormEmail">Nhập Mật Khẩu</label>
                    <input type="password" name="admin_password" class="form-control" value="{{ $auth ->admin_password }}">
                </div> --}}
                <button type="submit"  name="edit_auth" class="btn btn-primary">Cập nhật người dùng</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
