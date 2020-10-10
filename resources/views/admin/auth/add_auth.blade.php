@extends('admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Thêm người dùng</div>
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
            <li class="active">Thêm người dùng</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            <form action="{{URL::to('/save-auth') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="simpleFormEmail">Nhập Họ & Tên</label>
                    <input type="text" name="admin_name" class="form-control" placeholder="Nhập Họ & Tên">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh đại diện</label>
                    <input type="file" name="admin_image" class="form-control" id="simpleFormEmail">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Nhập Email</label>
                    <input type="text" name="admin_email" class="form-control" placeholder="Nhập Email">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Nhập Số Điện Thoại</label>
                    <input type="text" name="admin_phone" class="form-control" placeholder="Nhập Số Điện Thoại">
                </div>
                <div class="form-group">
                    <label>Chức vụ</label>
                    <select name="admin_type" class="form-control">
                        <option>Admin</option>
                        <option>Giáo viên</option>
                        <option>Viết báo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Nhập Mật Khẩu</label>
                    <input type="password" name="admin_password" class="form-control" placeholder="Nhập Mật Khẩu">
                </div>
                <button type="submit"  name="add_category_course" class="btn btn-primary">Thêm người dùng mới</button>
            </form>
        </div>
    </div>
</div>
@endsection
