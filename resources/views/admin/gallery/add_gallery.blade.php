@extends('admin_layout')
@section('admin_content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Danh sách hình ảnh sản phẩm</div>
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message. '</span>';
                    Session::put('message', null);
                }
                ?>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                        class="fa fa-angle-right"></i>
                </li>
                <li class="active">Danh sách hình ảnh sản phẩm</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Bảng danh sách hình ảnh sản phẩm</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <form action="{{URL::to('/insert-gallery/ .$pro_id') }}" class="col-md-6 col-sm-6 col-6" method="POST" id="" enctype="multipart/form-data">
                            @csrf
                            <div class="btn-group">
                                <input style="padding: 10px 0;border: 1px solid #e7ecf1;" id="file" type="file" name="file[]" accept="image/*" multiple>
                                <button id="addRow1" class="btn btn-info" type="submit" name="upload">
                                    Tải ảnh
                                </button>
                            </div>
                            <span id="error-gallery"></span>
                        </form>
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
                                <input type="hidden" value="{{ $pro_id }}" name="pro_id" class="pro_id">
                                <form class="col-sm-12">
                                    @csrf
                                    <div class="col-sm-12" id="gallery_load">

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
