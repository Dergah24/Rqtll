<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/base/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 06:14:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Dashboard | Remark Admin Template</title>

    <link rel="apple-touch-icon" href="{{ asset('back') }}/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="{{ asset('back') }}/assets/images/favicon.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('Back') }}/css/bootstrap.min599c.css">
    <link rel="stylesheet" href="{{ asset('Back') }}/css/bootstrap-extend.min599c.css">
    <link rel="stylesheet" href="{{ asset('Back') }}/assets/css/site.min599c.css">

    <!-- Skin tools (demo site only) -->
    <link rel="stylesheet" href="{{ asset('Back') }}/css/skintools.min599c.css">
    <script src="{{ asset('Back') }}/assets/js/Plugin/skintools.min599c.js"></script>

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('Back') }}/vendor/animsition/animsition.min599c.css">
    <link rel="stylesheet" href="{{ asset('Back') }}/vendor/asscrollable/asScrollable.min599c.css">
    <link rel="stylesheet" href="{{ asset('Back') }}/vendor/switchery/switchery.min599c.css">
    <link rel="stylesheet" href="{{ asset('Back') }}/vendor/intro-js/introjs.min599c.css">
    <link rel="stylesheet" href="{{ asset('Back') }}/vendor/slidepanel/slidePanel.min599c.css">
    <link rel="stylesheet" href="{{ asset('Back') }}/vendor/flag-icon-css/flag-icon.min599c.css">

    <!-- Plugins For This Page -->

    <link rel="stylesheet" href="{{ asset('Back') }}/vendor/jvectormap/jquery-jvectormap.min599c.css">


    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('Back') }}/assets/examples/css/dashboard/v1.min599c.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('Back') }}/fonts/web-icons/web-icons.min599c.css">
    <link rel="stylesheet" href="{{ asset('Back') }}/fonts/brand-icons/brand-icons.min599c.css">
    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

    <link rel="stylesheet" href="{{ asset('Back') }}/fonts/weather-icons/weather-icons.min599c.css">


    <!-- Scripts -->
    <script src="{{ asset('Back') }}/vendor/breakpoints/breakpoints.min599c.js"></script>
    <script>
        Breakpoints();

    </script>
</head>

