@extends('admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Cập nhật người dùng</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ URL::to('/admin/dashboard') }}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Cập nhật người dùng</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            @foreach ($edit_admin as $key => $auth)
            <form action="{{ URL::to('/update-auth/'.$auth->admin_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="simpleFormEmail">Nhập Họ & Tên</label>
                    <input type="text" name="admin_name" class="form-control" value="{{ $auth ->admin_name }}">
                    @if ($errors->has('admin_name'))
                    <span class="text-danger">{{ $errors->first('admin_name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh đại diện</label>
                    <input type="file" name="admin_image" class="form-control" id="simpleFormEmail">
                    <img src="{{ URL::to('uploads/admin/' .$auth->admin_image)}}" height="100" width="100">
                    @if ($errors->has('admin_image'))
                    <span class="text-danger">{{ $errors->first('admin_image') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Nhập Email</label>
                    <input type="text" name="admin_email" class="form-control" value="{{ $auth ->admin_email }}">
                    @if ($errors->has('admin_email'))
                    <span class="text-danger">{{ $errors->first('admin_email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Nhập Số Điện Thoại</label>
                    <input type="text" name="admin_phone" class="form-control" value="{{ $auth ->admin_phone }}">
                    @if ($errors->has('admin_phone'))
                    <span class="text-danger">{{ $errors->first('admin_phone') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Chức vụ</label>
                    <select name="admin_type" class="form-control">
                        <option value="" selected>Chọn chức vụ...</option>
                        <option>Admin</option>
                        <option>Giáo viên</option>
                        <option>Viết báo</option>
                    </select>
                    @if ($errors->has('admin_type'))
                    <span class="text-danger">{{ $errors->first('admin_type') }}</span>
                    @endif
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
