@extends('layout')
@section('content')

<!-- 2nd Home Slider -->
<div class="home2-slider">
    <div class="container-fluid p0">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-banner-wrapper">
                    <div class="banner-style-one owl-theme owl-carousel">
                        {{-- Hiển thị slider --}}
                        @foreach ($all_slider as $key => $slider)
                        <div class="slide slide-one sh2" style="background-image: url({{URL::to('public/uploads/slider/' .$slider->slider_image) }});" alt="{{$slider->slider_desc}}">
                            {{-- <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h3 class="banner-title">Start Investing in You</h3>
                                        <p>Technology is brining a massive wave of evolution on learning things
                                            on different ways</p>
                                        <div class="btn-block">
                                            <a href="#" class="banner-btn">Ready to get Started?</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        @endforeach
                    </div>
                    <div class="carousel-btn-block banner-carousel-btn">
                        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i>
                            <span class="left">TRƯỚC</span>
                        </span>
                        <span class="carousel-btn right-btn"><span class="right">TIẾP</span>
                            <i class="flaticon-right-arrow-1 right"></i>
                        </span>
                    </div><!-- /.carousel-btn-block banner-carousel-btn -->
                </div><!-- /.main-banner-wrapper -->
            </div>
        </div>
    </div>
</div>

<!-- School Category Courses -->
<section id="our-top-courses" class="our-courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Những Khóa Học Mới Nhất</h3>
                    <p>Chúng tôi ưu tiên chất lượng dạy học lên hàng đầu.</p>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- Hiển thị khóa học mới nhất --}}
            @foreach ($all_course as $key => $course)
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="top_courses">
                    <div class="thumb">
                        <img class="img-whp img-course" src="{{URL::to('public/uploads/course/' .$course->course_image) }}" alt="Ảnh khóa học {{$course->course_name}}">
                        <div class="overlay">
                            <div class="tag">{{$course->category_name}}</div>
                            <div class="icon"><span class="flaticon-like"></span></div>
                            <a class="tc_preview_course" href="{{URL::to('/course-detail/' .$course->course_slug) }}">Xem Trước Khóa Học</a>
                        </div>
                    </div>
                    <div class="details">
                        <div class="tc_content">
                            <p>Admin</p>
                            <h5><a href="{{URL::to('/course-detail/' .$course->course_slug) }}">{{$course->course_name}}</a></h5>
                            <ul class="tc_review">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="list-inline-item"><a href="#">(6)</a></li>
                            </ul>
                        </div>
                        <div class="tc_footer">
                            <ul class="tc_meta float-left">
                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#">1548</a></li>
                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#">25</a></li>
                            </ul>
                            <div class="tc_price float-right">{{number_format($course->course_price).' '.'đ'}}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-6 offset-lg-3">
                <div class="courses_all_btn text-center">
                    <a class="btn btn-transparent" href="{{URL::to('/course') }}">Hiển Thị Toàn Bộ Khóa Học</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divider -->
<section class="divider_home2 parallax bg-img2" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="color-white mt0">Scholl Achievements</h3>
                    <p class="color-white">Here you can review some statistics about our Education Center</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3 text-center">
                <div class="funfact_one">
                    <div class="icon"><span class="flaticon-student-3"></span></div>
                    <div class="details">
                        <ul>
                            <li class="list-inline-item">
                                <div class="timer">65</div>
                            </li>
                            <li class="list-inline-item"><span>m+</span></li>
                        </ul>
                        <h5>Students learning</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 text-center">
                <div class="funfact_one">
                    <div class="icon"><span class="flaticon-cap"></span></div>
                    <div class="details">
                        <div class="timer">58263</div>
                        <h5>Graduates</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 text-center">
                <div class="funfact_one">
                    <div class="icon"><span class="flaticon-jigsaw"></span></div>
                    <div class="details">
                        <div class="timer">896673</div>
                        <h5>Free courses</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 text-center">
                <div class="funfact_one">
                    <div class="icon"><span class="flaticon-online-learning"></span></div>
                    <div class="details">
                        <div class="timer">8570</div>
                        <h5>Active courses</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Blog -->
