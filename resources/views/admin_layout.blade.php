<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="{{asset('public/backend/admin/fonts/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/backend/admin/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/backend/admin/fonts/material-design-icons/material-icon.css') }}" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="{{asset('public/backend/admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/backend/admin/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <!-- data tables -->
    <link href="{{asset('public/backend/admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome 5 -->
    <script src="https://kit.fontawesome.com/91f55319c9.js" crossorigin="anonymous"></script>
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('public/backend/admin/plugins/material/material.min.css') }}">
	<link rel="stylesheet" href="{{asset('public/backend/admin/css/material_style.css') }}">
	<!-- inbox style -->
	<link href="{{asset('public/backend/admin/css/pages/inbox.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="{{asset('public/backend/admin/css/theme/light/theme_style.css') }}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{asset('public/backend/admin/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/backend/admin/css/theme/light/style.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/backend/admin/css/responsive.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/backend/admin/css/theme/light/theme-color.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/backend/admin/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet">
    <!-- favicon -->
	<link rel="shortcut icon" href="{{asset('public/backend/admin/img/favicon.ico') }}" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="{{URL::to('/dashboard') }}">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Smart</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
						<!-- start language menu -->
						<li class="dropdown language-switch">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img
									src="{{asset('public/backend/admin/img/flags/vn.png') }}" class="position-left" alt=""> Việt Nam <span
									class="fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="vietnam"><img src="{{asset('public/backend/admin/img/flags/vn.png') }}" alt=""> Việt Nam</a>
								</li>
								<li>
									<a class="english"><img src="{{asset('public/backend/admin/img/flags/us.png') }}" alt=""> English</a>
								</li>
							</ul>
						</li>
						<!-- end language menu -->
						<!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-bell-o"></i>
								<span class="badge headerBadgeColor1"> 6 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Thông báo</span></h3>
									<span class="notification-label purple-bgcolor">New 6</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
															class="fa fa-check"></i></span>
													Congratulations!. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
															class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
															class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink"><i
															class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow"><i
															class="fa fa-warning"></i></span> Warning! </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red"><i
															class="fa fa-times"></i></span> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notifications </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-envelope-o"></i>
								<span class="badge headerBadgeColor2"> 2 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New 2</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="{{asset('public/backend/admin/img/prof/prof2.jpg') }}" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="{{asset('public/backend/admin/img/prof/prof3.jpg') }}" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="{{asset('public/backend/admin/img/prof/prof1.jpg') }}" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="{{asset('public/backend/admin/img/prof/prof8.jpg') }}" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
												<span class="message"> Apply for Ortho Surgeon </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="{{asset('public/backend/admin/img/prof/prof5.jpg') }}" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messages </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
                                <img alt="" class="img-circle " src="
                                    <?php
                                    $image = Auth::user()->admin_image;
                                    if($image){
                                        echo ('public/uploads/admin/'.$image);
                                    }
                                    ?>

                                " />
								<span class="username username-hide-on-mobile">
									<?php
                                    $name = Auth::user()->admin_name;
                                    if($name){
                                        echo $name;
                                    }
                                    ?>
								</span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="#">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.html">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="{{URL::to('/logout-auth') }}">
										<i class="icon-logout"></i> Đăng Xuất </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
								data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->
		<div class="settingSidebar">
			<a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
			</a>
			<div class="settingSidebar-body ps-container ps-theme-default">
				<div class=" fade show active">
					<div class="setting-panel-header">Setting Panel
					</div>
					<div class="quick-setting slimscroll-style">
						<ul id="themecolors">
							<li>
								<p class="sidebarSettingTitle">Sidebar Color</p>
							</li>
							<li class="complete">
								<div class="theme-color sidebar-theme">
									<a href="#" data-theme="white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
							<li>
								<p class="sidebarSettingTitle">Header Brand color</p>
							</li>
							<li class="theme-option">
								<div class="theme-color logo-theme">
									<a href="#" data-theme="logo-white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
							<li>
								<p class="sidebarSettingTitle">Header color</p>
							</li>
							<li class="theme-option">
								<div class="theme-color header-theme">
									<a href="#" data-theme="header-white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll" class="left-sidemenu">
                        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="pull-left image">
                                        <img src="
                                            <?php
                                            $image = Auth::user()->admin_image;
                                            if($image){
                                                echo ('public/uploads/admin/'.$image);
                                            }
                                            ?>
                                        " class="img-circle user-img-circle" alt="Ảnh đại diện" />
                                    </div>
                                    <div class="pull-left info">
                                        <p>
                                            <?php
                                            $name = Auth::user()->admin_name;
                                            if($name){
                                                echo $name;
                                            }
                                            ?>
                                        </p>
                                        <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">Online</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item start active open">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item active">
                                        <a href="" class="nav-link ">
                                            <span class="title">Thống kê truy cập</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="" class="nav-link ">
                                            <span class="title">Báo cáo khóa học</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link ">
                                            <span class="title">Báo cáo sản phẩm</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link ">
                                            <span class="title">Báo cáo tin tức</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link ">
                                            <span class="title">Báo cáo tài chính</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{URL::to('/all-auth') }}" class="nav-link nav-toggle"> <i class="material-icons">account_box</i>
                                    <span class="title">Admin</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                                    <span class="title">Học sinh</span><span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="all_students.html" class="nav-link "> <span class="title">All
                                                Students</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add_student.html" class="nav-link "> <span class="title">Add
                                                Student</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add_student_bootstrap.html" class="nav-link "> <span class="title">Add
                                                Student Bootstrap</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="edit_student.html" class="nav-link "> <span class="title">Edit
                                                Student</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="student_profile.html" class="nav-link "> <span class="title">About
                                                Student</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{URL::to('/all-course') }}" class="nav-link nav-toggle"> <i class="material-icons">school</i>
                                    <span class="title">Khóa học</span>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{URL::to('/all-course') }}" class="nav-link nav-toggle"> <i class="material-icons">school</i>
                                    <span class="title">Khóa học</span> <span class="arrow"></span>
                                    <span class="label label-rouded label-menu label-success">new</span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{URL::to('/all-course') }}" class="nav-link "> <span class="title">Danh sách khóa học</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{URL::to('/add-course') }}" class="nav-link "> <span class="title">Thêm khóa học</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle"><i class="material-icons">list</i>
                                    <span class="title">Danh mục</span><span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{URL::to('/all-category-product') }}" class="nav-link "> <span class="title">Danh mục sản phẩm</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{URL::to('/all-teacher') }}" class="nav-link "> <span class="title">Danh mục tin tức</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{URL::to('/all-category-course') }}" class="nav-link "> <span class="title">Danh mục khóa học</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{URL::to('/all-product') }}" class="nav-link nav-toggle"> <i class="material-icons">store</i>
                                    <span class="title">Cửa hàng</span>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
                                    <span class="title">Fees</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="fees_collection.html" class="nav-link "> <span class="title">Fees
                                                Collection</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add_fees.html" class="nav-link "> <span class="title">Add Fees </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add_fees_bootstrap.html" class="nav-link "> <span class="title">Add
                                                Fees Bootstrap</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="fees_receipt.html" class="nav-link "> <span class="title">Fee
                                                Receipt</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{URL::to('/all-slider') }}" class="nav-link nav-toggle"> <i class="material-icons">slideshow</i>
                                    <span class="title">Slider</span>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{URL::to('/') }}" class="nav-link nav-toggle"> <i class="material-icons">slideshow</i>
                                    <span class="title">Logo</span>
                                </a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle"> <i
                                        class="material-icons">description</i>
                                    <span class="title">Extra pages</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="login.html" class="nav-link "> <span class="title">Login</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="sign_up.html" class="nav-link "> <span class="title">Sign Up</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="forgot_password.html" class="nav-link "> <span class="title">Forgot
                                                Password</span>
                                        </a>
                                    </li>
                                    <li class="nav-item"><a href="user_profile.html" class="nav-link "><span
                                                class="title">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html" class="nav-link "> <span class="title">Contact Us</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="lock_screen.html" class="nav-link "> <span class="title">Lock
                                                Screen</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="page-404.html" class="nav-link "> <span class="title">404 Page</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="page-500.html" class="nav-link "> <span class="title">500 Page</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blank_page.html" class="nav-link "> <span class="title">Blank
                                                Page</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    @yield('admin_content')
                </div>
            </div>
            <!-- end page content -->

        </div>

		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; Smart University Theme By
				<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="{{asset('public/backend/admin/plugins/jquery/jquery.min.js') }}"></script>
	<script src="{{asset('public/backend/admin/plugins/popper/popper.js') }}"></script>
	<script src="{{asset('public/backend/admin/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
	<script src="{{asset('public/backend/admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{asset('public/backend/admin/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
	<script src="{{asset('public/backend/admin/plugins/jquery-validation/js/additional-methods.min.js') }}"></script>
    <!-- bootstrap -->
	<script src="{{asset('public/backend/admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{asset('public/backend/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
	<script src="{{asset('public/backend/admin/plugins/sparkline/jquery.sparkline.js') }}"></script>
	<script src="{{asset('public/backend/admin/js/pages/sparkline/sparkline-data.js') }}"></script>
    <!-- data tables -->
    <script src="{{asset('public/backend/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('public/backend/admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{asset('public/backend/admin/js/pages/table/table_data.js') }}"></script>
    <!-- Common js-->
	<script src="{{asset('public/backend/admin/js/app.js') }}"></script>
	<script src="{{asset('public/backend/admin/js/layout.js') }}"></script>
	<script src="{{asset('public/backend/admin/js/theme-color.js') }}"></script>
	<!-- material -->
	<script src="{{asset('public/backend/admin/plugins/material/material.min.js') }}"></script>
	<!--apex chart-->
	<script src="{{asset('public/backend/admin/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{asset('public/backend/admin/js/pages/chart/chartjs/home-data.js') }}"></script>
    <!-- Ckeditor 4 -->
    <script src="//cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
    <!-- Ckeditor 5 -->
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/decoupled-document/ckeditor.js"></script> --}}
    {{-- <script src="{{asset('public/backend/admin/plugins/ckeditor5/build/ckeditor.js') }}"></script>
    <script src="{{asset('public/backend/admin/plugins/ckeditor5/build/ckeditor.js.map') }}"></script>
    <script src="{{asset('public/backend/admin/plugins/ckeditor5/src/ckeditor.js') }}"></script> --}}

    <!-- Validator -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script src="{{asset('public/backend/admin/plugins/validator/jquery.form-validator.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{asset('public/backend/admin/js/custom.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            load_gallery();

            function load_gallery(){
                var pro_id = $('.pro_id').val();
                var _token = $('input[name="_token"]').val();
                //alert(pro_id);
                $.ajax({
                    url : "{{url('/select-gallery')}}",
                    method: "POST",
                    data:{pro_id:pro_id,_token:_token},
                    success:function(data){
                        $('#gallery_load').html(data);
                    }
                });
            }

            $('#file').change(function(){
                var error = '';
                var files = $('#file')[0].files;

                if(files.length = 5){
                    error += "<p>Bạn chỉ được chọn tối đa 5 ảnh</p>";
                }else if(files.length = ''){
                    error += "<p>Bạn không được bỏ trống ảnh</p>";
                }else if(files.length > 2000000){
                    error += "<p>File ảnh không được lớn hơn 2 MB</p>";
                }

                if(error == ''){

                }else {
                    $('#file').val('');
                    $('#error_gallery').html('<span class="text-danger">'+error+'</span>'); // Hiện tại ko in lỗi ra được
                    return false;
                }
            });
        });

    </script>

	<!-- summernote -->
	<script src="{{asset('public/backend/admin/plugins/summernote/summernote.js') }}"></script>
	<script src="{{asset('public/backend/admin/js/pages/summernote/summernote-data.js') }}"></script>
	<!-- end js include path -->
</body>

</html>
