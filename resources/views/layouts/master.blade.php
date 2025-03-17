<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PowerfuelNRG</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="wrapper_box">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader"></div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>

        <!-- Main Header-->
        <header class="main-header">

            <div class="header_top">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="header_top_inner clearfix">
                                <div class="header_top_one_box pull-left">
                                    <ul>
                                        <li><span class="flaticon-placeholder"></span>Dekwaneh, Lebanon</li>
                                        <li><span class="flaticon-phone-call-1"></span><a href="tel:8125553344">+812 555
                                                33 44</a></li>
                                    </ul>
                                </div>
                                <div class="header_top_two_box pull-right">
                                    <div class="opening_hour">
                                        <p><span class="flaticon-clock-1"></span>Mon - Fri: 9:00 - 19:00</p>
                                    </div>
                                    <div class="social_links_1">
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Upper -->
            <div class="header_upper">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_upper_inner clearfix">
                                <div class="header_upper_one_box pull-left">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt=""
                                                title=""></a>
                                    </div>
                                </div>
                                <div class="header_upper_two_box one pull-right">
                                    <div class="nav-outer">
                                        <!--Mobile Navigation Toggler-->
                                        <div class="mobile-nav-toggler">
                                            <span class="icon flaticon-menu"></span>
                                        </div>
                                        <div class="nav-inner">
                                            <!-- Main Menu -->
                                            <nav class="main-menu navbar-expand-xl navbar-dark">

                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <ul class="navigation">
                                                        <li><a href="#home">Home</a></li>
                                                        <li><a href="#about">About</a></li>
                                                        <li><a href="#services">Services</a></li>
                                                        <li><a href="#footer">Contact</a></li>
                                                    </ul>
                                                </div>
                                            </nav><!-- Main Menu End-->
                                        </div>
                                    </div>
                                    <div class="icon-search-box">
                                        <button class="dropdown-toggle" id="searchDropdown" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                        <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                                            <input type="text" placeholder="Search...">
                                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->

            <!--End Header Upper-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-container">
                        <div class="header-column">
                            <div class="logo-box">
                                <div class="logo"><a href="index.html"><img src="{{ asset('images/logo.png')}}" alt=""
                                            title=""></a></div>
                            </div>
                        </div>
                        <div class="header-column">
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                                <div class="nav-inner">
                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-xl navbar-dark">
                                        <div class="collapse navbar-collapse">
                                            <ul class="navigation">
                                            </ul>
                                        </div>
                                    </nav><!-- Main Menu End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu close-menu">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <ul class="navigation"></ul>
                </nav>
            </div><!-- End Mobile Menu -->

            <div class="nav-overlay">
            </div>
        </header>
        <!-- End Main Header -->


        @yield('content')

        <!--Start Footer Section -->
        @include('layouts.footer')
        <!--End Footer Section -->


        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fas fa-arrow-up"></span>
        </div>

    </div>
    <!--End pagewrapper-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("a[href^='#']").on("click", function (event) {
                event.preventDefault(); // Prevent default jump behavior

                var target = $(this.getAttribute("href")); // Get section ID
                if (target.length) {
                    $("html, body").animate({
                        scrollTop: target.offset().top - 80 // Adjust this value if needed
                    }, 1000); // 1000ms (1 second) transition time
                }
            });
        });
    </script>



    <script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{ asset('assets/js/appear.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.js')}}"></script>
    <script src="{{ asset('assets/js/owl.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/parallax.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>

</html>
