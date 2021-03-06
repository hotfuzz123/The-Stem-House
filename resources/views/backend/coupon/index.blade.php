@extends('Backend.layouts.master')
@section('content')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Danh sách coupon</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ URL::to('/admin/dashboard') }}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i></li>
            <li class="active">Danh sách coupon</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-red">
            <div class="card-head">
                <header>Bảng danh sách coupon</header>
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
                                <a style="color:white; font-weight:700;" href="{{ URL::to('/admin/add-coupon') }}">Thêm coupon <i class="fa fa-plus"></i></a>

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
                                                style="width: 225px;"> Mã coupon </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                colspan="1" aria-label=" Status : activate to sort column ascending"
                                                style="width: 176px;"> Loại coupon </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                colspan="1" aria-label=" Username : activate to sort column ascending"
                                                style="width: 225px;"> Giảm bao nhiêu </th>
                                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                colspan="1" aria-label=" Status : activate to sort column ascending"
                                                style="width: 176px;"> Ngày hết hạn coupon </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                colspan="1" aria-label=" Status : activate to sort column ascending"
                                                style="width: 176px;"> Hiển thị </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                colspan="1" aria-label=" Status : activate to sort column ascending"
                                                style="width: 176px;"> Ngày tạo </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                colspan="1" aria-label=" Actions : activate to sort column ascending"
                                                style="width: 193px;"> Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_coupon as $key => $coupon)
                                        <tr class="gradeX odd" role="row">
                                            <td class="sorting_1">
                                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                    <input type="checkbox" class="checkboxes" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td> {{ $coupon ->coupon_code }} </td>
                                            <td> {{ $coupon ->coupon_amount_type }} </td>
                                            <td>
                                                {{ $coupon ->coupon_amount }}
                                                @if($coupon ->coupon_amount_type=="Percent") % @else đ @endif
                                            </td>
                                            <td> {{ date('d/m/Y', strtotime($coupon ->coupon_expire_date)) }} </td>
                                            <td>
                                                <span class="">
                                                    <?php
                                                    if($coupon->coupon_status==1) {
                                                    ?>
                                                    <a href="{{ URL::to('/unactive-coupon/' .$coupon->coupon_id)}}"><span class="label label-sm label-success"> Hiển thị </span></a>
                                                    <?php
                                                    }else {
                                                    ?>
                                                    <a href="{{ URL::to('/active-coupon/' .$coupon->coupon_id)}}"><span class="label label-sm label-danger">Ẩn</span></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </span>
                                            </td>
                                            <td> {{ $coupon ->created_at->format('d/m/Y H:i:s') }} </td>
                                            <td class="valigntop">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                        type="button" data-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-left" role="menu">
                                                        <li>
                                                            <a href="{{ URL::to('/edit-coupon/' .$coupon->coupon_id)}}">
                                                                <i class="far fa-edit"></i> Cập nhật </a>
                                                        </li>
                                                        <li>
                                                            <a onclick="return confirm('Bạn có chắc muốn xóa coupon này không?')" href="{{ URL::to('/delete-coupon/' .$coupon->coupon_id)}}">
                                                                <i class="far fa-trash-alt"></i> Xóa </a>
                                                        </li>
                                                    </ul>
                                                </div>
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
