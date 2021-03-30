@extends('Backend.layouts.master')
@section('content')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Đổi mật khẩu Admin</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('admin.dashboard')}}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li><a class="parent-item" href="#">Cài Đặt</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Đổi mật khẩu Admin</li>
        </ol>
    </div>
</div>

@include('partials.messages')
<div class="col-md-12 col-sm-12">
    <div class="card card-box">
        <div class="card-head">
            <header>Đổi mật khẩu Admin</header>
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
            <form action="{{ URL::to('/admin/update-current-pwd') }}" method="POST" name="updatePasswordForm" id="updatePasswordForm" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="form-group row">
                        <label class="control-label col-md-3">Mật Khẩu Hiện Tại<span class="required"> * </span></label>
                        <div class="col-md-4">
                            <input type="password" name="current_pwd" id="current_pwd" class="form-control" placeholder="Nhập Mật Khẩu Hiện Tại">
                            <span id="chkCurrentPwd"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Mật Khẩu Mới<span class="required"> * </span></label>
                        <div class="col-md-4">
                            <input type="password" name="new_pwd" id="new_pwd" class="form-control" placeholder="Nhập Mật Khẩu Mới">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Xác Nhận Mật Khẩu Mới<span class="required"> * </span></label>
                        <div class="col-md-4">
                            <input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control"  placeholder="Xác Nhận Mật Khẩu Mới">
                        </div>
                    </div>
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
