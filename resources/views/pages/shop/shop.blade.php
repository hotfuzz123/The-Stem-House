@extends('layout')
@section('content')


<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Cửa hàng</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{URL::to('/home')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{URL::to('/shop')}}">Cửa hàng</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Members -->
<section class="our-team pb50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="instructor_search_result style2">
                            <p class="mt10 fz15"><span class="color-dark pr10">Hiển thị 1-9</span>trên <span class="color-dark pr10">100 sản phẩm</span></p>
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
                                            <input class="form-control mr-sm-2" type="search" placeholder="Tìm sản phẩm" aria-label="Search">
                                            <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($all_product as $key => $product)
                        <div class="col-sm-6 col-lg-6 col-xl-4">
                            <a href="{{URL::to('/product-detail/' .$product->product_slug) }}">
                                <div class="shop_grid">
                                    <div class="thumb text-center">
                                        <img class="img-shop" src="{{URL::to('public/uploads/product/' .$product->product_image) }}" alt="1.png">
                                    </div>
                                    <div class="details">
                                        <h4 class="item-tile">{{$product->product_name}}</h4>
                                        <h4 class="price">{{number_format($product->product_price).' '.'đ'}}</h4>
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

                    <div class="col-lg-12">
                        {{-- {!! $all_product->links() !!} --}}
                        {{ $all_product->render("pagination::theme") }}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="selected_filter_widget style2 mb30">
                      <div id="accordion" class="panel-group">
                        <div class="panel">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Danh mục sản phẩm</a>
                                </h4>
                              </div>
                            <div id="panelBodySoftware" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    @foreach ($category as $key => $cate)
                                    <div class="category_sidebar_widget">
                                        <ul class="category_list">
                                            <li><a href="{{ URL::to('/product-category/'.$cate->slug_category_product) }}">{{$cate->category_name}}<span class="float-right">(03)</span></a></li>
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
