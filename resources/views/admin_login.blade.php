<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="{{asset('public/backend/admin/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/backend/admin/plugins/iconic/css/material-design-iconic-font.min.css') }}">
	<!-- bootstrap -->
	<link href="{{asset('public/backend/admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="{{asset('public/backend/admin/css/pages/extra_pages.css') }}">
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ ('public/backend/admin/img/favicon.ico') }}" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form action="{{URL::to('/admin-dashboard') }}" method="post" class="login100-form validate-form">
					<span class="login100-form-logo">
						<img alt="" src="{{asset('public/backend/admin/img/logo-2.png') }}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Đăng nhập Admin
                    </span>
                    <?php
                    $message = Session::get('message');
                    if($message){
                        echo $message;
                        Session::put('message', null);
                    }
                    ?>
                    {{ csrf_field() }}
					<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100" type="text" name="admin_email" placeholder="Nhập Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="admin_password" placeholder="Nhập Mật khẩu">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng nhập
						</button>
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="forgot_password.html">
							Quên mật khẩu?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="{{asset('public/backend/admin/plugins/jquery/jquery.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{asset('public/backend/admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{asset('public/backend/admin/js/pages/extra-pages/pages.js') }}"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 08:19:45 GMT -->
</html>
