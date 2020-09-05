@extends('layout')
@section('content')


<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    @foreach ($category_name as $key => $name)
                    <h4 class="breadcrumb_title">{{ $name->category_name }}</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $name->category_name }}</li>
                    </ol>
                    @endforeach
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
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <div class="instructor_search_result">
                            <p class="mt10 fz15"><span class="pr-1">Showing 1–9 of</span>15 results</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <div class="candidate_revew_select text-right tac-xsd mb25">
                            <ul>
                                <li class="list-inline-item">
                                    <select class="selectpicker show-tick">
                                        <option>Mới Nhất</option>
                                        <option>Phổ Biến</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($category_by_id as $key => $product)
                    <a href="{{URL::to('/product-detail/' .$product->product_id) }}">
                        <div class="col-sm-6 col-lg-6 col-xl-4">
                            <div class="shop_grid">
                                <div class="thumb text-center">
                                    <img class="img-shop" src="{{URL::to('public/uploads/product/' .$product->product_image) }}" alt="1.png">
                                </div>
                                <div class="details float-left">
                                    <h4 class="price">{{number_format($product->product_price).' '.'VND'}}</h4>
                                    <h4 class="item-tile">{{$product->product_name}}</h4>
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <a class="cart_bag float-right" href="#"><span class="flaticon-shopping-bag"></span></a>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    <div class="col-lg-12">
                        <div class="mbp_pagination mt20">
                            <ul class="page_navigation">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
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
                                    <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Danh mục sản phẩm</a>
                                </h4>
                              </div>
                            <div id="panelBodySoftware" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    @foreach ($category as $key => $cate)
                                    <div class="category_sidebar_widget">
                                        <ul class="category_list">
                                            <li><a href="{{ URL::to('/product-category/' .$cate->category_id) }}">{{$cate->category_name}}<span class="float-right">(03)</span></a></li>
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