<section class="our-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Blog</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_post_slider_home4">
                    <div class="item">
                        <div class="blog_post_home4">
                            <div class="bph4_thumb">
                                <img class="img-fluid" src="{{asset('public/frontend/images/blog/h41.jpg') }}" alt="h41.jpg">
                                <div class="bph4_date_meta">
                                    <p class="year">2019</p>
                                    <p class="date">April 24</p>
                                </div>
                            </div>
                            <div class="details">
                                <h5>Tips</h5>
                                <h4>Attract More Attention Sales And Profits</h4>
                                <p>A job ravenously while Far much that one rank beheld after outside ignobly more when oh fussy insect wow.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog_post_home4">
                            <div class="bph4_thumb">
                                <img class="img-fluid" src="{{asset('public/frontend/images/blog/h42.jpg') }}" alt="h42.jpg">
                                <div class="bph4_date_meta">
                                    <p class="year">2019</p>
                                    <p class="date">April 24</p>
                                </div>
                            </div>
                            <div class="details">
                                <h5>Marketing</h5>
                                <h4>11 Tips to Help You Get New Clients</h4>
                                <p>Think back over your life. Think about the people that had a positive influence on Far much that one rank beheld.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog_post_home4">
                            <div class="bph4_thumb">
                                <img class="img-fluid" src="{{asset('public/frontend/images/blog/h43.jpg') }}" alt="h43.jpg">
                                <div class="bph4_date_meta">
                                    <p class="year">2019</p>
                                    <p class="date">April 24</p>
                                </div>
                            </div>
                            <div class="details">
                                <h5>Tips</h5>
                                <h4>An Overworked Newspaper Editor</h4>
                                <p>Repeatedly dreamed alas opossum but dramatical despite expeditiously that jeepers loosely yikes the as compactly far</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog_post_home4">
                            <div class="bph4_thumb">
                                <img class="img-fluid" src="{{asset('public/frontend/images/blog/h42.jpg') }}" alt="h42.jpg">
                                <div class="bph4_date_meta">
                                    <p class="year">2019</p>
                                    <p class="date">April 24</p>
                                </div>
                            </div>
                            <div class="details">
                                <h5>Tips</h5>
                                <h4>Attract More Attention Sales And Profits</h4>
                                <p>A job ravenously while Far much that one rank beheld after outside ignobly more when oh fussy insect wow.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="our-testimonials bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">What People Say</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="testimonial_slider_home3">
                    <div class="item">
                        <div class="testimonial_grid">
                            <div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
                            <div class="testimonial_content">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('public/frontend/images/testimonial/1.jpg') }}" alt="1.jpg">
                                    <h4>Alex Gibson</h4>
                                    <p>Telemarketer</p>
                                </div>
                                <div class="details">
                                    <p>This is the best job-board theme that our company has come across! Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_grid">
                            <div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
                            <div class="testimonial_content">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('public/frontend/images/testimonial/2.jpg') }}" alt="2.jpg">
                                    <h4>Alex Gibson</h4>
                                    <p>Telemarketer</p>
                                </div>
                                <div class="details">
                                    <p>This is the best job-board theme that our company has come across! Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_grid">
                            <div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
                            <div class="testimonial_content">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('public/frontend/images/testimonial/3.jpg') }}" alt="3.jpg">
                                    <h4>Alex Gibson</h4>
                                    <p>Telemarketer</p>
                                </div>
                                <div class="details">
                                    <p>This is the best job-board theme that our company has come across! Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_grid">
                            <div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
                            <div class="testimonial_content">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('public/frontend/images/testimonial/4.jpg') }}" alt="4.jpg">
                                    <h4>Alex Gibson</h4>
                                    <p>Telemarketer</p>
                                </div>
                                <div class="details">
                                    <p>This is the best job-board theme that our company has come across! Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_grid">
                            <div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
                            <div class="testimonial_content">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('public/frontend/images/testimonial/5.jpg') }}" alt="5.jpg">
                                    <h4>Alex Gibson</h4>
                                    <p>Telemarketer</p>
                                </div>
                                <div class="details">
                                    <p>This is the best job-board theme that our company has come across! Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divider -->
<section class="divider2 parallax bgc-thm2" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="divider-two">
                    <p class="color-white">Get 100 Online Courses for Free</p>
                    <h1 class="color-white text-uppercase">REGISTER TO GET IT</h1>
                    <div id="countdown"></div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="divider-two">
                    <p class="color-white">CREATE FREE ACCOUNT TO GET</p>
                    <h3 class="color-white text-uppercase">The Complete Web Developer Course</h3>
                </div>
                <div class="divider-two-form">
                    <div id="mc_embed_signup">
                        <form method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Your Name">
                                </div>
                                <div class="mc-field-group">
                                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
                                </div>
                                <a href="#" class="btn btn-lg mailchimp_btn">Get It Now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Our Partners -->
<section id="our-partners" class="our-partners">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Need To Train Your Team?</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="{{asset('public/frontend/images/partners/1.png') }}" alt="1.png">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="{{asset('public/frontend/images/partners/2.png') }}" alt="2.png">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="{{asset('public/frontend/images/partners/3.png') }}" alt="3.png">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="{{asset('public/frontend/images/partners/4.png') }}" alt="4.png">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="{{asset('public/frontend/images/partners/5.png') }}" alt="5.png">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Newslatters -->
<section id="our-newslatters" class="our-newslatters">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Get Newsletter</h3>
                    <p>Your download should start automatically, if not Click here. Should I give up, huh?.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="footer_apps_widget_home1">
                    <form class="form-inline mailchimp_form">
                        <input type="email" class="form-control" placeholder="Email address">
                        <button type="submit" class="btn btn-lg btn-thm dbxshad">Get it now <span class="flaticon-right-arrow-1"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
