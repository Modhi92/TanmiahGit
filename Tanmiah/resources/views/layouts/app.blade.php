<!DOCTYPE html>
@include('layouts.style')
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- social -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="container">
    <header>

        <img src="{{asset('images\logbasic.png')}}" id="image-header" height='5%'>
    <!-- <img src="{{asset('images\9966cac721a707d8b70da5082e8e63cd.png')}}" style="float: none" id="image-header" >
        <img src="{{asset('images\شعار_رؤية_السعودية_2030.png')}}" id="image-header" >-->

        <div class="pull-left">
            <ul class='social'>
                <li><a href="#"> <i class=" fa fa-facebook">   </i> </a></li>
                <li><a href="#"> <i class="fa fa-twitter">   </i> </a></li>
                <li><a href="#"> <i class="fa fa-google-plus">   </i> </a></li>
                <li><a href="#"> <i class="fa fa-pinterest">   </i> </a></li>
                <li><a href="#"> <i class="fa fa-youtube">   </i> </a></li>
            </ul>
        </div>
    </header>
    <div class="container-white">
        <div id="nav-index">
            <nav class="navbar navbar-default navbar-static-top">

                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        <li><img src="{{asset('images\9966cac721a707d8b70da5082e8e63cd.png')}}" width="60px"
                                 style="padding:5px"></li>
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                        @endif
                        <li><a href="{{ route('login') }}">الانشطه </a></li>
                        <li><a href="{{ route('login') }}">هدفنا </a></li>
                        <li><a href="{{ route('login') }}">الفريق التطوعي </a></li>

                    </ul>
                </div>
            </nav>
        </div>
        @yield('content')
    </div>
</div>
<!-- Scripts -->
<div class="container">
    <div class="navbar navbar-bottom">
        <div class="pull-left">
            <p style="margin-top: 10px"> جميع الحقوق محفوظة للجنة التنميه الاجتماعيه
                بالبديع &copy; <?php echo date("Y") ?></p>
        </div>

    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
