<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edumark</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset("front/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/nice-select.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/gijgo.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/slicknav.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/style.css")}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{route('index')}}">Басты</a></li>
                                    <li><a href="{{route('about')}}">Біз жайлы</a></li>
                                    <li><a href="{{route('contact')}}">Хабарласу</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="log_chat_area d-flex align-items-center">
                            <a href="{{route('login')}}" class="login">
                                <i class="flaticon-user"></i>
                                <span>Кіру</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
@yield('content')

<!-- our_latest_blog_end -->


<!-- footer -->
<footer class="footer footer_bg_1">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#" class="text-white">
                                KAZSTUDY
                            </a>
                        </div>
                        <p>
                            Firmament morning sixth subdue darkness creeping gathered divide our let god moving.
                            Moving in fourth air night bring upon it beast let you dominion likeness open place day
                            great.
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Courses
                        </h3>
                        <ul>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#"> Photoshop</a></li>
                            <li><a href="#">Illustrator</a></li>
                            <li><a href="#">Adobe XD</a></li>
                            <li><a href="#">UI/UX</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Resourches
                        </h3>
                        <ul>
                            <li><a href="#">Free Adobe XD</a></li>
                            <li><a href="#">Tutorials</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#"> About</a></li>
                            <li><a href="#"> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Address
                        </h3>
                        <p>
                            200, D-block, Green lane USA <br>
                            +10 367 467 8934 <br>
                            edumark@contact.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->



<!-- JS here -->
<script src="{{asset("front/js/vendor/modernizr-3.5.0.min.js")}}"></script>
<script src="{{asset("front/js/vendor/jquery-1.12.4.min.js")}}"></script>
<script src="{{asset("front/js/popper.min.js")}}"></script>
<script src="{{asset("front/js/bootstrap.min.js")}}"></script>
<script src="{{asset("front/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("front/js/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("front/js/ajax-form.js")}}"></script>
<script src="{{asset("front/js/waypoints.min.js")}}"></script>
<script src="{{asset("front/js/jquery.counterup.min.js")}}"></script>
<script src="{{asset("front/js/imagesloaded.pkgd.min.js")}}"></script>
<script src="{{asset("front/js/scrollIt.js")}}"></script>
<script src="{{asset("front/js/jquery.scrollUp.min.js")}}"></script>
<script src="{{asset("front/js/wow.min.js")}}"></script>
<script src="{{asset("front/js/nice-select.min.js")}}"></script>
<script src="{{asset("front/js/jquery.slicknav.min.js")}}"></script>
<script src="{{asset("front/js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("front/js/plugins.js")}}"></script>
<script src="{{asset("front/js/gijgo.min.js")}}"></script>

<!--contact js-->
<script src="{{asset("front/js/contact.js")}}"></script>
<script src="{{asset("front/js/jquery.ajaxchimp.min.js")}}"></script>
<script src="{{asset("front/js/jquery.form.js")}}"></script>
<script src="{{asset("front/js/jquery.validate.min.js")}}"></script>
<script src="{{asset("front/js/mail-script.js")}}"></script>

<script src="{{asset("front/js/main.js")}}"></script>
</body>

</html>