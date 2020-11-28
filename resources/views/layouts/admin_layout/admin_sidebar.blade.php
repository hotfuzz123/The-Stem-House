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
                                {{-- <?php
                                // $image = Auth::user()->admin_image;
                                // if($image){
                                //     echo ('uploads/admin/'.$image);
                                // }
                                ?> --}}
                                {{asset('backend/admin/img/dp.jpg') }}
                            " class="img-circle user-img-circle" alt="Ảnh đại diện" />
                        </div>
                        <div class="pull-left info">
                            <p>
                                <?php
                                // $name = Auth::user()->admin_name;
                                // if($name){
                                //     echo $name;
                                // }
                                ?>
                                Admin
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
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
                        <span class="title">Khoá học</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{URL::to('/admin/add-course') }}" class="nav-link "> <span class="title">Thêm khoá học</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{URL::to('/admin/all-course') }}" class="nav-link "> <span class="title">Danh sách khoá học</span>
                            </a>
                        </li>
                    </ul>
                </li>
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
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">store</i>
                        <span class="title">Cửa hàng</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{URL::to('/admin/add-product') }}" class="nav-link "> <span class="title">Thêm sản phẩm</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{URL::to('/admin/all-product') }}" class="nav-link "> <span class="title">Danh sách sản phẩm</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{URL::to('/all-coupon') }}" class="nav-link nav-toggle"> <i class="material-icons">redeem</i>
                        <span class="title">Coupon</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{URL::to('/all-slider') }}" class="nav-link nav-toggle"> <i class="material-icons">slideshow</i>
                        <span class="title">Slider</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"> <i class="material-icons">settings</i>
                        <span class="title">Cài đặt</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="" class="nav-link "> <span class="title">Tài khoản</span></a>
                        </li>
                        <li class="nav-item  ">
                            <a href="" class="nav-link "> <span class="title">Đổi mật khẩu</span></a>
                        </li>
                        <li class="nav-item  ">
                            <a href="" class="nav-link "> <span class="title">Đăng xuất</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