<body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-expand-md" role="navigation">

        <div class="navbar-header">

            <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                data-toggle="menubar">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-bar"></span>
            </button>
            <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
                <i class="icon wb-more-horizontal" aria-hidden="true"></i>
            </button>
            <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                <img class="navbar-brand-logo" src="{{ asset('back') }}/assets/images/logo.png" title="Remark">
                <span class="navbar-brand-text hidden-xs-down"> Remark</span>
            </div>
            <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
                <span class="sr-only">Toggle Search</span>
                <i class="icon wb-search" aria-hidden="true"></i>
            </button>
        </div>

        <div class="navbar-container container-fluid">
            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                <!-- Navbar Toolbar -->
                <ul class="nav navbar-toolbar">
                    <li class="nav-item hidden-float" id="toggleMenubar">
                        <a class="nav-link" data-toggle="menubar" href="#" role="button">
                            <i class="icon hamburger hamburger-arrow-left">
                                <span class="sr-only">Toggle menubar</span>
                                <span class="hamburger-bar"></span>
                            </i>
                        </a>
                    </li>
                </ul>
                <!-- End Navbar Toolbar -->

                <!-- Navbar Toolbar Right -->
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

                    <li class="nav-item dropdown">
                        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                            data-animation="scale-up" role="button">
                            <span class="avatar avatar-online">
                                <i class="fas fa-user" aria-hidden="true"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="{{ route('profile.show') }}" role="menuitem"><i
                                    class="icon wb-user" aria-hidden="true"></i> Profile</a>

                            <div class="dropdown-divider" role="presentation"></div>
                            <form method="Post" action="{{ route('logout') }}">
                                @csrf
                                @method('Post')
                                <button type="submit" class="dropdown-item" role="menuitem"><i class="icon wb-power"
                                        aria-hidden="true"></i> Logout</button>
                            </form>
                        </div>
                    </li>



                </ul>

            </div>
        </div>
    </nav>
    <div class="site-menubar">
        <div class="site-menubar-body">
            <div>
                <div>
                    <ul class="site-menu" data-plugin="menu">
                        <li class="site-menu-item has-subproduct">
                            <a href="{{ route('product.index') }}">
                                <i class="fas fa-images" aria-hidden="true"></i>
                                <span class="site-menu-title">Məhsullar</span>

                                <span class="site-menu-arrow"></span>

                            </a>
                        </li>
                        <li class="site-menu-item has-sub ">
                            <a href="{{ route('slider.index') }}">
                                <i class="fas fa-sliders-h" aria-hidden="true"></i>
                                <span class="site-menu-title">Sliyeder</span>

                                <span class="site-menu-arrow"></span>

                            </a>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="{{ route('galery.index') }}">
                                <i class="fas fa-images" aria-hidden="true"></i>
                                <span class="site-menu-title">Qalereya</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="{{ route('partner.index') }}">
                                <i class="fas fa-handshake" aria-hidden="true"></i>
                                <span class="site-menu-title">Partnyotlar</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="{{ route('contact.index') }}">
                                <i class="fas fa-address-card" aria-hidden="true"></i>
                                <span class="site-menu-title">Əlaqə</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                        </li>
                        <li>Forntend</li>
                        <li class="site-menu-item has-sub">
                            <a href="{{ route('main.index') }}">
                                <i class="fas fa-address-card" aria-hidden="true"></i>
                                <span class="site-menu-title">Frontend</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>


    <div class="page-content"></div>
    <div class="page">
        {{-- <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item active">Pages</li>
            </ol>
            <h1 class="page-title">@yield('title')</h1>
        </div> --}}
        <div class="panel">
            <div class="panel-body">

                @yield('content')
            </div>

        </div>
    </div>



    <!-- Footer -->
    <footer class="site-footer">
        <div class="site-footer-legal">© 2018 <a
                href="https://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
        <div class="site-footer-right">
            Crafted with <i class="red-600 wb wb-heart"></i> by <a
                href="https://themeforest.net/user/creation-studio">Creation Studio</a>
        </div>
    </footer>
    <!-- Core  -->
    <script src="{{ asset('Back') }}/vendor/babel-external-helpers/babel-external-helpers599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/jquery/jquery.min599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/popper-js/umd/popper.min599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/bootstrap/bootstrap.min599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/animsition/animsition.min599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/mousewheel/jquery.mousewheel599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/asscrollbar/jquery-asScrollbar.min599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/asscrollable/jquery-asScrollable.min599c.js"></script>
    //<script src="{{ asset('Back') }}/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js"></script>

    <!-- Plugins -->
    <script src="{{ asset('Back') }}/vendor/switchery/switchery.min599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/intro-js/intro.min599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/screenfull/screenfull599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/slidepanel/jquery-slidePanel.min599c.js"></script>

    <!-- Plugins For This Page -->
    <script src="{{ asset('Back') }}/vendor/skycons/skycons599c.js"></script>

    <script src="{{ asset('Back') }}/vendor/aspieprogress/jquery-asPieProgress.min599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/jvectormap/jquery-jvectormap.min599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en599c.js"></script>
    <script src="{{ asset('Back') }}/vendor/matchheight/jquery.matchHeight-min599c.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('Back') }}/js/Component.min599c.js"></script>
    <script src="{{ asset('Back') }}/js/Plugin.min599c.js"></script>
    <script src="{{ asset('Back') }}/js/Base.min599c.js"></script>
    <script src="{{ asset('Back') }}/js/Config.min599c.js"></script>

    <script src="{{ asset('Back') }}/assets/js/Section/Menubar.min599c.js"></script>
    <script src="{{ asset('Back') }}/assets/js/Section/GridMenu.min599c.js"></script>
    <script src="{{ asset('Back') }}/assets/js/Section/Sidebar.min599c.js"></script>
    <script src="{{ asset('Back') }}/assets/js/Plugin/menu.min599c.js"></script>
    <script src="{{ asset('Back') }}/assets/js/Section/PageAside.min599c.js"></script>

    <!-- Config -->
    <script src="{{ asset('Back') }}/js/config/colors.min599c.js"></script>
    <script src="{{ asset('Back') }}/assets/js/config/tour.min599c.js"></script>

    <!-- Page -->
    <script src="{{ asset('Back') }}/assets/js/Site.min599c.js"></script>
    <script src="{{ asset('Back/js/Plugin/asscrollable.min599c.js') }}"></script>
    <script src="{{ asset('Back/js/Plugin/slidepanel.min599c.js')}}"></script>
    <script src="{{ asset('Back/js/Plugin/switchery.min599c.js') }}"></script>
    <script src="{{ asset('Back/js/Plugin/matchheight.min599c.js') }}"></script>
    <script src="{{ asset('Back/js/Plugin/jvectormap.min599c.js') }}"></script>
    <script src="{{ asset('Back/assets/examples/js/dashboard/v1.min599c.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js',
            'ga');

        ga('create', 'UA-65522665-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>


<!-- Mirrored from getbootstrapadmin.com/remark/base/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 06:15:08 GMT -->

</html>
