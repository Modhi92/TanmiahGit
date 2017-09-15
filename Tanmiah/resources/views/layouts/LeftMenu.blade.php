<head>
    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<div class="row">

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="barra">
                        <ul class="nav nav-tabs">
                            <li class="dropdown">
                                <a href="{{url('AllEmployee')}}" >الموظفات </a>
                            </li>
                            <li class="dropdown">
                                <a href="{{url('viewActive')}}">البرامج و الانشطه </a>
                            </li>
                            <li class="dropdown">
                                <a href="{{url('viewSchool')}}"  >المدارس </a>
                              <!--
                              <span class="caret"></span>
                               data-toggle="dropdown"
                               <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Default 4</a></li>
                                    <li><a href="#">Default 4</a></li>

                                </ul> -->
                            </li>
                            <li class="dropdown">
                                <a href="{{url('viewAdvert')}}" >الاعلانات </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">الاسر المنتجه <span class="caret"></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">المشرفات <span class="caret"></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">الميزانيه <span class="caret"></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">فريق لنخلد اثر التطوعي <span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">لجنة التنميه </a></li>
                                    <li><a href="#">فريق لنخلد اثر</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layouts.error')