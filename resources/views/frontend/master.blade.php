<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <!-- <title>My Dashboard | Visitlambar.com</title> -->
    <title>@yield('title')</title>
    <meta name="description" content="Tour and Travel Bootstrap 4 HTML Template" />
    <meta name="keywords" content="tour, tour agency, tour operator, tour package, tourism, travel, travel agency, trip, vacation, holiday, travel booking, tour booking, booking, " />
    <meta name="keywords" content="tour, tour agency, tour operator, tour package, tourism, travel, travel agency, trip, vacation, holiday, travel booking, tour booking, booking, " />
    <meta name="author" content="crenoveative">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fav and Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontend/images/ico/apple-touch-icon-144-precomposed.html')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('frontend/images/ico/apple-touch-icon-114-precomposed.html')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('frontend/images/ico/apple-touch-icon-72-precomposed.html')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/images/ico/apple-touch-icon-57-precomposed.html')}}">
    <link rel="shortcut icon" href="{{ asset('frontend/images/ico/favicon.html')}}">

    <!-- Font face -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('frontend/font-faces/metropolis/metropolis.css')}}" rel="stylesheet">

    <!-- CSS Plugins -->
    <link href="{{ asset('frontend/css/font-icons.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}" media="screen">
    <link href="{{ asset('frontend/css/animate.html') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/plugin.css') }}" rel="stylesheet" />

    <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen"> -->


    <!-- CSS Custom -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />

    <!-- CSS Custom -->
    <link href="{{ asset('frontend/css/your-style.css') }}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>



