<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{asset('assets/img/specials-5.png')}}" type="image/x-icon"/>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/sweetalert2.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/style.css')}}">
        <title>{{$title}}</title>
    </head>
    <body>

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
        <div class="footer text-center text-light text-align-center justify-content-center  py-3" style="background: #000">
            <h4 class="mr-5 scrolltotop"><i class="fas fa-arrow-up" style="color:#CDA45E;"></i></h4>
            <h6 class="mt-4">© Copyright Modest kitchen. All Rights Reserved
            <p style="padding-top: 10px">Design By <small> <a href="#" style="text-decoration: none; color:orange"> CodeCafe Technologies</a></small></p>
            </h6>
        </div>
        <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.js')}}"></script>
        <script src="{{asset('assets/js/script.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
