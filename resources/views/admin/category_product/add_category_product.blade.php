@extends('layouts.admin_layout.admin_layout')
@section('admin_content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Thêm danh mục sản phẩm</div>
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
            <li class="active">Thêm danh mục sản phẩm</li>
        </ol>
    </div>
</div>
<div class="col-md-12 col-sm-12 mx-auto">
    <div class="card card-box">
        <div class="card-body " id="bar-parent">
            <form action="{{URL::to('/save-category-product') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="simpleFormEmail">Tên danh mục</label>
                    <input type="text" name="category_product_name" class="form-control" onkeyup="ChangeToSlug();" id="slug" placeholder="Tên danh mục">
                </div>
                <div class="form-group">
                    <label for="simpleFormEmail">Slug danh mục sản phẩm</label>
                    <input type="text" name="slug_category_product" class="form-control" id="convert_slug" placeholder="Slug danh mục sản phẩm">
                </div>
                <div class="form-group">
                    <label>Mô tả danh mục</label>
                    <textarea class="form-control" name="category_product_desc" rows="3" id="editor-category" placeholder="Mô tả danh mục..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;"></textarea>
                </div>
                <div class="form-group">
                    <label>Từ khóa danh mục</label>
                    <textarea class="form-control" name="category_product_keywords" rows="3" placeholder="Từ khóa danh mục..." style="margin-top: 0px; margin-bottom: 0px; height: 163px;"></textarea>
                </div>
                <div class="form-group">
                    <label>Hiển thị</label>
                    <select name="category_product_status" class="form-control">
                        <option value="1">Hiển thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>
                <button type="submit"  name="add_category_product" class="btn btn-primary">Thêm danh mục mới</button>
            </form>
        </div>
    </div>
</div>
@endsection
