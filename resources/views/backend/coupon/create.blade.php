@extends('Backend.layouts.master')
@section('content')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Thêm coupon</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ URL::to('/admin/dashboard') }}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Thêm coupon</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            <form action="{{ URL::to('/admin/save-coupon') }}" method="POST" id="demoForm" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="simpleFormEmail">Mã coupon</label>
                    <input type="text" name="coupon_code" class="form-control" minlength="5" maxlength="20">
                    @if ($errors->has('coupon_code'))
                    <span class="text-danger">{{ $errors->first('coupon_code') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Loại coupon</label>
                    <select name="coupon_amount_type" class="form-control">
                        <option value="Percent">Phần trăm</option>
                        <option value="Fixed">Cố định</option>
                    </select>
                    @if ($errors->has('coupon_amount_type'))
                    <span class="text-danger">{{ $errors->first('coupon_amount_type') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Giảm bao nhiêu</label>
                    <input type="number" name="coupon_amount" class="form-control" min="0">
                    @if ($errors->has('coupon_amount'))
                    <span class="text-danger">{{ $errors->first('coupon_amount') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ngày hết hạn coupon</label>
                    <input type="date" name="coupon_expire_date" class="form-control" id="simpleFormEmail" autocomplete="off">
                    @if ($errors->has('coupon_expire_date'))
                    <span class="text-danger">{{ $errors->first('coupon_expire_date') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Hiển thị</label>
                    <select name="coupon_status" class="form-control">
                        <option value="1">Hiển thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                    @if ($errors->has('coupon_status'))
                    <span class="text-danger">{{ $errors->first('coupon_status') }}</span>
                    @endif
                </div>
                <button type="submit"  name="add_course" class="btn btn-primary">Thêm coupon mới</button>
            </form>
        </div>
    </div>
</div>

@endsection
