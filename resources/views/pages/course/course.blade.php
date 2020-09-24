@extends('layout')
@section('content')

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Khóa Học</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Khóa Học</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Members -->
<section class="our-team pb40">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="instructor_search_result style2">
                            <p class="mt10 fz15"><span class="color-dark pr10">Hiển thị 1-9</span>trên <span class="color-dark pr10">1,236 khóa học</span></p>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="candidate_revew_select style2 text-right mb25">
                            <ul>
                                <li class="list-inline-item">
                                    <select class="selectpicker show-tick">
                                        <option>Mới Nhất</option>
                                        <option>Giá Tăng Dần</option>
                                        <option>Giá Giảm Dần</option>
                                        <option>Từ A đến Z</option>
                                        <option>Từ Z đến A</option>
                                    </select>
                                </li>
                                <li class="list-inline-item">
                                    <div class="candidate_revew_search_box course mb30 fn-520">
                                        <form class="form-inline my-2 my-lg-0">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Tìm giảng viên" aria-label="Search">
                                            <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($all_course as $key => $course)
                        <div class="col-lg-6 col-xl-4">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp img-course" src="{{URL::to('public/uploads/course/' .$course->course_image) }}" alt="t1.jpg">
                                    <div class="overlay">
                                        <div class="tag">Best Seller</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Xem Trước Khóa Học</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Ali TUFAN</p>
                                        <h5>{{$course->course_name}}</h5>
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
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">1548</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                        <div class="tc_price float-right">{{number_format($course->course_price).' '.'VND'}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-12">
                        <div class="mbp_pagination">
                            <ul class="page_navigation">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">14</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next <span class="flaticon-right-arrow-1"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="selected_filter_widget style2 mb30">
                      <div id="accordion" class="panel-group">
                        <div class="panel">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Danh mục khóa học</a>
                                </h4>
                              </div>
                            <div id="panelBodySoftware" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    @foreach ($category as $key => $cate)
                                    <div class="category_sidebar_widget">
                                        <ul class="category_list">
                                            <li><a href="">{{$cate->category_name}}<span class="float-right">(03)</span></a></li>
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                                {{-- <div class="panel-body">
                                    <div class="ui_kit_checkbox">
                                        @foreach ($category as $key => $cate)
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">{{$cate->category_name}} <span class="float-right">(03)</span></label>
                                            </div>
                                        @endforeach
                                        <a class="color-orose" href="#"><span class="fa fa-plus pr10"></span> Hiển Thị Thêm</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected_filter_widget style2">
                      <div id="accordion" class="panel-group">
                        <div class="panel">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a href="#panelBodyAuthors" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Giảng Viên</a>
                                </h4>
                              </div>
                            <div id="panelBodyAuthors" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="cl_skill_checkbox">
                                        <div class="content ui_kit_checkbox style2 text-left">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck0">
                                                <label class="custom-control-label" for="customCheck0">Chris Convrse <span class="float-right">(03)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Morten Rand <span class="float-right">(15)</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected_filter_widget style2 mb30">
                      <div id="accordion" class="panel-group">
                        <div class="panel">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a href="#panelBodyPrice" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Giá</a>
                                </h4>
                              </div>
                            <div id="panelBodyPrice" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="ui_kit_whitchbox">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                            <label class="custom-control-label" for="customSwitch1">Trả Tiền </label>
                                        </div>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                            <label class="custom-control-label" for="customSwitch2">Miễn Phí</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected_filter_widget style2 mb30">
                      <div id="accordion" class="panel-group">
                        <div class="panel">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a href="#panelBodySkills" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Trình Độ</a>
                                </h4>
                              </div>
                            <div id="panelBodySkills" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="ui_kit_checkbox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck99">
                                            <label class="custom-control-label" for="customCheck99">Cơ Bản <span class="float-right">(03)</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck98">
                                            <label class="custom-control-label" for="customCheck98">Khá <span class="float-right">(15)</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck97">
                                            <label class="custom-control-label" for="customCheck97">Nâng Cao <span class="float-right">(126)</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck96">
                                            <label class="custom-control-label" for="customCheck96">Phù Hợp Tất Cả <span class="float-right">(1,584)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected_filter_widget style2">
                      <div id="accordion" class="panel-group">
                        <div class="panel">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a href="#panelBodyRating" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Đánh Giá</a>
                                </h4>
                              </div>
                            <div id="panelBodyRating" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="ui_kit_checkbox style2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck80">
                                            <label class="custom-control-label" for="customCheck80">Hiển Thị Tất Cả <span class="float-right">(03)</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck82">
                                            <label class="custom-control-label" for="customCheck82">1 sao <span class="float-right">(15)</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck83">
                                            <label class="custom-control-label" for="customCheck83">2 sao <span class="float-right">(126)</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck84">
                                            <label class="custom-control-label" for="customCheck84">3 sao <span class="float-right">(1,584)</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck85">
                                            <label class="custom-control-label" for="customCheck85">4 sao <span class="float-right">(34)</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck86">
                                            <label class="custom-control-label" for="customCheck86">5 sao <span class="float-right">(58)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected_filter_widget style2">
                    <span class="float-left"><img class="mr20" src="{{asset('public/frontend/images/resource/2.png') }}" alt="2.png"></span>
                    <h4 class="mt15 fz20 fw500">Không chắc?</h4>
                    <br>
                    <p>Mỗi khóa học đều đảm bảo sẽ được hoàn tiền sau 30 ngày</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
