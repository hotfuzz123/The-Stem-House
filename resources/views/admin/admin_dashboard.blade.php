@extends('layouts.admin_layout.admin_layout')
@section('admin_content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Dashboard</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{URL::to('/admin/dashboard') }}">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- start widget -->
    <div class="state-overview">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-b-green">
                    <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Students</span>
                        <span class="info-box-number">450</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 45%"></div>
                        </div>
                        <span class="progress-description">
                            45% Increase in 28 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-b-yellow">
                    <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">New Students</span>
                        <span class="info-box-number">155</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">
                            40% Increase in 28 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-b-blue">
                    <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Course</span>
                        <span class="info-box-number">52</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                        <span class="progress-description">
                            85% Increase in 28 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-b-pink">
                    <span class="info-box-icon push-bottom"><i
                            class="material-icons">monetization_on</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Fees Collection</span>
                        <span class="info-box-number">13,921</span><span>$</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                            50% Increase in 28 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- end widget -->
    <!-- chart start -->
    <div class="row">
        <div class="col-sm-6">
            <div class="card card-box">
                <div class="card-head">
                    <header>University Survey</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="recent-report__chart">
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card card-box">
                <div class="card-head">
                    <header>University Survey</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="recent-report__chart">
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart end -->
    <!-- start new student list -->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card  card-box">
                <div class="card-head">
                    <header>New Student List</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table display product-overview mb-30" id="support_table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Assigned Professor</th>
                                        <th>Date Of Admit</th>
                                        <th>Fees</th>
                                        <th>Branch</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jens Brincker</td>
                                        <td>Kenny Josh</td>
                                        <td>27/05/2016</td>
                                        <td>
                                            <span class="label label-sm label-success">paid</span>
                                        </td>
                                        <td>Mechanical</td>
                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                title="Edit"><i class="fa fa-check"></i></a>
                                            <a href="javascript:void(0)" class="text-inverse"
                                                title="Delete" data-toggle="tooltip"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mark Hay</td>
                                        <td> Mark</td>
                                        <td>26/05/2017</td>
                                        <td>
                                            <span class="label label-sm label-warning">unpaid </span>
                                        </td>
                                        <td>Science</td>
                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                title="Edit"><i class="fa fa-check"></i></a>
                                            <a href="javascript:void(0)" class="text-inverse"
                                                title="Delete" data-toggle="tooltip"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Anthony Davie</td>
                                        <td>Cinnabar</td>
                                        <td>21/05/2016</td>
                                        <td>
                                            <span class="label label-sm label-success ">paid</span>
                                        </td>
                                        <td>Commerce</td>
                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                title="Edit"><i class="fa fa-check"></i></a>
                                            <a href="javascript:void(0)" class="text-inverse"
                                                title="Delete" data-toggle="tooltip"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>David Perry</td>
                                        <td>Felix </td>
                                        <td>20/04/2016</td>
                                        <td>
                                            <span class="label label-sm label-danger">unpaid</span>
                                        </td>
                                        <td>Mechanical</td>
                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                title="Edit"><i class="fa fa-check"></i></a>
                                            <a href="javascript:void(0)" class="text-inverse"
                                                title="Delete" data-toggle="tooltip"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Anthony Davie</td>
                                        <td>Beryl</td>
                                        <td>24/05/2016</td>
                                        <td>
                                            <span class="label label-sm label-success ">paid</span>
                                        </td>
                                        <td>M.B.A.</td>
                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                title="Edit"><i class="fa fa-check"></i></a>
                                            <a href="javascript:void(0)" class="text-inverse"
                                                title="Delete" data-toggle="tooltip"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Alan Gilchrist</td>
                                        <td>Joshep</td>
                                        <td>22/05/2016</td>
                                        <td>
                                            <span class="label label-sm label-warning ">unpaid</span>
                                        </td>
                                        <td>Science</td>
                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                title="Edit"><i class="fa fa-check"></i></a>
                                            <a href="javascript:void(0)" class="text-inverse"
                                                title="Delete" data-toggle="tooltip"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Mark Hay</td>
                                        <td>Jayesh</td>
                                        <td>18/06/2016</td>
                                        <td>
                                            <span class="label label-sm label-success ">paid</span>
                                        </td>
                                        <td>Commerce</td>
                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                title="Edit"><i class="fa fa-check"></i></a>
                                            <a href="javascript:void(0)" class="text-inverse"
                                                title="Delete" data-toggle="tooltip"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Sue Woodger</td>
                                        <td>Sharma</td>
                                        <td>17/05/2016</td>
                                        <td>
                                            <span class="label label-sm label-danger">unpaid</span>
                                        </td>
                                        <td>Mechanical</td>
                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                title="Edit"><i class="fa fa-check"></i></a>
                                            <a href="javascript:void(0)" class="text-inverse"
                                                title="Delete" data-toggle="tooltip"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end new student list -->
    <!-- start chat sidebar -->
    <div class="chat-sidebar-container" data-close-on-body-click="false">
        <div class="chat-sidebar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab"> <i
                            class="material-icons">chat</i>Chat
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> <i
                            class="material-icons">settings</i>
                        Settings
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Start Doctor Chat -->
                <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
                    id="quick_sidebar_tab_1">
                    <div class="chat-sidebar-list">
                        <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                            data-wrapper-class="chat-sidebar-list">
                            <div class="chat-header">
                                <h5 class="list-heading">Online</h5>
                            </div>
                            <ul class="media-list list-items">
                                <li class="media"><img class="media-object" src="{{ asset('public/backend/admin/img/prof/prof3.jpg') }}"
                                        width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">John Deo</h5>
                                        <div class="media-heading-sub">Spine Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">5</span>
                                    </div> <img class="media-object" src="{{ asset('public/backend/admin/img/prof/prof1.jpg') }}"
                                        width="35" height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Rajesh</h5>
                                        <div class="media-heading-sub">Director</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="{{ asset('public/backend/admin/img/prof/prof5.jpg') }}"
                                        width="35" height="35" alt="...">
                                    <i class="away dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jacob Ryan</h5>
                                        <div class="media-heading-sub">Ortho Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">8</span>
                                    </div> <img class="media-object" src="{{ asset('public/backend/admin/img/prof/prof4.jpg') }}"
                                        width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Kehn Anderson</h5>
                                        <div class="media-heading-sub">CEO</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="{{ asset('public/backend/admin/img/prof/prof2.jpg') }}"
                                        width="35" height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Sarah Smith</h5>
                                        <div class="media-heading-sub">Anaesthetics</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="{{ asset('public/backend/admin/img/prof/prof7.jpg') }}"
                                        width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Vlad Cardella</h5>
                                        <div class="media-heading-sub">Cardiologist</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="chat-header">
                                <h5 class="list-heading">Offline</h5>
                            </div>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">4</span>
                                    </div> <img class="media-object" src="{{ asset('public/backend/admin/img/prof/prof6.jpg') }}"
                                        width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jennifer Maklen</h5>
                                        <div class="media-heading-sub">Nurse</div>
                                        <div class="media-heading-small">Last seen 01:20 AM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="{{ asset('public/backend/admin/img/prof/prof8.jpg') }}"
                                        width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Lina Smith</h5>
                                        <div class="media-heading-sub">Ortho Surgeon</div>
                                        <div class="media-heading-small">Last seen 11:14 PM</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">9</span>
                                    </div> <img class="media-object" src="{{ asset('public/backend/admin/img/prof/prof9.jpg') }}"
                                        width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jeff Adam</h5>
                                        <div class="media-heading-sub">Compounder</div>
                                        <div class="media-heading-small">Last seen 3:31 PM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="{{ asset('public/backend/admin/img/prof/prof10.jpg') }}"
                                        width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Anjelina Cardella</h5>
                                        <div class="media-heading-sub">Physiotherapist</div>
                                        <div class="media-heading-small">Last seen 7:45 PM</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Doctor Chat -->
                <!-- Start Setting Panel -->
                <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                    <div class="chat-sidebar-settings-list slimscroll-style">
                        <div class="chat-header">
                            <h5 class="list-heading">Layout Settings</h5>
                        </div>
                        <div class="chatpane inner-content ">
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Sidebar Position</div>
                                    <div class="setting-set">
                                        <select
                                            class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                            <option value="left" selected="selected">Left</option>
                                            <option value="right">Right</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Header</div>
                                    <div class="setting-set">
                                        <select
                                            class="page-header-option form-control input-inline input-sm input-small ">
                                            <option value="fixed" selected="selected">Fixed</option>
                                            <option value="default">Default</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Footer</div>
                                    <div class="setting-set">
                                        <select
                                            class="page-footer-option form-control input-inline input-sm input-small ">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected="selected">Default</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header">
                                <h5 class="list-heading">Account Settings</h5>
                            </div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Notifications</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-1">
                                                <input type="checkbox" id="switch-1" class="mdl-switch__input"
                                                    checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Show Online</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-7">
                                                <input type="checkbox" id="switch-7" class="mdl-switch__input"
                                                    checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Status</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-2">
                                                <input type="checkbox" id="switch-2" class="mdl-switch__input"
                                                    checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">2 Steps Verification</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-3">
                                                <input type="checkbox" id="switch-3" class="mdl-switch__input"
                                                    checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header">
                                <h5 class="list-heading">General Settings</h5>
                            </div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Location</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-4">
                                                <input type="checkbox" id="switch-4" class="mdl-switch__input"
                                                    checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Save Histry</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-5">
                                                <input type="checkbox" id="switch-5" class="mdl-switch__input"
                                                    checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Auto Updates</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-6">
                                                <input type="checkbox" id="switch-6" class="mdl-switch__input"
                                                    checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end chat sidebar -->
</div>
<!-- end page container -->
@endsection
