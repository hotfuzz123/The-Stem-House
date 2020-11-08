@extends('layout')
@section('content')


<!-- Shop Single Content -->
<section class="shop-single-content pb0">
    <div class="container">
        @foreach ($product_details as $key => $value)
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="single_product_grid">
                    <div class="single_product_slider">
                        <div class="item">
                            <div class="single_product">
                                <div class="single_item">
                                    <div class="thumb"><img class="img-fluid" src="{{URL::to('uploads/product/' .$value->product_image) }}" alt="ss1.png"></div>
                                </div>
                                <a class="product_popup popup-img" href="{{URL::to('uploads/product/' .$value->product_image) }}"><span class="flaticon-zoom-in"></span></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_product">
                                <div class="single_item">
                                    <div class="thumb"><img class="img-fluid" src="{{URL::to('uploads/product/' .$value->product_image) }}" alt="ss1.png"></div>
                                </div>
                                <a class="product_popup popup-img" href="{{URL::to('uploads/product/' .$value->product_image) }}"><span class="flaticon-zoom-in"></span></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_product">
                                <div class="single_item">
                                    <div class="thumb"><img class="img-fluid" src="{{URL::to('uploads/product/' .$value->product_image) }}" alt="ss1.png"></div>
                                </div>
                                <a class="product_popup popup-img" href="{{URL::to('uploads/product/' .$value->product_image) }}"><span class="flaticon-zoom-in"></span></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_product">
                                <div class="single_item">
                                    <div class="thumb"><img class="img-fluid" src="{{URL::to('uploads/product/' .$value->product_image) }}" alt="ss1.png"></div>
                                </div>
                                <a class="product_popup popup-img" href="{{URL::to('uploads/product/' .$value->product_image) }}"><span class="flaticon-zoom-in"></span></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single_product">
                                <div class="single_item">
                                    <div class="thumb"><img class="img-fluid" src="{{URL::to('uploads/product/' .$value->product_image) }}" alt="ss1.png"></div>
                                </div>
                                <a class="product_popup popup-img" href="{{URL::to('uploads/product/' .$value->product_image) }}"><span class="flaticon-zoom-in"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="shop_single_product_details">
                    <h3 class="title">{{$value->product_name}}</h3>
                    <div class="sspd_review mb20">
                        <ul>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#">(6)</a></li>
                        </ul>
                    </div>
                    <p class="mb20"><p>{!!$value->product_desc!!}</p></p>
                    <div class="sspd_price mb25">{{number_format($value->product_price).' '.'đ'}}</div>
                    <ul class="cart_btns ui_kit_button mb30">
                        <li class="list-inline-item"><input placeholder="4" min="1" type="number"></li>
                        <li class="list-inline-item"><button type="button" class="btn"><span class="flaticon-shopping-bag pr5 fz20"></span>Thêm giỏ hàng</button></li>
                    </ul>
                    <ul class="sspd_sku mb30">
                        <li><a href="#">Kho: {{$value->product_quantity}}</a></li>
                        <li><a href="#">Tình trạng: Còn hàng</a></li>
                        <li><a href="#">Danh mục: {{$value->category_name}}</a></li>
                    </ul>
                    <ul class="sspd_social_icon">
                        <li class="list-inline-item">Chia sẻ:</li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="shop_single_tab_content mt40">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Đánh giá</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product_single_content">
                                <div class="mbp_pagination_comments">
                                    <div class="mbp_first media">
                                        <div class="media-body pb45">
                                            <p>{!!$value->product_content!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div class="product_single_content">
                                <div class="mbp_pagination_comments">
                                    <div class="mbp_first media">
                                        <img src="{{asset('frontend/images/resource/review1.png') }}" class="mr-3" alt="review1.png">
                                        <div class="media-body">
                                            <h4 class="sub_title mt-0">Warren Bethell
                                                <span class="sspd_review float-right">
                                                    <ul>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"></li>
                                                    </ul>
                                                </span>
                                            </h4>
                                            <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                            <p class="fz15 mt20">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first.</p>
                                            <p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p> <div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
                                            <div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i> <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
                                            <div class="custom_hr style2"></div>
                                            <div class="mbp_sub media">
                                                <a href="#"><img src="{{asset('frontend/images/resource/review1.png') }}" class="mr-3" alt="review1.png"></a>
                                                <div class="media-body">
                                                    <h4 class="sub_title mt-0">Anton Hilton
                                                        <span class="sspd_review float-right">
                                                            <ul>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"></li>
                                                            </ul>
                                                        </span>
                                                    </h4>
                                                    <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                                    <p class="fz15 mt20 mb50">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the</p>
                                                    <div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
                                                    <div class="sspd_review_liked">
                                                        <a href="#"><i class="flaticon-like-1"></i><span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom_hr"></div>
                                    <div class="mbp_second media">
                                        <img src="{{asset('frontend/images/resource/review1.png') }}" class="align-self-start mr-3" alt="review1.png">
                                        <div class="media-body">
                                            <h4 class="sub_title mt-0">Warren Bethell
                                                <span class="sspd_review float-right">
                                                    <ul>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="list-inline-item"></li>
                                                    </ul>
                                                </span>
                                            </h4>
                                            <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                            <p class="fz15 mt20">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first.</p>
                                            <p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p> <div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
                                            <div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i> <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
                                        </div>
                                    </div>
                                    <div class="text-center mt50 mb70">
                                        <button type="button" class="more-review-btn btn">See more reviews</button>
                                    </div>
                                    <div class="mbp_comment_form style2">
                                        <h4>Add Reviews & Rate</h4>
                                        <ul>
                                            <li class="list-inline-item pr15"><p>What is it like to Course?</p></li>
                                            <li class="list-inline-item">
                                                <span class="sspd_review">
                                                    <ul>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
                                                        <li class="list-inline-item"></li>
                                                    </ul>
                                                </span>
                                            </li>
                                        </ul>
                                        <form class="comments_form">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Review Title</label>
                                                <input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Review Content</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Our Product -->
<section class="our-product pb20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h3 class="mb0 mt0">Sản Phẩm Liên Quan</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shop_product_slider">
                    @foreach ($relate as $key => $relate_value)
                    <div class="item">
                        <a href="{{URL::to('/product-detail/' .$relate_value->product_slug) }}">
                            <div class="shop_grid">
                                <div class="thumb text-center">
                                    <img class="img-shop" src="{{asset('uploads/product/' .$relate_value->product_image ) }}" alt="1.png">
                                </div>
                                <div class="details">
                                    <h4 class="item-tile">{{ $relate_value->product_name }}</h4>
                                    <h4 class="price">{{number_format($relate_value->product_price).' '.'đ'}}</h4>
                                    {{-- <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul> --}}
                                </div>
                                <a class="cart_bag float-right" href="#"><span class="flaticon-shopping-bag"> MUA NGAY</span></a>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
