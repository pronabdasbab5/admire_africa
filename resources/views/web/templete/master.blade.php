<!DOCTYPE html>
<html>
    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8">

        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Home - Admired in Africa Awards</title>
    	{{-- META --}}
    	@yield('meta')

        <!-- CSS -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">
        <!-- Animation -->
        <link rel="stylesheet" href="{{asset('web/css/animate.css')}}">
        <!-- magnific -->
        <link rel="stylesheet" href="{{asset('web/css/magnific-popup.css')}}">
        <!-- carousel -->
        <link rel="stylesheet" href="{{asset('web/css/owl.carousel.min.css')}}">
        <!-- isotop -->
        <link rel="stylesheet" href="{{asset('web/css/isotop.css')}}">
        <!-- ico fonts -->
        <link rel="stylesheet" href="{{asset('web/css/xsIcon.css')}}">
        <!-- Template styles-->
        <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
        <!-- Responsive styles-->
        <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">

    	{{-- EXTRA STYLESHEET --}}
    	@yield('stylesheet')
    </head>

    <body>
        <div class="body-inner">
        {{-- HEADER --}}
    	@include('web.include.header')

        {{-- CONTENT --}}
    	@yield('content')

        {{-- FOOTER --}}
    	@include('web.include.footer')

    	@yield('script')
    </body>
</html>
       

        

  