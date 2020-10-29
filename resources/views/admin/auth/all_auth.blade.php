@extends('admin_layout')
@section('admin_content')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Danh sách người dùng</div>
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
            <li><a class="parent-item" href="#">Người dùng</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Danh sách người dùng</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tabbable-line">
            <!-- <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab1" data-toggle="tab"> List View </a>
                </li>
                <li>
                    <a href="#tab2" data-toggle="tab"> Grid View </a>
                </li>
            </ul> -->
            <ul class="nav customtab nav-tabs" role="tablist">
                <li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List
                        View</a></li>
                <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid
                        View</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active fontawesome-demo" id="tab1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Bảng danh sách người dùng</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh"
                                            href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                            href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <a style="" href="{{URL::to('/add-auth') }}" id="addRow"
                                                    class="btn btn-info">
                                                    Thêm người dùng <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group pull-right">
                                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                    data-toggle="dropdown">Tools
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-print"></i> Print </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-pdf-o"></i> Save as
                                                            PDF </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-excel-o"></i>
                                                            Export to Excel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-scrollable">
                                        <table
                                            class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                            id="example4">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th> Họ & Tên </th>
                                                    <th> Chức Vụ </th>
                                                    <th> Số Điện Thoại </th>
                                                    <th> Email </th>
                                                    <th> Ngày Thêm (D/M/Y)</th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($all_auth as $key => $auth)
                                                <tr class="odd gradeX">
                                                    <td class="patient-img">
                                                        <img src="public/uploads/admin/{{ $auth ->admin_image }}">
                                                    </td>
                                                    <td>{{ $auth ->admin_name }}</td>
                                                    <td>{{ $auth ->admin_type }}</td>
                                                    <td><a href="tel:{{ $auth ->admin_phone }}">{{ $auth ->admin_phone }} </a></td>
                                                    <td><a href="mailto:{{ $auth ->admin_email }}">{{ $auth ->admin_email }} </a></td>
                                                    <td class="left">{{ $auth ->created_at->format('d/m/Y H:i:s') }}</td>
                                                    <td class="valigntop">
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                                type="button" data-toggle="dropdown" aria-expanded="false">
                                                                Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a href="{{URL::to('/edit-auth/' .$auth->admin_id)}}">
                                                                        <i class="far fa-edit"></i> Cập nhật </a>
                                                                </li>
                                                                <li>
                                                                    <a onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')" href="{{URL::to('/delete-auth/' .$auth->admin_id)}}">
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
                <div class="tab-pane" id="tab2">
                    <div class="row">
                        @foreach ($all_auth as $key => $auth)
                        <div class="col-md-4">
                            <div class="card card-box">
                                <div class="card-body no-padding ">
                                    <div class="doctor-profile">
                                        <img src="public/uploads/admin/{{ $auth ->admin_image }}" class="doctor-pic" alt="Ảnh đại diện">
                                        <div class="profile-usertitle">
                                            <div class="doctor-name">{{ $auth ->admin_name }}</div>
                                            <div class="name-center"> {{ $auth ->admin_type }} </div>
                                        </div>
                                        {{-- <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> --}}
                                        <div class="" style="padding: 15px 0;">
                                            <p><i class="fas fa-phone-alt"></i><a href="tel:{{ $auth ->admin_phone }}"> {{ $auth ->admin_phone }}</a></p>
                                            <p><i class="fas fa-envelope"></i><a href="mailto:{{ $auth ->admin_email }}"> {{ $auth ->admin_email }}</a></p>
                                        </div>
                                        {{-- <div class="profile-userbuttons">
                                            <a href="professor_profile.html"
                                                class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
