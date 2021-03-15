
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>RQTT</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('Front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }} "/>

    <link rel="stylesheet" href="{{ asset('front') }}/style.css" />
    <link rel="stylesheet" href="{{ asset('front') }}/css/royal-preload.css" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/plugins/revolution/revolution/css/navigation.css">
</head>

<body class="royal_preloader">
    <div id="page" class="site">
        <header id="site-header" class="site-header sticky-header header-static">
            <!-- Main Header start -->
            <div class="header-topbar style-2">
                <div class="octf-area-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="social-list">
                                    <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <ul class="topbar-info align-self-end clearfix">
                                    <li><a href="tel:+1-800-456-478-23"><i class="fas fa-phone-alt"></i> +1-800-456-478-23</a></li>
                                    <li><a href="mailto:engitech@mail.com"><i class="fas fa-envelope"></i> engitech@mail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="octf-main-header">
                <div class="octf-area-wrap">
                    <div class="container octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col">
                                    <div id="site-logo" class="site-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('front/images/logo.svg') }}" alt="Engitech" class="">
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                                <a href="index.html">Home</a>
                                                <ul class="sub-menu">
                                                    <li class="current-menu-item"><a href="index.html">Home 1</a></li>

                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Company</a>
                                                <ul class="sub-menu">
                                                    <li><a href="about-us.html">About us</a></li>

                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="it-services.html">It Services</a></li>
                                                    <li><a href="web-development.html">Web Development</a></li>
                                                    <li><a href="mobile-development.html">Mobile Development</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Projects</a>
                                                <ul class="sub-menu">

                                                    <li><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                                                    <li class="menu-item-has-children"><a href="portfolio-grid.html">Portfolio Grid</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="portfolio-grid.html">Portfolio 3 Columns</a></li>

                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog Listing</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contacts</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="octf-col cta-col text-right">
                                <!-- Call To Action -->
                                    <div class="octf-btn-cta">

                                        <div class="octf-header-module cart-btn-hover">
                                            <div class="h-cart-btn octf-cta-icons">
                                                <a class="cart-icon" href="cart-page.html"><i class="flaticon-shopper"></i><span class="count">0</span></a>
                                            </div>
                                            <div class="site-header-cart">
                                                <div class="widget woocommerce widget_shopping_cart">
                                                    <div class="widget_shopping_cart_content">
                                                        <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="octf-header-module">
                                            <div class="toggle_search octf-cta-icons">
                                                <i class="flaticon-search"></i>
                                            </div>
                                            <!-- Form Search on Header -->
                                            <div class="h-search-form-field collapse">
                                                <div class="h-search-form-inner">
                                                    <form role="search" method="get" id="hsearch-form" class="search-form">
                                                        <label><span class="screen-reader-text">Search for:</span>
                                                        <input type="search" class="search-field" placeholder="Search …" value="" name="s"></label>
                                                        <button type="submit" class="search-submit"><i class="flaticon-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @yield('mobileNav')
        </header>

        <div id="content" class="site-content">
            <div id="rev_slider_one_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_one" class="rev_slider fullscreenbanner" data-version="5.4.1">
                    <ul>

                        <!-- SLIDE 1 -->
                        <li data-index="rs-70" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://via.placeholder.com/1920x810.png"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://images.wallpaperscraft.com/image/chip_circuit_processor_140251_1920x1200.jpg" data-bgcolor='rgba(255,255,255,0)' style='' alt=""  data-bgposition="50% 50%" data-bgfit="auto" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                            <!-- LAYER 1  right image overlay dark-->


                            <!-- LAYER 3  Thin text title-->
                            <div class="tp-caption tp-resizeme slider-tag-line text-light"
                                id="slide-70-layer-1"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['195','105','127','133']"
                                data-fontsize="['24',20','0','0']"
                                data-lineheight="['36','30','22','15']"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']">// Full Cycle Software Development
                            </div>

                            <!-- LAYER 4  Bold Title-->
                            <div class="tp-caption tp-resizeme text-light tp-big-text"
                                id="slide-70-layer-2"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['240','140','155','145']"
                                data-fontsize="['72','60','48','30']"
                                data-lineheight="['80','62','52','42']"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":500,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']">From idea <br> to product
                            </div>

                            <!-- LAYER 5  Paragraph-->
                            <div class="tp-caption tp-resizeme text-light"
                                id="slide-70-layer-3"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['420','279','271','235']"
                                data-fontsize="['18','18','22','16']"
                                data-lineheight="['30','34','32','28']"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":2900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']">We are 100+ professional software engineers with more than <br> 10 years of experience in delivering superior products.
                            </div>

                            <!-- LAYER 6  Read More-->
                            <div class="tp-caption rev-btn"
                                id="slide-70-layer-4"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['525','385','370','320']"
                                data-lineheight="['18','18','16','16']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-responsive_offset="on"

                                data-frames='[{"delay":3400,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"><a href="it-services.html" class="octf-btn octf-btn-primary btn-slider btn-large">Learn More</a>
                            </div>

                        </li>


                        <!-- SLIDE 1 -->
                        <li data-index="rs-71" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://via.placeholder.com/1920x810.png"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://images.wallpaperscraft.com/image/deer_art_vector_134088_1920x1200.jpg" data-bgcolor='#ffffff' style='' alt=""  data-bgposition="50% 50%" data-bgfit="auto" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>


                            <!-- LAYER 3  Thin text title-->
                            <div class="tp-caption   tp-resizeme slider-tag-line text-light"
                                id="slide-71-layer-3"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['195','105','127','133']"
                                data-fontsize="['24',20','0','0']"
                                data-lineheight="['36','30','22','15']"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']">// We Create Leading Digital Products
                            </div>

                            <!-- LAYER 4  Bold Title-->
                            <div class="tp-caption tp-resizeme text-light tp-big-text"
                                id="slide-70-layer-6"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['240','140','155','145']"
                                data-fontsize="['72','60','48','30']"
                                data-lineheight="['80','62','52','42']"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":300,"frame":"0","from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":1200,"frame":"999","to":"y:50px;z:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']">END-TO-END <br> development </div>

                            <!-- LAYER 5  Paragraph-->
                            <div class="tp-caption tp-resizeme text-light"
                                id="slide-71-layer-7"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['420','279','271','235']"
                                data-fontsize="['18','18','22','16']"
                                data-lineheight="['30','34','32','28']"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":2900,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']">We are 100+ professional software engineers with more than <br>10 years of experience in delivering superior products.</div>

                            <!-- LAYER 6  Read More-->
                            <div class="tp-caption rev-btn"
                                id="slide-71-layer-8"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['525','385','370','320']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button"
                                data-responsive_offset="on"

                                data-frames='[{"delay":3400,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'

                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"><a href="web-development.html" class="octf-btn octf-btn-primary btn-slider btn-large">Learn More</a>
                            </div>
                        </li>

                        <!-- SLIDE 1 -->
                        <li data-index="rs-72" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://via.placeholder.com/1920x810.png"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://images.wallpaperscraft.com/image/deer_art_wildlife_121850_1920x1200.jpg" data-bgcolor='#ffffff' alt=""  data-bgposition="50% 50%" data-bgfit="auto" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>


                            <!-- LAYER 3  Thin text title-->
                            <div class="tp-caption tp-resizeme slider-tag-line text-light"
                                id="slide-72-layer-3"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['195','105','127','133']"
                                data-fontsize="['24',20','0','0']"
                                data-lineheight="['36','30','22','15']"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']">// Only High-Quality Services
                            </div>

                            <!-- LAYER 4  Bold Title-->
                            <div class="tp-caption tp-resizeme text-light tp-big-text"
                                id="slide-72-layer-6"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['240','140','155','145']"
                                data-fontsize="['72','60','48','30']"
                                data-lineheight="['80','62','52','42']"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":300,"frame":"0","from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":1200,"frame":"999","to":"y:-50px;z:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']">SOFTWARE IT <br> OUTSOURCING </div>

                            <!-- LAYER 5  Paragraph-->
                            <div class="tp-caption tp-resizeme text-light"
                                id="slide-72-layer-7"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['420','279','271','235']"
                                data-fontsize="['18','18','22','16']"
                                data-lineheight="['30','34','32','28']"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":2900,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']">We are 100+ professional software engineers with more than <br>10 years of experience in delivering superior products.</div>

                            <!-- LAYER 6  Read More-->
                            <div class="tp-caption rev-btn"
                                id="slide-72-layer-8"
                                data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']"
                                data-y="['top','top','top','top']" data-voffset="['525','385','370','320']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button"
                                data-responsive_offset="on"

                                data-frames='[{"delay":3400,"speed":700,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":700,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"><a href="mobile-development.html" class="octf-btn octf-btn-primary btn-slider btn-large">Learn More</a>
                            </div>
                        </li>


                    </ul>
                    <div class="tp-bannertimer"></div>

                    </div>
            </div>
            <div class="padding-half bg-light-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="partners">
                                <div class="owl-carousel owl-theme home-client-carousel">
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="http://templates.thememodern.com/engitech/images/client-logos/client2.svg" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="http://templates.thememodern.com/engitech/images/client-logos/client1.svg" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="http://templates.thememodern.com/engitech/images/client-logos/client3.svg" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="http://templates.thememodern.com/engitech/images/client-logos/client6.svg" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="http://templates.thememodern.com/engitech/images/client-logos/client5.svg" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="http://templates.thememodern.com/engitech/images/client-logos/client4.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="partners-slide">
                                        <a href="#" class="client-logo">
                                            <figure class="partners-slide-inner">
                                                <img class="partners-slide-image" src="https://via.placeholder.com/300x70.png" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="over-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 align-self-center">
                            <div class="ot-heading">
                                <span>// about company</span>
                                <h2 class="main-heading">Your Partner for <br> Software Innovation</h2>
                            </div>
                            <p class="mb-15">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses elevate their value through custom software development, product design, QA and consultancy services.</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="icon-box-s1">
                                        <div class="icon-main"><span class="flaticon-medal"></span></div>
                                        <h5>Experience</h5>
                                        <div class="line-box"></div>
                                        <p>Our great team of more than 1400 software experts.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="icon-box-s1">
                                        <div class="icon-main"><span class="flaticon-gear"></span></div>
                                        <h5>Quick Support</h5>
                                        <div class="line-box"></div>
                                        <p>We’ll help you test bold new ideas while sharing your.</p>
                                    </div>
                                </div>
                                <div class="space-15"></div>
                            </div>
                        </div>
                        <div class="offset-lg-1 col-lg-6 col-md-12 align-self-center">
                            <div class="about-right">
                                <div class="img-small">
                                    <img class="img-small-1" src="https://via.placeholder.com/243x193.png" alt="">
                                    <img class="img-small-2" src="https://via.placeholder.com/260x210.png" alt="">
                                </div>
                                <div class="home-about-video d-flex justify-content-center">
                                    <div class="video-btn align-self-center">
                                        <a href="https://vimeo.com/94686522" class="btn-play">
                                            <i class="fas fa-play"></i>
                                            <span class="circle-1"></span>
                                            <span class="circle-2"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="home-about-btn">
                                    <div class="ot-button">
                                        <a href="about-us.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEANR MORE ABOUT US</a>
                                    <div class="space-15"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-dark-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="ot-heading">
                                <span class="text-primary-light">// why choose us</span>
                                <h2 class="main-heading text-white">Design the Concept <br> of Your Business Idea Now</h2>
                            </div>
                            <div class="space-20"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="serv-box-2 s2">
                                <span class="big-number">01</span>
                                <div class="icon-main"><span class="flaticon-tablet"></span></div>
                                <div class="content-box">
                                    <h5>Product Design</h5>
                                    <div>Our product design service lets you prototype, test and validate your ideas.</div>
                                    <a href="it-services.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="serv-box-2 s2">
                                <span class="big-number">02</span>
                                <div class="icon-main"> <span class="flaticon-ui"></span></div>
                                <div class="content-box">
                                    <h5>Development</h5>
                                    <div>Our product design service lets you prototype, test and validate your ideas.</div>
                                    <a href="web-development.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="serv-box-2 s2">
                                <span class="big-number">03</span>
                                <div class="icon-main"><span class="flaticon-report"></span></div>
                                <div class="content-box">
                                    <h5>Data Analytics</h5>
                                    <div>Our product design service lets you prototype, test and validate your ideas.</div>
                                    <a href="it-services.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="serv-box-2 s2">
                                <span class="big-number">04</span>
                                <div class="icon-main"><span class="flaticon-shield"></span></div>
                                <div class="content-box">
                                    <h5>Cyber Security</h5>
                                    <div>Our product design service lets you prototype, test and validate your ideas.</div>
                                    <a href="it-services.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-0 pb-290">
                <div class="container">
                    <div class="row mt--130">
                        <div class="col-md-6 col-sm-12 mb-4 mb-md-0">
                            <div class="misc-box text-white misc-box-bg1">
                                <div class="ot-counter">
                                    <div>
                                        <span class="num" data-to="15" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                </div>
                                <h5>Countries Worldwide</h5>
                                <p>To succeed, every software solution must be deeply integrated into the existing tech environment..</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="misc-box misc-box-bg2">
                                <div class="ot-counter">
                                    <div>
                                        <span class="num" data-to="23" data-time="2000">0</span>
                                        <span>k</span>
                                    </div>
                                </div>
                                <h5>Happy Customers</h5>
                                <p>To succeed, every software solution must be deeply integrated into the existing tech environment..</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-120"></div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 mb-4 mb-sm-0">
                            <div class="ot-heading mb-0">
                                <span>// our service</span>
                                <h2 class="main-heading">We Offer a Wide <br>Variety of IT Services</h2>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 text-sm-right align-self-end">
                            <div class="ot-button">
                                <a href="it-services.html" class="octf-btn octf-btn-primary">all sevices</a>
                            </div>
                            <div class="space-10"></div>
                        </div>
                    </div>
                    <div class="space-55"></div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1 pb-60">
                                <div class="icon-main"><span class="flaticon-code"></span></div>
                                <div class="content-box">
                                    <h5>Web Development</h5>
                                    <p>We carry more than just good coding skills. Our experience makes us stand out from other web development.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1 pb-60">
                                <div class="icon-main"><span class="flaticon-app"></span></div>
                                <div class="content-box">
                                    <h5>Mobile Development</h5>
                                    <p>Create complex enterprise software, ensure reliable software integration, modernise your legacy system.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1 pb-60">
                                <div class="icon-main"><span class="flaticon-monitor"></span></div>
                                <div class="content-box">
                                    <h5>UI/UX Design</h5>
                                    <p>Build the product you need on time with an experienced team that uses a clear and effective design process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1 sm-pb-60">
                                <div class="icon-main"><span class="flaticon-browser"></span></div>
                                <div class="content-box">
                                    <h5>QA & Testing</h5>
                                    <p>Turn to our experts to perform comprehensive, multi-stage testing and auditing of your software.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1 xs-pb-60">
                                <div class="icon-main"><span class="flaticon-report-1"></span></div>
                                <div class="content-box">
                                    <h5>IT Counsultancy</h5>
                                    <p>Trust our top minds to eliminate workflow pain points, implement new tech, and consolidate app portfolios.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box-s2 s1">
                                <div class="icon-main"><span class="flaticon-best"></span></div>
                                <div class="content-box">
                                    <h5>Dedicated Team</h5>
                                    <p>Over the past decade, our customers succeeded by leveraging Intellectsoft’s process of building, motivating.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-light-1 no-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt--170">
                            <div class="cta">
                                <div class="row">
                                    <div class="col-md-9 text-md-left text-center mb-4 mb-md-0">
                                        <div class="ot-heading">
                                            <span>// We Carry more Than Just Good Coding Skills</span>
                                            <h2 class="main-heading">Let's Build Your Website!</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-md-right text-center align-self-end">
                                        <a href="contact.html" class="octf-btn btn-border" role="button">contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-100"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ot-heading">
                                <span>// latest case studies</span>
                                <h2 class="main-heading">Introduce Our Projects</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <p class="mb-0">Software development outsourcing is just a tool to achieve business goals. But there is no way to get worthwhile results without cooperation and trust between a client company.</p>
                        </div>
                    </div>
                </div>
                <div class="space-40"></div>
            </section>
            <section class="no-padding-top">
                <div class="owl-carousel owl-theme project-slider">
                    <div class="project-item projects-style-2">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-details-1.html">
                                    <img src="https://via.placeholder.com/720x520.png" class="" alt="">
                                    <span class="overlay"></span>
                                </a>
                            </div>
                            <div class="portfolio-info ">
                                <div class="portfolio-info-inner">
                                    <a class="btn-link" href="htportfolio-details-1.html"><i class="flaticon-right-arrow-1"></i></a>
                                    <h5><a href="portfolio-details-1.html">Social Media App</a></h5>
                                    <p class="portfolio-cates">
                                        <a href="#">Design</a><span>/</span>
                                        <a href="#">Technology</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-item projects-style-2">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-details-1.html">
                                    <img src="https://via.placeholder.com/720x520.png" class="" alt="">
                                    <span class="overlay"></span>
                                </a>
                            </div>
                            <div class="portfolio-info ">
                                <div class="portfolio-info-inner">
                                    <a class="btn-link" href="htportfolio-details-1.html"><i class="flaticon-right-arrow-1"></i></a>
                                    <h5><a href="portfolio-details-1.html">App for Virtual Reality</a></h5>
                                    <p class="portfolio-cates">
                                        <a href="#">Design</a><span>/</span>
                                        <a href="#">Ideas</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-item projects-style-2">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-details-1.html">
                                    <img src="https://via.placeholder.com/720x520.png" class="" alt="">
                                    <span class="overlay"></span>
                                </a>
                            </div>
                            <div class="portfolio-info ">
                                <div class="portfolio-info-inner">
                                    <a class="btn-link" href="htportfolio-details-1.html"><i class="flaticon-right-arrow-1"></i></a>
                                    <h5><a href="portfolio-details-1.html">Basics Project</a></h5>
                                    <p class="portfolio-cates">
                                        <a href="#">Design</a><span>/</span>
                                        <a href="#">Development</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-item projects-style-2">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-details-1.html">
                                    <img src="https://via.placeholder.com/720x520.png" class="" alt="">
                                    <span class="overlay"></span>
                                </a>
                            </div>
                            <div class="portfolio-info ">
                                <div class="portfolio-info-inner">
                                    <a class="btn-link" href="htportfolio-details-1.html"><i class="flaticon-right-arrow-1"></i></a>
                                    <h5><a href="portfolio-details-1.html">eCommerce Website</a></h5>
                                    <p class="portfolio-cates">
                                        <a href="#">Design</a><span>/</span>
                                        <a href="#">Ideas</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-item projects-style-2">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio-details-1.html">
                                    <img src="https://via.placeholder.com/720x520.png" class="" alt="">
                                    <span class="overlay"></span>
                                </a>
                            </div>
                            <div class="portfolio-info ">
                                <div class="portfolio-info-inner">
                                    <a class="btn-link" href="htportfolio-details-1.html"><i class="flaticon-right-arrow-1"></i></a>
                                    <h5><a href="portfolio-details-1.html">Basics Project</a></h5>
                                    <p class="portfolio-cates">
                                        <a href="#">Design</a><span>/</span>
                                        <a href="#">Development</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="technology-v1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ot-heading text-center text-white">
                                <span>// TECHNOLOGY INDEX</span>
                                <h2 class="main-heading">We Deliver Solution with <br>the Goal of Trusting Relationships</h2>
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <a class="tech-box text-center" href="web-development.html" target="_blank">
                                <div class="icon-main"><span class="flaticon-code-1"></span></div>
                                <h5>WEB</h5>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <a class="tech-box text-center" href="mobile-development.html">
                                <div class="icon-main"><span class="flaticon-android"></span></div>
                                <h5>Android</h5>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <a class="tech-box text-center" href="mobile-development.html">
                                <div class="icon-main"><span class="flaticon-apple"></span></div>
                                <h5>IOS</h5>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <a class="tech-box text-center" href="it-services.html">
                                <div class="icon-main"><span class="flaticon-iot"></span></div>
                                <h5>IOT</h5>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <a class="tech-box text-center" href="it-services.html">
                                <div class="icon-main"><span class="flaticon-time-and-date"></span></div>
                                <h5>Wearalables</h5>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <a class="tech-box text-center" href="it-services.html">
                                <div class="icon-main"><span class="flaticon-tv"></span></div>
                                <h5>TV</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    @section('content')

                    @endsection
                </div>
            </section>
        </div>

        <footer id="site-footer" class="site-footer footer-v2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="images/logo-light.png" alt="">
                    </div>
                </div>
                <div class="space-60"></div>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-info box-style2 ft-contact-info">
                            <div class="box-icon"><i class="flaticon-world-globe"></i></div>
                            <p>411 University St, Seattle, USA</p>
                            <h6>Our Address</h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-info box-style2 ft-contact-info">
                            <div class="box-icon"><i class="flaticon-envelope"></i></div>
                            <p>contact@mail.net</p>
                            <h6>Our Mailbox</h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-info box-style2 ft-contact-info">
                            <div class="box-icon"><i class="flaticon-phone-1"></i></div>
                            <p>+1 -800-456-478-23</p>
                            <h6>Our Phone</h6>
                        </div>
                    </div>
                </div>
                <div class="space-65"></div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contacts</a></li>
                            </ul>
                        </div>
                        <div class="space-20"></div>
                        <p class="copyright-text v2">Copyright © 2020 Engitech by ThemeModern. All Rights Reserved.</p>
                        <div class="space-26"></div>
                        <div class="ft-list-icon">
                            <a class="twitter" href="twitter.com"><i class="fab fa-twitter"></i></a>
                            <a class="facebook" href="facebook.com"><i class="fab fa-facebook-f"></i></a>
                            <a class="linkedin" href="linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                            <a class="instagram" href="instagram.com"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- #site-footer -->
</div><!-- #page -->
<a id="back-to-top" href="#" class="show"><i class="flaticon-up-arrow"></i></a>
        <!-- jQuery -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/easypiechart.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front/js/scripts.js') }}"></script>
    <script src="{{ asset('front/js/header-mobile.js') }}"></script>
    <!-- REVOLUTION JS FILES -->

    <script  src="{{ asset('front/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script  src="{{ asset('front/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script  src="{{ asset('front/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script  src="{{ asset('front/js/rev-script-2.js') }}"></script>
    <script src="{{ asset('front/js/royal_preloader.min.js') }}"></script>
    <script>
        window.jQuery = window.$ = jQuery;
        (function($) { "use strict";
            //Preloader
            Royal_Preloader.config({
                mode           : 'logo',
                logo           :'images/logo.svg',
                logo_size      : [160, 75],
                showProgress   : true,
                showPercentage : true,
                text_colour: '#000000',
                background:  '#ffffff'
            });
        })(jQuery);
    </script>
</body>
</html>