<body class="with-waypoint-sticky page-dashboard">



    <!-- start Body Inner -->
    <div class="body-inner">



        <!-- start Header -->
        <header id="header-waypoint-sticky" class="header-main header-mobile-menu with-absolute-navbar">

            <div class="header-outer clearfix">

                <div class="header-inner">

                    <div class="row shrink-auto-lg gap-0 align-items-center">

                        <div class="col-5 col-shrink">
                            <div class="col-inner">
                                <div class="main-logo">
                                    <a href="{{ route('frn.home')}}"><img src="{{ asset('frontend/images/logo.png')}}" alt="images" /></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-7 col-shrink order-last-lg">
                            <div class="col-inner">
                                <ul class="nav-mini-right">
                                    <li class="d-none d-sm-block">
                                        <a href="#loginFormTabInModal-register" data-toggle="modal" data-target="#loginFormTabInModal" data-backdrop="static" data-keyboard="false">
                                            <span class="icon-font"><i class="icon-user-follow"></i></span> Register
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#loginFormTabInModal-login" data-toggle="modal" data-target="#loginFormTabInModal" data-backdrop="static" data-keyboard="false">
                                            <span class="icon-font"><i class="icon-login"></i></span> Login
                                        </a>
                                    </li>
                                    <li class="d-block d-sm-none">
                                        <a href="#loginFormTabInModal-register" data-toggle="modal" data-target="#loginFormTabInModal" data-backdrop="static" data-keyboard="false">
                                            Login / Register
                                        </a>
                                    </li>
                                    <li>
                                        <button class="btn btn-toggle collapsed" data-toggle="collapse" data-target="#mobileMenu"></button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 col-auto">

                            <div class="navbar-wrapper">

                                <div class="navbar navbar-expand-lg">

                                    <div id="mobileMenu" class="collapse navbar-collapse">

                                        <nav class="main-nav-menu main-menu-nav navbar-arrow">

                                            <ul class="main-nav">
                                                <li><a href="{{ route('frn.home')}}">Home</a></li>
                                                <li><a href="{{ route('frn.destination')}}">Destination</a></li>
                                                <li><a href="{{ route('frn.tourpack')}}">Tour Package</a></li>
                                                <li><a href="{{ route('frn.news')}}">News</a></li>
                                                <li><a href="{{ route('frn.contact')}}">Contact us</a></li>

                                            </ul>

                                        </nav>
                                        <!--/.nav-collapse -->

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </header>
        <!-- start Header -->

        @section('content')
        @show

        <!-- start Footer Wrapper -->
        <footer class="footer-wrapper light scrollspy-footer">

            <div class="footer-top">

                <div class="container">

                    <div class="row shrink-auto-md align-items-lg-center gap-10">

                        <div class="col-12 col-shrink order-last-md">

                            <div class="col-inner">

                                <div class="footer-dropdowns">

                                    <div class="row shrink-auto gap-30 align-items-center">

                                        <div class="col-auto">

                                            <div class="col-inner">

                                                <div class="dropdown dropdown-smooth-01 dropdown-language">
                                                    <a href="#" class="btn btn-text-inherit btn-interactive" id="dropdownLangauge" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="image"><img src="{{ asset('frontend/font-icons/flaticon-flags-4/png/260-united-kingdom.png')}}" alt="image" /></span> English
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownLangauge">
                                                        <div class="dropdown-menu-inner">
                                                            <a class="dropdown-item" href="#"><span class="image"><img src="{{ asset('frontend/font-icons/flaticon-flags-4/png/260-united-kingdom.png')}}" alt="image" /></span>English</a>
                                                            <a class="dropdown-item" href="#"><span class="image"><img src="{{ asset('frontend/font-icons/flaticon-flags-4/png/013-italy.png')}}" alt="image" /></span>Italiano</a>
                                                            <a class="dropdown-item" href="#"><span class="image"><img src="{{ asset('frontend/font-icons/flaticon-flags-4/png/063-japan.png')}}" alt="image" /></span>日本語</a>
                                                            <a class="dropdown-item" href="#"><span class="image"><img src="{{ asset('frontend/font-icons/flaticon-flags-4/png/162-germany.png')}}" alt="image" /></span>Deutsch</a>
                                                            <a class="dropdown-item" href="#"><span class="image"><img src="{{ asset('frontend/font-icons/flaticon-flags-4/png/218-turkey.png')}}" alt="image" /></span>Türkçe</a>
                                                            <a class="dropdown-item" href="#"><span class="image"><img src="{{ asset('frontend/font-icons/flaticon-flags-4/png/238-thailand.png')}}" alt="image" /></span>ภาษาไทย</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>



                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-auto">

                            <div class="col-inner">
                                <ul class="footer-contact-list">
                                    <li>
                                        <span class="icon-font text-primary inline-block-middle mr-5 font16"><i class="fa fa-phone"></i></span> <span class="font700 text-black">1 2258 2554 00</span> <span class="text-muted">Mon-Fri | 8.30am-6:30pm</span>
                                    </li>
                                    <li>
                                        <span class="icon-font text-primary inline-block-middle mr-5 font16"><i class="fa fa-envelope"></i></span> <span class="font700 text-black">support@gmail.com</span>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <hr class="opacity-7" />

                </div>

            </div>

            <div class="main-footer">

                <div class="container">

                    <div class="row gap-50">

                        <div class="col-12 col-lg-5">

                            <div class="footer-logo">
                                <img src="{{ asset('frontend/images/logo-pesona-id.png')}}" alt="images" />
                            </div>

                            <p class="mt-20">Excited him now natural saw passage offices you minuter. At by asked being court hopes. Farther so friends am to detract. Forbade concern do private be. Offending residence but men engrossed shy.</p>

                            <a href="#" class="text-capitalize font14 h6 line-1 mb-0 font500 mt-30">read more <i class="elegent-icon-arrow_right font18 inline-block-middle"></i></a>

                        </div>

                        <div class="col-12 col-lg-7">

                            <div class="col-inner">

                                <div class="row shrink-auto-sm gap-30">

                                    <div class="col-6 col-shrink">

                                        <div class="col-inner">
                                            <h5 class="footer-title">About company</h5>
                                            <ul class="footer-menu-list set-width">
                                                <li><a href="{{ route('frn.about')}}">Who we are</a></li>
                                                <li><a href="#">Careers</a></li>
                                                <li><a href="#">Company history</a></li>
                                                <li><a href="#">Legal</a></li>
                                                <li><a href="#">Partners</a></li>
                                                <li><a href="#">Privacy notice</a></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="col-6 col-shrink">

                                        <div class="col-inner">
                                            <h5 class="footer-title">Customer Service</h5>
                                            <ul class="footer-menu-list set-width">
                                                <li><a href="#">Payment</a></li>
                                                <li><a href="#">Feedback</a></li>
                                                <li><a href="{{ route('frn.contact')}}">Contact us</a></li>
                                                <li><a href="{{ route('frn.service')}}">Our Service</a></li>
                                                <li><a href="#">FAQ</a></li>
                                                <li><a href="#">Site map</a></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="col-12 col-auto">

                                        <div class="col-inner">
                                            <h5 class="footer-title">Newsletter &amp; Social</h5>
                                            <p class="font12">Savings her pleased are several started females met. Short her not among being any.</p>
                                            <form class="footer-newsletter mt-20">
                                                <div class="input-group">
                                                    <input type="email" class="form-control" placeholder="Email address">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="button"><i class="far fa-envelope"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="footer-socials mt-20">
                                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                                <a href="#"><i class="fab fa-google-plus-square"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                                <a href="#"><i class="fab fa-flickr"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="bottom-footer">

                <div class="container">

                    <div class="row shrink-auto-md gap-10 gap-40-lg">

                        <div class="col-auto">
                            <div class="col-inner">
                                <ul class="footer-menu-list-02">
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">Policies</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-shrink">
                            <div class="col-inner">
                                <p class="footer-copy-right"> &#169; 2020 – 2021 <span class="text-primary">Visitlambar.com,</span> All Rights Reserved.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </footer>
        <!-- start Footer Wrapper -->



    </div>
    <!-- end Body Inner -->



    <!-- start Login modal -->
    <div class="modal fade modal-with-tabs form-login-modal" id="loginFormTabInModal" aria-labelledby="modalWIthTabsLabel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content shadow-lg">

                <nav class="d-none">
                    <ul class="nav external-link-navs clearfix">
                        <li><a class="active" data-toggle="tab" href="#loginFormTabInModal-login">Sign-in</a></li>
                        <li><a data-toggle="tab" href="#loginFormTabInModal-register">Register </a></li>
                        <li><a data-toggle="tab" href="#loginFormTabInModal-forgot-pass">Forgot Password </a></li>
                    </ul>
                </nav>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="loginFormTabInModal-login">

                        <div class="form-login">

                            <div class="form-header">
                                <h4>Welcome Back to VisitLambar.com</h4>
                                <p>Sign in to your account to continue using VisitLambar.com</p>
                            </div>

                            <div class="form-body">

                                <form method="post" action="#">

                                    <div class="d-flex flex-column flex-lg-row align-items-stretch">

                                        <div class="flex-md-grow-1 bg-primary-light">

                                            <div class="form-inner">
                                                <div class="form-group">
                                                    <label>Email adress/username</label>
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" />
                                                </div>
                                                <div class="d-flex flex-column flex-md-row mt-25">
                                                    <div class="flex-shrink-0">
                                                        <a href="#" class="btn btn-primary btn-wide">Sign-in</a>
                                                    </div>
                                                    <div class="ml-0 ml-md-15 mt-15 mt-md-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="loginFormTabInModal-rememberMe">
                                                            <label class="custom-control-label" for="loginFormTabInModal-rememberMe">Remember me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#loginFormTabInModal-forgot-pass" class="tab-external-link block mt-25 font600">Forgot password?</a>
                                            </div>

                                        </div>

                                        <div class="form-login-socials">
                                            <div class="login-socials-inner">
                                                <h5 class="mb-20">Or sign-up with your socials</h5>
                                                <button class="btn btn-login-with btn-facebook btn-block"><i class="fab fa-facebook"></i> facebook</button>
                                                <button class="btn btn-login-with btn-google btn-block"><i class="fab fa-google"></i> google</button>
                                                <button class="btn btn-login-with btn-twitter btn-block"><i class="fab fa-twitter"></i> google</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>

                            </div>

                            <div class="form-footer">
                                <p>Not a member yet? <a href="#loginFormTabInModal-register" class="tab-external-link font600">Sign up</a> for free</p>
                            </div>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-pane fade in" id="loginFormTabInModal-register">

                        <div class="form-login">

                            <div class="form-header">
                                <h4>Signup to continue the process</h4>

                            </div>

                            <div class="form-body">

                                <form method="post" action="{{ route('frn.registration')}}">
                                    @csrf
                                    <div class="d-flex flex-column flex-lg-row align-items-stretch">

                                        <div class="flex-grow-1 bg-primary-light">

                                            <div class="form-inner">
                                                <div class="form-group">
                                                    <label>Full name</label>
                                                    <input type="text" name="full_name" class="form-control" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email adress</label>
                                                    <input type="text" name="email" class="form-control" required/>
                                                </div>
                                                <div class="row cols-2 gap-10">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" name="password" class="form-control" required/>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Confirm password</label>
                                                            <input type="password" name="password_confirmation" class="form-control" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-login-socials">
                                            <div class="login-socials-inner">
                                                <h5 class="mb-20">Or sign-in with your socials</h5>
                                                <button class="btn btn-login-with btn-facebook btn-block"><i class="fab fa-facebook"></i> facebook</button>
                                                <button class="btn btn-login-with btn-google btn-block"><i class="fab fa-google"></i> google</button>
                                                <button class="btn btn-login-with btn-twitter btn-block"><i class="fab fa-twitter"></i> google</button>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-flex flex-column flex-md-row mt-30 mt-lg-10">
                                        <div class="flex-shrink-0">
                                            <button type="submit" class="btn btn-primary btn-wide mt-5">Sign-up</button>
                                        </div>
                                        <div class="pt-1 ml-0 ml-md-15 mt-15 mt-md-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="agreement" class="custom-control-input" id="loginFormTabInModal-acceptTerm" required>
                                                <label class="custom-control-label line-145" for="loginFormTabInModal-acceptTerm">By clicking this, you are agree to to our <a href="#">terms of use</a> and <a href="#">privacy policy</a> including the use of cookies</label>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>

                            <div class="form-footer">
                                <p>Already a member? <a href="#loginFormTabInModal-login" class="tab-external-link font600">Sign in</a></p>
                            </div>

                        </div>

                    </div>

                    <div role="tabpanel" class="tab-pane fade in" id="loginFormTabInModal-forgot-pass">

                        <div class="form-login">

                            <div class="form-header">
                                <h4>Lost your password?</h4>
                                <p>Please provide your detail.</p>
                            </div>

                            <div class="form-body">
                                <form method="post" action="#">
                                    <p class="line-145">We'll send password reset instructions to the email address associated with your account.</p>
                                    <div class="row">
                                        <div class="col-12 col-md-10 col-lg-8">
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="password" />
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary mt-5">Retreive password</button>
                                </form>
                            </div>

                            <div class="form-footer">
                                <p>Back to <a href="#loginFormTabInModal-login" class="tab-external-link font600">Sign in</a> or <a href="#loginFormTabInModal-register" class="tab-external-link font600">Sign up</a></p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="text-center pb-20">
                    <button type="button" class="close" data-dismiss="modal" aria-labelledby="Close">
                        <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Login modal -->



    <!-- start Back To Top -->
    <a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><i class="elegent-icon-arrow_carrot-up"></i></a>
    <!-- end Back To Top -->



    <!-- JS -->
    
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/plugins.js')}}"></script>
    
    @section('script')
    @show
    
    <script type="text/javascript" src="{{ asset('frontend/js/custom-core.js')}}"></script>

</body>

</html>