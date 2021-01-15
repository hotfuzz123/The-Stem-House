<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="{{ asset('backend/admin/fonts/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('backend/admin/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('backend/admin/fonts/material-design-icons/material-icon.css') }}" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="{{ asset('backend/admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('backend/admin/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <!-- data tables -->
    <link href="{{ asset('backend/admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome 5 -->
    <script src="https://kit.fontawesome.com/91f55319c9.js" crossorigin="anonymous"></script>
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{ asset('backend/admin/plugins/material/material.min.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/admin/css/material_style.css') }}">
	<!-- inbox style -->
	<link href="{{ asset('backend/admin/css/pages/inbox.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="{{ asset('backend/admin/css/theme/light/theme_style.css') }}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{ asset('backend/admin/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('backend/admin/css/theme/light/style.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('backend/admin/css/responsive.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('backend/admin/css/theme/light/theme-color.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/admin/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet">
    <!-- favicon -->
	<link rel="shortcut icon" href="{{ asset('backend/admin/img/favicon.ico') }}" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
        @include('layouts.admin_layout.admin_header')
		<!-- end header -->
		<!-- start color quick setting -->
        @include('layouts.admin_layout.admin_setting')
		<!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            @include('layouts.admin_layout.admin_sidebar')
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    @yield('admin_content')
                </div>
            </div>
            <!-- end page content -->

        </div>

		<!-- end page container -->
		<!-- start footer -->
        @include('layouts.admin_layout.admin_footer')
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="{{ asset('backend/admin/plugins/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('backend/admin/plugins/popper/popper.js') }}"></script>
	<script src="{{ asset('backend/admin/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
	<script src="{{ asset('backend/admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/admin/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('backend/admin/plugins/jquery-validation/js/additional-methods.min.js') }}"></script>
    <!-- bootstrap -->
	<script src="{{ asset('backend/admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('backend/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
	<script src="{{ asset('backend/admin/plugins/sparkline/jquery.sparkline.js') }}"></script>
	<script src="{{ asset('backend/admin/js/pages/sparkline/sparkline-data.js') }}"></script>
    <!-- data tables -->
    <script src="{{ asset('backend/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/admin/js/pages/table/table_data.js') }}"></script>
    <!-- Common js-->
	<script src="{{ asset('backend/admin/js/app.js') }}"></script>
	<script src="{{ asset('backend/admin/js/layout.js') }}"></script>
	<script src="{{ asset('backend/admin/js/theme-color.js') }}"></script>
	<!-- material -->
    <script src="{{ asset('backend/admin/plugins/material/material.min.js') }}"></script>
    <script src="{{ asset('backend/admin/plugins/flatpicker/js/flatpicker.min.js') }}"></script>
	<script src="{{ asset('backend/admin/js/pages/date-time/date-time.init.js') }}"></script>
	<!--apex chart-->
	<script src="{{ asset('backend/admin/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/admin/js/pages/chart/chartjs/home-data.js') }}"></script>
    <!-- Ckeditor 4 -->
    <script src="//cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
    <!-- Ckeditor 5 -->
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/decoupled-document/ckeditor.js"></script> --}}
    {{-- <script src="{{ asset('backend/admin/plugins/ckeditor5/build/ckeditor.js') }}"></script>
    <script src="{{ asset('backend/admin/plugins/ckeditor5/build/ckeditor.js.map') }}"></script>
    <script src="{{ asset('backend/admin/plugins/ckeditor5/src/ckeditor.js') }}"></script> --}}

    <!-- Validator -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script src="{{ asset('backend/admin/plugins/validator/jquery.form-validator.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('backend/admin/js/custom.js')}}"></script>
	<!-- summernote -->
	<script src="{{ asset('backend/admin/plugins/summernote/summernote.js') }}"></script>
	<script src="{{ asset('backend/admin/js/pages/summernote/summernote-data.js') }}"></script>
	<!-- end js include path -->
</body>

</html>
