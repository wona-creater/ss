<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Marble Cargo</title>
    <meta name="description" content="Marble Cargo - Logistics & Delivery Company HTML template" />
    <meta name="keywords"
        content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, page builder, shipment, transport, transportation, truck, trucking" />
    <link rel="shortcut icon" href="assets/img/logo/ficon.png" type="image/x-icon" />
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/video.min.css" />
    <link rel="stylesheet" href="assets/css/animated-slider.css" />
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/rs6.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <!-- Start of header section
 ============================================= -->
    <header id="ft-header" class="ft-header-section header-style-two">
        <div class="ft-header-top">
            <div class="container">
                <div class="ft-header-top-content d-flex justify-content-between align-items-center">
                    <div class="ft-header-top-cta ul-li">
                        <ul>
                            <li><i class="fal fa-envelope"></i>support@marblecargo.online</li>
                            <li>
                                <i class="fal fa-map-marker-alt"></i>121 WallStreet Street, NY
                                York, USA
                            </li>
                        </ul>
                    </div>
                    <div class="ft-header-cta-info d-flex">
                        <div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="ft-header-cta-text headline pera-content">
                            <p>Get In Touch</p>
                            {{-- <h3></h3> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft-header-main-menu-wrapper">
            <div class="container">
                <div class="ft-header-main-menu-area position-relative">
                    <div
                        class="ft-header-main-menu d-flex align-items-center justify-content-between position-relative">
                        <div class="ft-site-logo-area">
                            <div class="ft-site-logo position-relative">
                                <a href="{{ route('welcome') }}"><img src="assets/img/logo/logo3.png"
                                        alt=""width="70px" /></a>
                            </div>
                        </div>
                        <div class="ft-main-navigation-area">
                            <nav class="ft-main-navigation clearfix ul-li">
                                <ul id="ft-main-nav" class="nav navbar-nav clearfix">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li><a href="#">About</a></li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#profile">Tracking</a>
                                    </li>

                                    <li>
                                        <a href="#fag">Fag</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="ft-header-cta-btn">
                            <a class="d-flex justify-content-center align-items-center" href="#home">Get A
                                Quote</a>
                        </div>
                    </div>
                    <div class="mobile_menu position-relative">
                        <div class="mobile_menu_button open_mobile_menu">
                            <i class="fal fa-bars"></i>
                        </div>
                        <div class="mobile_menu_wrap">
                            <div class="mobile_menu_overlay open_mobile_menu"></div>
                            <div class="mobile_menu_content">
                                <div class="mobile_menu_close open_mobile_menu">
                                    <i class="fal fa-times"></i>
                                </div>
                                <div class="m-brand-logo">
                                    <a href="{{ route('welcome') }}"><img src="assets/img/logo/logo3.png" alt=""
                                            width="70px" /></a>

                                </div>
                                <nav class="mobile-main-navigation clearfix ul-li">
                                    <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                        <li class="dropdown">
                                            <a href="%21.html#">Home</a>

                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="dropdown">
                                            <a href="%21.html#">Products/Services</a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="%21.html#">Tracking</a>

                                        </li>

                                        <li class="dropdown">
                                            <a href="%21.html#">Faq </a>

                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- /Mobile-Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of header section
============================================= -->

    {{ $slot }}



    <!-- Start of Footer   section
 ============================================= -->
    <footer id="ft-footer-2" class="ft-footer-section-2" data-background="assets/img/bg/f-bg.png">
        <div class="ft-footer-newslatter position-relative">
            <div class="container">
                <div class="ft-footer-newslatter-content d-flex justify-content-between align-items-center flex-wrap">

                </div>
            </div>
        </div>
        <div class="ft-footer-widget-wrapper-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 -bottom-16 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="logo-widget">
                                <div class="site-logo">
                                    <a href="{{ route('welcome') }}"><img src="assets/img/logo/logo3.png"
                                            alt=""width="70px" /></a>
                                </div>
                                <div class="ft-footer-address">
                                    <span>Address: 27 Division St, New York, NY 10002, USA</span>
                                    <span>Website: marblecargo.online</span>
                                    <span>Email: Support@marblecargo.online</span>
                                    {{-- <span>Phone:</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="menu-widget">
                                <h3 class="widget-title">Our Services</h3>
                                <ul>
                                    <li><a href="service-single.html">Air Freight</a></li>
                                    <li><a href="service-single.html">Ocen Freight</a></li>
                                    <li><a href="service-single.html">Warehousing</a></li>
                                    <li>
                                        <a href="service-single.html">Global stock transparency</a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Transport consolidation</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="menu-widget">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul>
                                    <li><a href="service-single.html">How it Works</a></li>
                                    <li><a href="service-single.html">Help Link</a></li>
                                    <li>
                                        <a href="service-single.html">Terms & Conditions</a>
                                    </li>
                                    <li><a href="service-single.html">Contact Us</a></li>
                                    <li><a href="service-single.html">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft-footer-copywrite-2 text-center">
            <span>Copyright @ 2021 Logistics.All Rights Reserved</span>
        </div>
    </footer>
    <!-- End of FAQ why choose  section
 ============================================= -->

    <!-- For Js Library -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.filterizr.js"></script>
    <script src="assets/js/rbtools.min.js"></script>
    <script src="assets/js/jquery.cssslider.min.js"></script>
    <script src="assets/js/rs6.min.js"></script>
    <script src="assets/js/knob.js"></script>
    <script src="assets/js/typer.js"></script>
    <script src="assets/js/script.js"></script>
</body>


</html>
