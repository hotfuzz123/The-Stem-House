<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include('frontend.layouts.head')
</head>

<body>
    <div class="wrapper">
        @include('frontend.layouts.header')

        @yield('content')
        
        @include('frontend.layouts.footer')
    </div>
    @include('frontend.layouts.script')
</body>

</html>
