@extends('admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Thêm sản phẩm</div>
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
                    href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Thêm sản phẩm</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            <form action="{{URL::to('/save-product') }}" method="POST" id="demoForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="simpleFormEmail">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" onkeyup="ChangeToSlug();" id="slug">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Slug sản phẩm</label>
                    <input type="text" name="product_slug" class="form-control" id="convert_slug">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Giá sản phẩm</label>
                    <input type="text" name="product_price" class="form-control" id="simpleFormEmail">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Ảnh bìa sản phẩm</label>
                    <input type="file" name="product_image" class="form-control" id="simpleFormEmail">
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea class="form-control" name="product_desc" rows="3" id="editor-product-1" placeholder="Mô tả sản phẩm..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;"></textarea>
                </div>
                <div class="form-group">
                    <label>Nội dung sản phẩm</label>
                    <textarea class="form-control" name="product_content" rows="3" id="editor-product-2" placeholder="Nội dung sản phẩm..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;"></textarea>
                </div>
                <div class="form-group">
                    <label>Danh mục sản phẩm</label>
                    <select name="product_cate" class="form-control">
                        @foreach ($cate_product as $key => $cate)
                            <option value="{{$cate -> category_id}}">{{$cate -> category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Hiển thị</label>
                    <select name="product_status" class="form-control">
                        <option value="0">Hiển thị</option>
                        <option value="1">Ẩn</option>
                    </select>
                </div>
                <button type="submit"  name="add_product" class="btn btn-primary">Thêm sản phẩm mới</button>
            </form>
        </div>
    </div>
</div>
@endsection
