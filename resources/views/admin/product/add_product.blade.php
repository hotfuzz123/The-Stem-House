@extends('layouts.admin_layout.admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Thêm sản phẩm</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ URL::to('/admin/dashboard') }}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Thêm sản phẩm</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            <form action="{{ URL::to('/save-product') }}" method="POST" id="demoForm" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="simpleFormEmail">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{ old('product_name') }}">
                    @if ($errors->has('product_name'))
                    <span class="text-danger">{{ $errors->first('product_name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Slug sản phẩm</label>
                    <input type="text" name="product_slug" class="form-control" id="convert_slug" value="{{ old('product_slug') }}">
                    @if ($errors->has('product_slug'))
                    <span class="text-danger">{{ $errors->first('product_slug') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Giá sản phẩm</label>
                    <input type="number" name="product_price" class="form-control" id="simpleFormEmail" value="{{ old('product_price') }}">
                    @if ($errors->has('product_price'))
                    <span class="text-danger">{{ $errors->first('product_price') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Kho</label>
                    <input type="number" name="product_quantity" class="form-control" id="simpleFormEmail" value="{{ old('product_quantity') }}">
                    @if ($errors->has('product_quantity'))
                    <span class="text-danger">{{ $errors->first('product_quantity') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh bìa sản phẩm</label>
                    <input type="file" name="product_image" class="form-control" id="simpleFormEmail">
                    @if ($errors->has('product_image'))
                    <span class="text-danger">{{ $errors->first('product_image') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea class="form-control" name="product_desc" rows="3" id="editor-product-1" placeholder="Mô tả sản phẩm..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;" value="{{ old('product_desc') }}"></textarea>
                    @if ($errors->has('product_desc'))
                    <span class="text-danger">{{ $errors->first('product_desc') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Nội dung sản phẩm</label>
                    <textarea class="form-control" name="product_content" rows="3" id="editor-product-2" placeholder="Nội dung sản phẩm..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;" value="{{ old('product_content') }}"></textarea>
                    @if ($errors->has('product_content'))
                    <span class="text-danger">{{ $errors->first('product_content') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Danh mục sản phẩm</label>
                    <select name="product_cate" class="form-control">
                        @foreach ($cate_product as $key => $cate)
                            <option value="{{$cate -> category_id}}">{{$cate -> category_name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('product_cate'))
                    <span class="text-danger">{{ $errors->first('product_cate') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Hiển thị</label>
                    <select name="product_status" class="form-control">
                        <option value="1">Hiển thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                    @if ($errors->has('product_status'))
                    <span class="text-danger">{{ $errors->first('product_status') }}</span>
                    @endif
                </div>
                <button type="submit"  name="add_product" class="btn btn-primary">Thêm sản phẩm mới</button>
            </form>
        </div>
    </div>
</div>
@endsection
