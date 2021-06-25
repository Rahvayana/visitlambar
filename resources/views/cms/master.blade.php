<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <title>Niche Admin - Powerful Bootstrap 4 Dashboard and Admin Template</title> -->
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">

    <!-- v4.0.0-alpha.6 -->
    <link rel="stylesheet" href="{{ asset('cms/bootstrap/css/bootstrap.min.css')}}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link href="{{ asset('frontend/css/font-icons.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('cms/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('cms/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('cms/css/et-line-font/et-line-font.css')}}">
    <link rel="stylesheet" href="{{ asset('cms/css/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/your-style.css')}}">

    <!-- form wizard -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/formwizard/jquery-steps.css')}}">

    <link rel="stylesheet" href="{{ asset('cms/plugins/dropify/dropify.min.css')}}">

    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index.html" class="logo blue-bg">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="{{ asset('cms/img/logo-n-blue.png')}}" alt=""></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="{{ asset('cms/img/logo-blue.png')}}" alt=""></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar blue-bg navbar-static-top">
                <!-- Sidebar toggle button-->
                <ul class="nav navbar-nav pull-left">
                    <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
                </ul>
                <div class="pull-left search-box">
                    <form action="#" method="get" class="search-form">
                        <div class="input-group">
                            <input name="search" class="form-control" placeholder="Search..." type="text">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
                            </span>
                        </div>
                    </form>
                    <!-- search form -->
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 new messages</li>
                                <li>
                                    <ul class="menu">
                                        <li><a href="#">
                                                <div class="pull-left"><img src="{{ asset('cms/img/img1.jpg')}}" class="img-circle" alt="User Image"> <span class="profile-status online pull-right"></span></div>
                                                <h4>Alex C. Patton</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img src="{{ asset('cms/img/img3.jpg')}}" class="img-circle" alt="User Image"> <span class="profile-status offline pull-right"></span></div>
                                                <h4>Nikolaj S. Henriksen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">10:15 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img src="{{ asset('cms/img/img2.jpg')}}" class="img-circle" alt="User Image"> <span class="profile-status away pull-right"></span></div>
                                                <h4>Kasper S. Jessen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">8:45 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img src="{{ asset('cms/img/img4.jpg')}}" class="img-circle" alt="User Image"> <span class="profile-status busy pull-right"></span></div>
                                                <h4>Florence S. Kasper</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">12:15 AM</span></p>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Notifications</li>
                                <li>
                                    <ul class="menu">
                                        <li><a href="#">
                                                <div class="pull-left icon-circle red"><i class="icon-lightbulb"></i></div>
                                                <h4>Alex C. Patton</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle blue"><i class="fa fa-coffee"></i></div>
                                                <h4>Nikolaj S. Henriksen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">1:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle green"><i class="fa fa-paperclip"></i></div>
                                                <h4>Kasper S. Jessen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle yellow"><i class="fa  fa-plane"></i></div>
                                                <h4>Florence S. Kasper</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">11:10 AM</span></p>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Check all Notifications</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu p-ph-res"> <a href="#"> <img src="{{ asset('cms/img/img1.jpg')}}" class="user-image" alt="User Image"> <span class="hidden-xs">{{Auth::user()->name}}</span> </a>

                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <div class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="image text-center"><img src="{{ asset('cms/img/img1.jpg')}}" class="img-circle" alt="User Image"> </div>
                    <div class="info">
                        <p>{{Auth::user()->name}}</p>
                        <a href="#"><i class="fa fa-cog"></i></a> <a href="#"><i class="fa fa-envelope-o"></i></a> 
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                                      </a>              
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">PERSONAL</li>
                    <li class="{{Route::currentRouteNamed('cms.dashboard') ? 'active' : ''}}"><a href="{{ route('cms.dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a></li>

                    @if (Route::currentRouteNamed('cms.tour.*') || Route::currentRouteNamed('cms.destination.*') || Route::currentRouteNamed('cms.available.*') )
                        @php
                            $active = 'active'
                        @endphp
                    @else
                        @php
                            $active = ''
                        @endphp
                    @endif
                    <li class="treeview {{$active}}"> <a href="#"> <i class="fa fa-compass"></i> <span>Adventure</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li class="{{Route::currentRouteNamed('cms.tour.*') ? 'active' : ''}}"><a href="{{ route('cms.tour.index')}}">Tour Package</a></li>
                            <li class="{{Route::currentRouteNamed('cms.destination.*') ? 'active' : ''}}"><a href="{{ route('cms.destination.index')}}">Destination</a></li>
                            <li class="{{Route::currentRouteNamed('cms.available.*') ? 'active' : ''}}"><a href="{{ route('cms.available.index')}}">Available Seat</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-book"></i> <span>Books</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="apps-calendar.html">Books Package</a></li>
                            <li><a href="apps-support-ticket.html">Books Destination</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-rss-square"></i> <span>Blogs</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="apps-calendar.html">Blog List</a></li>
                            <li><a href="apps-support-ticket.html">Add New Blog</a></li>
                        </ul>
                    </li>
                    <li class="treeview {{Route::currentRouteNamed('cms.setting.*') ? 'active' : ''}}"> <a href="#"> <i class="fa fa-gear"></i> <span>Web Settings</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li class="{{Route::currentRouteNamed('cms.setting.about') ? 'active' : ''}}"><a href="{{ route('cms.setting.about')}}">about Us</a></li>
                            <li class="{{Route::currentRouteNamed('cms.setting.contact') ? 'active' : ''}}"><a href="{{ route('cms.setting.contact')}}">Contact Us</a></li>
                            <li class="{{Route::currentRouteNamed('cms.setting.team') ? 'active' : ''}}"><a href="{{ route('cms.setting.team')}}">Team</a></li>
                            <li class="{{Route::currentRouteNamed('cms.setting.service') ? 'active' : ''}}"><a href="{{ route('cms.setting.service')}}">Service</a></li>
                            <li class="{{Route::currentRouteNamed('cms.setting.partner') ? 'active' : ''}}"><a href="{{ route('cms.setting.partner')}}">Partner</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @section('content')
            @show
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">Version 1.2</div>
            Copyright © 2017 Yourdomian. All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('cms/js/jquery.min.js')}}"></script>

    <!-- v4.0.0-alpha.6 -->
    <script src="{{ asset('cms/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- template -->
    <script src="{{ asset('cms/js/niche.js')}}"></script>

    <!-- Morris JavaScript -->
    <script src="{{ asset('cms/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{ asset('cms/plugins/morris/morris.js')}}"></script>
    <script src="{{ asset('cms/plugins/functions/morris-init.js')}}"></script>


    <!-- form wizard -->

    @section('script')
    @show
</body>

</html>