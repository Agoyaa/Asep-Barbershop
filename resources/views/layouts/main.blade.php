<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- title -->
    <title>Asep Barbershop | {{ $title }}</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/Logo_Asep.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="/assets/css/responsive.css">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="/">
                                <img src="assets/img/logo_baru.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item{{ $title === 'home' ? '' : 'active' }}"><a
                                        href="/">Home</a></li>
                                <li class="current-list-item{{ $title === 'location' ? '' : 'active' }}"><a
                                        href="/location">Location</a></li>
                                </li>
                                <li class="current-list-item{{ $title === 'contact' ? '' : 'active' }}"><a
                                        href="/contact">Contact Us</a></li>
                                <li class="current-list-item{{ $title === 'news' ? '' : 'active' }}"><a
                                        href="/news">Hair Trend</a></li>
                                <li class="current-list-item{{ $title === 'about' ? '' : 'active' }}"><a
                                        href="/about">About Us</a></li>

                                <li>
                                    <div class="header-icons">
                                        <a class="mobile-hide search-bar-icon" href="/sesi"><i
                                                class="fas fa-user-circle"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- container untuk konten tiap page -->

    @yield('konten')

    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About us</h2>
                        <p>PT.Asep Jaya Abadi adalah perusahaan yang bergerak dibidang jasa (Barbershop) bernama Asep
                            Barbershop. Asep Barbershop didirikan pada 21 September 2010.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Get in Touch</h2>
                        <ul>
                            <li>
                                Jl. Raya Nagreg-Limbangan, Ciaro</li>
                            <li>Asepbrb@gmail.com</li>
                            <li>+62895330381574</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Pages</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Subscribe</h2>
                        <p>Subscribe to our mailing list to get the latest updates.</p>
                        <form action="index.html">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights
                        Reserved.<br>
                        Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="/assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="/assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="/assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="/assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="/assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
