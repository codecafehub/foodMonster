<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>{{$title}}</title>
        <!-- Custom fonts for this template-->
        <link href="{{asset('dassets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">    
        <!-- Custom styles for this template-->
        <link href="{{asset('dassets/css/sb-admin-2.min.css')}}" rel="stylesheet">
        {{-- <link rel="stylesheet" href="{{asset('assets/style.css')}}"> --}}
    </head>
    <body id="page-top">
        <div id="wrapper">
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> 
                @include('admin.layouts.sidebar')
            </ul>     
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('admin.layouts.nav')
                    @yield('content')
                </div> 
            </div> 
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>  
            @include('admin.layouts.footer')
        </div>
    </body>
</html>