@extends('Backend.layouts.master')
@section('content')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Cập Nhật Thông Tin Admin</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('admin.dashboard')}}">Trang Chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li><a class="parent-item" href="#">Cài Đặt</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Cập Nhật Thông Tin Admin</li>
        </ol>
    </div>
</div>

@include('partials.messages')
<div class="col-md-12 col-sm-12">
    <div class="card card-box">
        <div class="card-head">
            <header>Cập Nhật Thông Tin Admin</header>
            <button id="panel-button1"
                class="mdl-button mdl-js-button mdl-button--icon pull-right"
                data-upgraded=",MaterialButton">
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                data-mdl-for="panel-button1">
                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                </li>
                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                </li>
                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                    here</li>
            </ul>
        </div>
        <div class="card-body" id="bar-parent1">
            <form action="{{ URL::to('/admin/settings') }}" method="POST" name="settings" id="settings" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="form-group row">
                        <label class="control-label col-md-3">Tên<span class="required"> * </span></label>
                        <div class="col-md-5">
                            <input type="text" name="admin_name" id="admin_name" class="form-control" value="{{ Auth::guard('admin')->user()->name }}" placeholder="Nhập Tên Admin">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Email<span class="required"> * </span></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->email }}" placeholder="Nhập Email Admin" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Chức vụ<span class="required"> * </span></label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->type }}" placeholder="Nhập Chức vụ Admin" readonly >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Số điện thoại<span class="required"> * </span></label>
                        <div class="col-md-5">
                            <input type="text" name="admin_mobile" id="admin_mobile" class="form-control" value="{{ Auth::guard('admin')->user()->mobile }}" placeholder="Nhập SĐT">
                            @error('mobile')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Ảnh đại diện<span class="required"> * </span></label>
                        <div class="col-md-5">
                            <input type="file" name="admin_image" id="admin_image" class="form-control" accept="image/*">
                            @if(!empty(Auth::guard('admin')->user()->image))
                            <a href="{{ url('uploads/admin/'.Auth::guard('admin')->user()->image) }}" target="_blank">Xem hình ảnh</a>
                            <input type="hidden" name="current_admin_image" value="{{ Auth::guard('admin')->user()->image }}">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Mô tả</label>
                        <div class="col-md-5">
                            <textarea name="admin_description" id="admin_description" placeholder="Nhập mô tả" class="form-control-textarea" rows="5">{{ Auth::guard('admin')->user()->description }}</textarea>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label class="control-label col-md-3">Select
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">
                            <select class="form-control" name="select">
                                <option value="">Select...</option>
                                <option value="Category 1">Category 1</option>
                                <option value="Category 2">Category 2</option>
                                <option value="Category 3">Category 5</option>
                                <option value="Category 4">Category 4</option>
                            </select>
                        </div>
                    </div> --}}
                </div>
                <div class="form-group">
                    <div class="offset-md-3 col-md-9">
                        <button type="submit" class="btn btn-primary m-r-20">Cập Nhật</button>
                        {{-- <button type="button" class="btn btn-default">Cancel</button> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
