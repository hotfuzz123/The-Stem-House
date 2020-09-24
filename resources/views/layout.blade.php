<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    {{-- SEO
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{ $meta_keywords }}">
    <meta name="description" content="{{ $meta_desc }}">
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="CreativeLayers" content="ATFN">
    <link rel="canonical" href="{{ $url_canonical }}">
    <!-- Title -->
    <meta name="title" content="The Stem House - {{ $meta_title }}"/>
    <title>The Stem House - {{ $meta_title }}</title> --}}

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Stem House - StemHouse Education</title>
    <!-- css file -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css') }}">
    <!-- Favicon -->
    <link href="{{asset('public/frontend/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{asset('public/frontend/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />
</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <div class="header_top home2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="ht_left_widget home2 float-left">
                            <ul>
                                <li class="list-inline-item">
                                    <div class="logo-widget">
                                        <img class="img-fluid" src="{{asset('public/frontend/images/header-logo.png') }}" alt="header-logo.png">
                                        <span>EDUMY</span>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="header_top_lang_widget">
                                        <div class="ht-widget-container">
                                            <div class="vertical-wrapper">
                                                <h2 class="title-vertical">
                                                    <span class="text-title">Library</span> <i
                                                        class="fa fa-angle-down show-down" aria-hidden="true"></i>
                                                </h2>
                                                <div class="content-vertical">
                                                    <ul id="vertical-menu" class="mega-vertical-menu nav navbar-nav">
                                                        <li><a href="#">Development</a></li>
                                                        <li><a href="#">Business</a></li>
                                                        <li><a href="#">IT & Software</a></li>
                                                        <li>
                                                            <a href="#" class="dropdown-toggle" data-hover="dropdown"
                                                                data-toggle="dropdown">Design <b class="caret"></b></a>
                                                            <div class="dropdown-menu vertical-megamenu"
                                                                style="width: 748px;">
                                                                <div class="dropdown-menu-inner">
                                                                    <div class="element-inner">
                                                                        <div class="element-section-wrap">
                                                                            <div class="element-container">
                                                                                <div class="element-row">
                                                                                    <div class="col-lg-7">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div
                                                                                                    class="element-wrapper">
                                                                                                    <div
                                                                                                        class="title-wrapper">
                                                                                                        <div
                                                                                                            class="element-wrapper-title">
                                                                                                            Topics</div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="widget-nav-menu">
                                                                                                        <div
                                                                                                            class="element-list-wrapper wn-menu">
                                                                                                            <ul
                                                                                                                class="element-menu-list">
                                                                                                                <li><a
                                                                                                                        href="#">Color</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Digital
                                                                                                                        Painting</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Drawing</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Illustration</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Logo
                                                                                                                        Design</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">User
                                                                                                                        Experience</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Web
                                                                                                                        Design</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="element-warapper-btn">
                                                                                                        <a href="#">
                                                                                                            <div
                                                                                                                class="element-wrapper-sub-title">
                                                                                                                See All
                                                                                                                <i
                                                                                                                    class="flaticon-right-arrow-1"></i>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div
                                                                                                    class="element-wrapper">
                                                                                                    <div
                                                                                                        class="title-wrapper">
                                                                                                        <div
                                                                                                            class="element-wrapper-title">
                                                                                                            Popular
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="widget-nav-menu">
                                                                                                        <div
                                                                                                            class="element-list-wrapper wn-menu">
                                                                                                            <ul
                                                                                                                class="element-menu-list">
                                                                                                                <li><a
                                                                                                                        href="#">Color</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Digital
                                                                                                                        Painting</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Drawing</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Illustration</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Logo
                                                                                                                        Design</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">User
                                                                                                                        Experience</a>
                                                                                                                </li>
                                                                                                                <li><a
                                                                                                                        href="#">Web
                                                                                                                        Design</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="element-warapper-btn">
                                                                                                        <a href="#">
                                                                                                            <div
                                                                                                                class="element-wrapper-sub-title">
                                                                                                                See All
                                                                                                                <i
                                                                                                                    class="flaticon-right-arrow-1"></i>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-5 p0">
                                                                                        <div
                                                                                            class="element-img-widget-wrapper">
                                                                                            <div
                                                                                                class="element-widget-thumb">
                                                                                                <a href="#"><img
                                                                                                        class="img-fluid"
                                                                                                        src="{{ ('public/frontend/images/resource/1.png') }}"
                                                                                                        alt="1.png"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li><a href="#">Marketing</a></li>
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Photography</a></li>
                                                        <li><a href="#">Education + Elearning</a></li>
                                                        <li><a href="#">Music</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="ht_search_widget">
                                        <div class="header_search_widget home2">
                                            <form class="form-inline mailchimp_form">
                                                <input type="email" class="form-control mb-2 mr-sm-2"
                                                    id="inlineFormInputMail2"
                                                    placeholder="Search for the software or skills you want to learn">
                                                <button type="submit" class="btn btn-primary mb-2"><span
                                                        class="flaticon-magnifying-glass"></span></button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ht_right_widget float-right">
                            <ul class="text-right">
                                <li class="list-inline-item"><a href="#">+(90) 123 456 987</a></li>
                                <li class="list-inline-item">
                                    <div class="header_top_lang_widget">
                                        <select class="selectpicker show-tick">
                                            <option>English</option>
                                            <option>Frenc</option>
                                            <option>Italian</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Nav -->
        <header class="header-nav home2 style_one navbar-scrolltofixed main-menu">
            <div class="container">
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Responsive Menu Structure-->
                    <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                    <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                        <li>
                            <a href="{{URL::to('/home') }}"><span class="title">Trang Chủ</span></a>
                        </li>
                        <li>
                            <a href="{{URL::to('/') }}"><span class="title">Về Chúng Tôi</span></a>
                        </li>
                        <li>
                            <a href="{{URL::to('/course') }}"><span class="title">Khóa Học</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="title">Pages</span></a>
                            <ul>
                                {{-- <li>
                                    <a href="#"><span class="title">Shop Pages</span></a>
                                    <ul>
                                        <li><a href="page-shop.html">Shop</a></li>
                                        <li><a href="page-shop-single.html">Shop Single</a></li>
                                        <li><a href="page-shop-cart.html">Cart</a></li>
                                        <li><a href="page-shop-checkout.html">Checkout</a></li>
                                        <li><a href="page-shop-order.html">Order</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="title">User Admin</span></a>
                                    <ul>
                                        <li><a href="page-dashboard.html">Dashboard</a></li>
                                        <li><a href="page-my-courses.html">My Courses</a></li>
                                        <li><a href="page-my-order.html">My Order</a></li>
                                        <li><a href="page-my-message.html">My Message</a></li>
                                        <li><a href="page-my-review.html">My Review</a></li>
                                        <li><a href="page-my-bookmarks.html">My Bookmarks</a></li>
                                        <li><a href="page-my-listing.html">My Listing</a></li>
                                        <li><a href="page-my-setting.html">My Setting</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="page-gallery.html">Gallery</a></li>
                                <li><a href="page-faq.html">Faq</a></li>
                                <li><a href="page-pricing.html">Membership</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{URL::to('/post')}}"><span class="title">Tin Tức</span></a>
                        </li>
                        <li>
                            <a href="{{URL::to('/shop')}}"><span class="title">Cửa Hàng</span></a>
                        </li>
                        <li class="last">
                            <a href="{{URL::to('/contact')}}"><span class="title">Liên Hệ</span></a>
                        </li>
                    </ul>
                    <ul class="sign_up_btn pull-right dn-smd mt20">
                        <li class="list-inline-item"><a href="#" class="btn btn-md"><i
                                    class="flaticon-megaphone"></i><span class="dn-md">Become an Instructor</span></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="btn btn-md" data-toggle="modal"
                                data-target="#exampleModalCenter"><i class="flaticon-user"></i> <span
                                    class="dn-md">Đăng nhập/Đăng ký</span></a></li>
                    </ul><!-- Button trigger modal -->
                </nav>
                <!-- End of Responsive Menu -->
            </div>
        </header>
        <!-- Modal -->
        <div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Đăng Nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Đăng Ký</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="login_form">
                                <form action="#">
                                    <div class="heading">
                                        <h3 class="text-center">Đăng Nhập</h3>
                                        <p class="text-center">Chưa có tài khoản? <a class="text-thm" href="#">Đăng Ký!</a></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nhập Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="Nhập Mật khẩu">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
                                        <a class="tdu text-thm float-right" href="#">Quên mật khẩu?</a>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm2">Đăng Nhập</button>
                                    <hr>
                                    <div class="row mt40">
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block color-white bgc-fb"><i
                                                    class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                        </div>
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block color-white bgc-gogle"><i
                                                    class="fa fa-google float-left mt5"></i> Google</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="sign_up_form">
                                <div class="heading">
                                    <h3 class="text-center">Tạo tài khoản</h3>
                                    <p class="text-center">Đã có tài khoản? <a class="text-thm" href="#">Đăng Nhập</a></p>
                                </div>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            placeholder="Nhập Họ & Tên">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail2"
                                            placeholder="Nhập Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputPassword2"
                                            placeholder="Nhập Số điện thoại">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword3"
                                            placeholder="Nhập Mật khẩu">
                                    </div>
                                    {{-- <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                        <label class="form-check-label" for="exampleCheck2">Want to become an
                                            instructor?</label>
                                    </div> --}}
                                    <button type="submit" class="btn btn-log btn-block btn-thm2">Đăng Ký</button>
                                    <hr>
                                    <div class="row mt40">
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block color-white bgc-fb"><i
                                                    class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                        </div>
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block color-white bgc-gogle"><i
                                                    class="fa fa-google float-left mt5"></i> Google</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 home2 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="main_logo_home2">
                        <img class="nav_logo_img img-fluid float-left mt20" src="{{asset('public/frontend/images/header-logo.png') }}"
                            alt="header-logo.png">
                        <span>edumy</span>
                    </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item">
                            <div class="search_overlay">
                                <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                                    <div id="search-button"><i class="flaticon-magnifying-glass"></i></div>
                                </a>
                                <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
                                    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i
                                            class="fa fa-times"></i></a>
                                    <div id="mk-fullscreen-search-wrapper">
                                        <form method="get" id="mk-fullscreen-searchform">
                                            <input type="text" value="" placeholder="Search courses..."
                                                id="mk-fullscreen-search-input">
                                            <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value=""
                                                    type="submit"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                    </ul>
                </div>
            </div><!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><a href="{{URL::to('/home')}}"><span class="title">Trang Chủ</span></a></li>
                    <li><a href="{{URL::to('/course')}}"><span class="title">Khóa Học</span></a></li>
                    <li><a href="{{URL::to('/shop')}}"><span class="title">Cửa Hàng</span></a></li>
                    <li><a href="{{URL::to('/post')}}"><span class="title">Tin Tức</span></a></li>
                    <li><a href="{{URL::to('/contact')}}"><span class="title">Liên Hệ</span></a></li>
                    {{-- <li><span>Pages</span>
                        <ul>
                            <li><span>Shop Pages</span>
                                <ul>
                                    <li><a href="page-shop.html">Shop</a></li>
                                </ul>
                            </li>
                            <li><a href="page-about.html">About Us</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="page-login.html"><span class="flaticon-user"></span> Đăng Nhập</a></li>
                    <li><a href="page-register.html"><span class="flaticon-edit"></span> Đăng Ký</a></li>
                </ul>
            </nav>
        </div>




        @yield('content')

        <!-- Our Footer -->
        <section class="footer_one">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                        <div class="footer_contact_widget">
                            <h4>VỀ THE STEM HOUSE</h4>
                            <p>Địa chỉ: 52 An Cư 7, Đà Nẵng, Việt Nam</p>
                            <p>Thời gian: Thứ 2-thứ 7: 8h-17h30</p>
                            <p>Điện thoại: 0989 949 123</p>
                            <p>Email: contact@tamphat.edu.vn</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                        <div class="footer_company_widget">
                            <h4>THÔNG TIN</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="#">Khóa học</a></li>
                                <li><a href="#">Tin tức</a></li>
                                <li><a href="#">Cửa hàng</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                        <div class="footer_program_widget">
                            <h4>CHÍNH SÁCH</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Quy định chung</a></li>
                                <li><a href="#">Chính sách bảo mật thông tin</a></li>
                                <li><a href="#">Chính sách giá</a></li>
                                <li><a href="#">Chính sách vận chuyển</a></li>
                                <li><a href="#">Chính sách đổi trả</a></li>
                                <li><a href="#">Chính sách bảo hành</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                        <div class="footer_support_widget">
                            <h4>HỖ TRỢ</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Phân phối - Hợp tác</a></li>
                                <li><a href="#">Hướng dẫn thanh toán</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
                        <div class="footer_apps_widget">
                            <h4>MOBILE</h4>
                            <div class="app_grid">
                                <button class="apple_btn btn-dark">
                                    <span class="icon">
                                        <span class="flaticon-apple"></span>
                                    </span>
                                    <span class="title">App Store</span>
                                    <span class="subtitle">Available now on the</span>
                                </button>
                                <button class="play_store_btn btn-dark">
                                    <span class="icon">
                                        <span class="flaticon-google-play"></span>
                                    </span>
                                    <span class="title">Google Play</span>
                                    <span class="subtitle">Get in on</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Footer Middle Area -->
        <section class="footer_middle_area p0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 pb15 pt15">
                        <div class="logo-widget home2">
                            <img class="img-fluid" src="{{asset('public/frontend/images/header-logo.png')}}"
                                alt="header-logo.png">
                            <span>EDUMY</span>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 brdr_left_right">
                        <div class="footer_menu_widget">
                            <ul>
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><a href="#">Privacy</a></li>
                                <li class="list-inline-item"><a href="#">Terms</a></li>
                                <li class="list-inline-item"><a href="#">Sitemap</a></li>
                                <li class="list-inline-item"><a href="#">Purchase</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
                        <div class="footer_social_widget mt15">
                            <ul>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Footer Bottom Area -->
        <section class="footer_bottom_area pt25 pb25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="copyright-widget text-center">
                            <p>Copyright © 2020 - Edumy by<a href="https://tamphat.edu.vn/" target="_blank">Tâm
                                    phát</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
    </div>
    <!-- Wrapper End -->
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.mmenu.all.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/ace-responsive-menu.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/isotop.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/snackbar.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/simplebar.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/parallax.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/scrollto.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.counterup.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/progressbar.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/slider.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/timepicker.js') }}"></script>
    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{asset('public/frontend/js/script.js') }}"></script>
</body>

</html>
