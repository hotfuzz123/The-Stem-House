@extends('Backend.layouts.master')
@section('content')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Danh Mục Sản Phẩm</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard') }}">Trang Chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li><a class="parent-item" href="#">Cửa Hàng</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li><a class="parent-item" href="#">Danh Mục</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Danh Mục Sản Phẩm</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-aqua">
            <div class="card-head">
                <header>Danh Mục Sản Phẩm</header>
                <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                </div>
            </div>
            @include('partials.messages')
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group">
                            <button id="addRow1" class="btn btn-info">
                                <a style="color:white; font-weight:700;" href="{{ route('product_category.create') }}">Thêm Danh Mục <i class="fa fa-plus"></i></a>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group pull-right">
                            <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-print"></i> Print </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="table-scrollable">
                    <div id="example4_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table
                                    class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer"
                                    style="width: 100%;" id="example4" role="grid" aria-describedby="example4_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label=":activate to sort column descending" style="width: 135px;">
                                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                    <input type="checkbox" class="group-checkable"
                                                        data-set="#sample_1 .checkboxes">
                                                    <span></span>
                                                </label>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                colspan="1" aria-label=" Username : activate to sort column ascending"
                                                style="width: 225px;"> ID </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                colspan="1" aria-label=" Username : activate to sort column ascending"
                                                style="width: 225px;"> Tên Danh Mục </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                colspan="1" aria-label=" Status : activate to sort column ascending"
                                                style="width: 225px;"> Hiển Thị </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                colspan="1" aria-label=" Actions : activate to sort column ascending"
                                                style="width: 225px;"> Thao Tác </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($productCategory as $productCategory)
                                        <tr class="gradeX odd" role="row">
                                            <td class="sorting_1">
                                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                    <input type="checkbox" class="checkboxes" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>{{ $productCategory->id }}</td>
                                            <td>{{ $productCategory->title }}</td>
                                            <td>
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary">
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm rounded-0">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm rounded-0">
                                                    <i class="fa fa-trash-o "></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
