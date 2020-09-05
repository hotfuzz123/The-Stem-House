@extends('layout')
@section('content')


<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Contact Us</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It's Work -->
<section class="our-contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="contact_localtion text-center">
                    <div class="icon"><span class="flaticon-placeholder-1"></span></div>
                    <h4>Địa Chỉ</h4>
                    <p>Số 52 An Cư 7, Sơn Trà, Đà Nẵng</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="contact_localtion text-center">
                    <div class="icon"><span class="flaticon-phone-call"></span></div>
                    <h4>Liên Hệ</h4>
                    <p class="mb0">SĐT: 058.233.9051 </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="contact_localtion text-center">
                    <div class="icon"><span class="flaticon-email"></span></div>
                    <h4>Hỗ Trợ</h4>
                    <p>contact@tamphat.edu.vn</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="h600" id="map-canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1820.324125375993!2d108.24164943529998!3d16.075372572141433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421788e332117f%3A0x22cfe61db59a2399!2zNTIgQW4gQ8awIDcsIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1581158919943!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-lg-6 form_grid">
                <h4 class="mb5">Send a Message</h4>
                <p>Chúng tôi có thể giúp gì cho bạn?</p>
                <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputName">Họ & Tên</label>
                                <input id="form_name" name="form_name" class="form-control" required="required" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail">Địa chỉ Email</label>
                                <input id="form_email" name="form_email" class="form-control required email" required="required" type="email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputSubject">Chủ Đề</label>
                                <input id="form_subject" name="form_subject" class="form-control required" required="required" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung</label>
                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required"></textarea>
                            </div>
                            <div class="form-group ui_kit_button mb0">
                                <button type="button" class="btn dbxshad btn-lg btn-thm circle white">Gửi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
