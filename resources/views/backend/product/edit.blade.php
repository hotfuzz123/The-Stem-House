@extends('Backend.layouts.master')
@section('content')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Cập nhật sản phẩm</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ URL::to('/admin/dashboard') }}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Cập nhật sản phẩm</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            @foreach ($edit_product as $key => $pro)
            <form action="{{ URL::to('/update-product/'.$pro->product_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="simpleFormEmail">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{ $pro ->product_name }}">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Slug sản phẩm</label>
                    <input type="text" name="product_slug" class="form-control" id="convert_slug" value="{{ $pro ->product_slug }}">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Giá sản phẩm</label>
                    <input type="text" name="product_price" class="form-control" id="simpleFormEmail" value="{{ $pro ->product_price }}">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Kho</label>
                    <input type="text" name="product_quantity" class="form-control" id="simpleFormEmail" value="{{ $pro ->product_quantity }}">
                    @if ($errors->has('product_quantity'))
                    <span class="text-danger">{{ $errors->first('product_quantity') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh bìa sản phẩm</label>
                    <input type="file" name="product_image" class="form-control" id="simpleFormEmail">
                    <img src="{{ URL::to('uploads/product/' .$pro->product_image)}}" height="100" width="100">
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea class="form-control" name="product_desc" rows="3" id="editor-product-1" style="margin-top: 0px; margin-bottom: 0px; height: 163px;">{{ $pro ->product_desc }}</textarea>
                </div>
                <div class="form-group">
                    <label>Nội dung sản phẩm</label>
                    <textarea class="form-control" name="product_content" rows="3" id="editor-product-2" style="margin-top: 0px; margin-bottom: 0px; height: 163px;">{{ $pro ->product_content }}</textarea>
                </div>
                <div class="form-group">
                    <label>Danh mục sản phẩm</label>
                    <select name="product_cate" class="form-control">
                        @foreach ($cate_product as $key => $cate)
                            @if($cate->category_id==$pro->category_id)
                            <option selected value="{{$cate -> category_id}}">{{$cate ->category_name}}</option>
                            @else
                            <option value="{{$cate -> category_id}}">{{$cate ->category_name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
