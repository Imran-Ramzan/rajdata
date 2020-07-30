    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Image Databse Checklist</title>
        <!-- mobile responsive meta -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/img/favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/img/favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/img/favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/img/favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/img/favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/img/favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend/img/favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend/img/favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/img/favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('frontend/img/favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/img/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('frontend/img/favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/img/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{ asset('frontend/img/favicon/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('frontend/img/favicon/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/common.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/font-awesome/css/font-awesome.min.css')}}">
    </head>
    <body class="active-preloader-ovh">
    <div class="preloader"><div class="spinner"></div></div> <!-- /.preloader -->
    <header class="header header-home-one">
        <div class="header-top">
            <div class="container">
                <div class="pull-left left-contact-info">
                    <p><i class="fas fa-envelope-open"></i><a style="color:#fff" href="mailto:imran.ntu@hotmail.com">
                        info@example.com</a></p><!--
                    --><p><i class="zxp-icon-old-telephone-ringing"></i>0800 092 1632</p>
                </div><!-- /.pull-left -->
                <div class="pull-right right-contact-info">
                    <p><i class="fas fa-map-marker"></i> CEME, Marsh Way
                        Rainham RM13 8EU</p>
                </div><!-- /.pull-right -->
            </div><!-- /.container -->
        </div><!-- /.header-top -->
        <nav class="navbar navbar-default header-navigation stricky">
            <div class="container clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed zxp-icon-menu" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false"> </button>
                    <a class="navbar-brand" href="{{ route('pages.index') }}">
                        <img id="logo-dark" class="retina" src="{{ asset('frontend/img/hunt-a-property-color-logo.png') }}"
                                alt="huntaproperty">
                        <img id="logo-light" class="retina" src="{{ asset('frontend/img/hunt-a-property-logo-light.png') }}"
                                alt="huntaproperty">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">
                    <ul class="nav navbar-nav navigation-box">
                        <li>
                            <a href="{{ route('pages.carpets') }}">Carpets</a>
                        </li>
                        <li>
                            <a href="{{ route('pages.wallpapers') }}">Wallpaper</a>
                        </li>
                        <li>
                            <a href="{{ route('pages.fabrics') }}">Fabrics</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                <div class="right-side-box">
                    <a style="color:#fff ; background:#00546d;" href="mailto:info@huntaproperty.com" class="rqa-btn">Request Appraisal</a>
                </div><!-- /.right-side-box -->
            </div><!-- /.container -->
        </nav>
    </header><!-- /.header -->
    @yield('content')
    <script>
        document.getElementById("logo-dark").style.display = "none";
                window.onscroll = function() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                document.getElementById("logo-dark").style.display = "inline-block";
                document.getElementById("logo-light").style.display = "none";
                } else {
                document.getElementById("logo-light").style.display = "inline-block";
                document.getElementById("logo-dark").style.display = "none";
                }
            }
    </script>
    <script src="{{ asset('frontend/js/jquery.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/isotope.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('frontend/js/custom.js')}}"></script>
    </body>
    </html>
