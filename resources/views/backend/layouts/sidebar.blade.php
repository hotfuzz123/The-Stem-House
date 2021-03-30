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
                            <img src="{{ asset('uploads/admin/'.Auth::guard('admin')->user()->image) }}" class="img-circle user-img-circle" alt="Ảnh đại diện" />
                        </div>
                        <div class="pull-left info">
                            <p>{{ Auth::guard('admin')->user()->name }}</p>
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
                    <a href="{{ URL::to('/all-auth') }}" class="nav-link nav-toggle"> <i class="material-icons">account_box</i>
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

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-title">Khoá Học</div>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">list</i>
                        <span class="title">Danh Mục</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="" class="nav-link "> 
                                <span class="title">Thêm Danh Mục</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link "> 
                                <span class="title">Danh Mục Khoá Học</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
                        <span class="title">Khoá Học</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="" class="nav-link "> 
                                <span class="title">Thêm Khoá Học</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link "> 
                                <span class="title">Danh Sách Khoá Học</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-title">Cửa Hàng</div>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">list</i>
                        <span class="title">Danh Mục</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('product_category.create') }}" class="nav-link "> 
                                <span class="title">Thêm Danh Mục</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product_category.index') }}" class="nav-link "> 
                                <span class="title">Danh Mục Sản Phẩm</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">store</i>
                        <span class="title">Sản Phẩm</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('product.create') }}" class="nav-link "> 
                                <span class="title">Thêm Sản Phẩm</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product.index') }}" class="nav-link "> 
                                <span class="title">Danh Sách Sản Phẩm</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-title">Cửa Hàng</div>
                
                <li class="nav-item">
                    <a href="{{ URL::to('/admin/all-coupon') }}" class="nav-link nav-toggle"> <i class="material-icons">redeem</i>
                        <span class="title">Coupon</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('/admin/all-slider') }}" class="nav-link nav-toggle"> <i class="material-icons">slideshow</i>
                        <span class="title">Slider</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"> <i class="material-icons">settings</i>
                        <span class="title">Cài Đặt</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{ URL::to('/admin/settings') }}" class="nav-link "> 
                                <span class="title">Tài Khoản</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.password') }}" class="nav-link "> 
                                <span class="title">Đổi Mật Khẩu</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.logout') }}" class="nav-link "> 
                                <span class="title">Đăng Xuất</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
