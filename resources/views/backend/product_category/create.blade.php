@extends('Backend.layouts.master')
@section('content')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Thêm Danh Mục Sản Phẩm</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard') }}">Trang Chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li><a class="parent-item" href="#">Cửa Hàng</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li><a class="parent-item" href="#">Danh Mục</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Thêm Danh Mục Sản Phẩm</li>
        </ol>
    </div>
</div>

<div class="col-md-12 col-sm-12">
    <div class="card card-box">
        <div class="card-head">
            <header>Thêm Danh Mục Sản Phẩm</header>
            <button id="panel-button3"
                class="mdl-button mdl-js-button mdl-button--icon pull-right"
                data-upgraded=",MaterialButton">
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                data-mdl-for="panel-button3">
                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                </li>
                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                </li>
                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
            </ul>
        </div>
        <div class="card-body " id="bar-parent">
            <form action="{{ route('product_category.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Tên Danh Mục<span class="required"> * </span></label>
                    <input type="text" name="title" class="form-control">
                    {{-- <input type="text" name="category_product_name" class="form-control" onkeyup="ChangeToSlug();" id="slug" placeholder="Tên danh mục"> --}}
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <label for="simpleFormEmail">Slug danh mục sản phẩm</label>
                    <input type="text" name="slug_category_product" class="form-control" id="convert_slug" placeholder="Slug danh mục sản phẩm">
                </div> --}}
                

                <div class="form-group">
                    <label>Mô Tả Danh Mục<span class="required"> * </span></label>
                    <textarea name="description" id="editor1"></textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Hiển thị<span class="required"> * </span></label>
                    <select name="status" class="form-control">
                        <option value="">-- Chọn --</option>
                        <option value="active" {{ old('status') == 'active' ? 'selected' : ''}}>Hiển thị</option>
                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : ''}}>Ẩn</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" id="submit">Thêm danh mục</button>
            </form>
        </div>
    </div>
</div>

@endsection
