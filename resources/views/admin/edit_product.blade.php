@extends('admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Cập nhật sản phẩm</div>
            <?php
            $message = Session::get('message');
            if($message){
                echo $message;
                Session::put('message', null);
            }
            ?>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Cập nhật sản phẩm</li>
        </ol>
    </div>
</div>
<div class="col-md-9 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            @foreach ($edit_product as $key => $pro)
            <form action="{{URL::to('/update-product/'.$pro->product_id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="simpleFormEmail">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" id="simpleFormEmail" value="{{ $pro ->product_name }}">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Giá sản phẩm</label>
                    <input type="text" name="product_price" class="form-control" id="simpleFormEmail" value="{{ $pro ->product_price }}">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh bìa sản phẩm</label>
                    <input type="file" name="product_image" class="form-control" id="simpleFormEmail">
                    <img src="{{URL::to('public/uploads/product/' .$pro->product_image)}}" height="100" width="100">
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea class="form-control" name="product_desc" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 163px;">{{ $pro ->product_desc }}</textarea>
                </div>
                <div class="form-group">
                    <label>Nội dung sản phẩm</label>
                    <textarea class="form-control" name="product_content" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 163px;">{{ $pro ->product_content }}</textarea>
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
                <div class="form-group">
                    <label>Hiển thị</label>
                    <select name="product_status" class="form-control">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiện</option>
                    </select>
                </div>
                <button type="submit"  name="add_product" class="btn btn-primary">Cập nhật sản phẩm</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
