@extends('front.layout.master')

@section('content')
<div id="content" class="site-content">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($sliders as $slider)


            <div class="swiper-slide" style="background-image: url('{{ asset($slider->image) }}')">
                <div class="container text-container">

                    <h1 class="title animate__animated animate__bounce">{{ $slider->title }}</h1>



                    <div class="row btn-row">
                        <div >
                         <a href="" class="octf-btn octf-btn-primary btn-slider btn-large">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="padding-half bg-light-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partners">
                        <div class="owl-carousel owl-theme home-client-carousel">
                            @foreach ($partners as $partner )
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{ asset('image')."/".$partner->image }}"
                                            alt="{{ $partner->image }}" style=" width: 70px ">
                                    </figure>
                                </a>
                            </div>
                            @endforeach
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
                        <span>// {{ __('static.haqqimizda') }}</span>
                        <h2 class="main-heading"> <span style="color: #212121">20 ildən </span> çoxdur ki,
                            xidmətlərimizi təqdim edirik.</h2>
                    </div>
                    <p class="mb-15">Əsasa fəaliyyət sahəmiz müasir dövürdə qabaqcıl, keyfiyyətli vı güvənli
                        texnalogiyalardan biri olan Fiber Optik Kabelləri çəkməkdən ibarətdir.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="icon-box-s1">
                                <div class="icon-main"><span class="flaticon-medal"></span></div>
                                <h5>Təcrübə</h5>
                                <div class="line-box"></div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="icon-box-s1">
                                <div class="icon-main"><span class="flaticon-gear"></span></div>
                                <h5>Sürətli Dəstək</h5>
                                <div class="line-box"></div>

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
                                <a href="about-us.html" class="btn-details"><i class="flaticon-right-arrow-1"></i>
                                    ƏTRAFLI MƏLUMAT</a>
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
                        <span class="text-primary-light">// Xidmətlərimiz</span>
                        <h2 class="main-heading text-white">Fiber Optik kabellərinin hava yolu ilə, torpaq altından,
                            binalar arası çəkilməsini, hər cür layihə, kabel çəkilişi və bərpa işlərini təmin edirik.
                        </h2>
                    </div>
                    <div class="space-20"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="serv-box-2 s2">
                        <span class="big-number"></span>
                        <div class="icon-main"><span class="flaticon-tablet"></span></div>
                        <div class="content-box">
                            <div>
                                <h5>F/O kabelinin hava yolu ilə çəkilməsi</h5>
                            </div>

                            <a href="#" class="btn-details"><i class="flaticon-right-arrow-1"></i>  Ətraflı məlumat</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="serv-box-2 s2">
                        <span class="big-number"></span>
                        <div class="icon-main"> <span class="flaticon-ui"></span></div>
                        <div class="content-box">
                            <div>
                                <h5>F/O kabelinin torpaq altından çəkilməsi</h5>
                            </div>

                            <a href="#" class="btn-details"><i class="flaticon-right-arrow-1"></i>
                                Ətraflı Mulumat</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="serv-box-2 s2">
                        <span class="big-number"></span>
                        <div class="icon-main"><span class="flaticon-report"></span></div>
                        <div class="content-box">
                            <div>
                                <h5>F/O kabelinin binalar arası çəkilməsi</h5>
                            </div>

                            <a href="#" class="btn-details"><i class="flaticon-right-arrow-1"></i> Ətraflı məlumat</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="serv-box-2 s2">
                        <span class="big-number"></span>
                        <div class="icon-main"><span class="flaticon-report"></span></div>
                        <div class="content-box">
                            <div>
                                <h5>Kamera və dəmir dirəklərinin quraşdırılması </h5>
                            </div>
                            <a href="#" class="btn-details"><i class="flaticon-right-arrow-1"></i> Ətraflı məlumat</a>
                        </div>
                    </div>
                </div>



            </div>

            <div class="row" style="justify-content: center" >
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="serv-box-2 s2">
                        <span class="big-number"></span>
                        <div class="icon-main"><span class="flaticon-report"></span></div>
                        <div class="content-box">
                            <div>
                                <h5>KRQ quyularının quraşdırılması</h5>
                            </div>

                            <a href="#" class="btn-details"><i class="flaticon-right-arrow-1"></i>  Ətraflı məlumat</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="serv-box-2 s1">
                        <span class="big-number"></span>
                        <div class="icon-main"><span class="flaticon-report"></span></div>
                        <div class="content-box">
                            <div>
                                <h5>Optik birləşdirici qolçaqlarin və optik sonlanma qutusunun quraşdırılması/qaynaq
                                    edilməsi</h5>
                            </div>

                            <a href="#" class="btn-details"><i class="flaticon-right-arrow-1"></i> Ətraflı məlumat</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="serv-box-2 s2">
                        <span class="big-number"></span>
                        <div class="icon-main"><span class="flaticon-shield"></span></div>
                        <div class="content-box">
                            <div>
                                <h5>Radarlarin çəkilməsi</h5>
                            </div>

                            <a href="it-services.html" class="btn-details"><i class="flaticon-right-arrow-1"></i>  Ətraflı məlumat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-0 pb-290">
        <div class="container">

            <div class="space-120"></div>
            <div class="row">
                <div class="col-md-8 col-sm-8 mb-4 mb-sm-0">
                    <div class="ot-heading mb-0">
                        <span>// Üstünlüklər</span>

                    </div>
                </div>

            </div>
            <div class="space-55"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1 pb-60">
                        <div class="icon-main"><span class="flaticon-code"></span></div>
                        <div class="content-box">
                            <h5>Web Development</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1 pb-60">
                        <div class="icon-main"><span class="flaticon-app"></span></div>
                        <div class="content-box">
                            <h5>Mobile Development</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1 pb-60">
                        <div class="icon-main"><span class="flaticon-monitor"></span></div>
                        <div class="content-box">
                            <h5>UI/UX Design</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1 sm-pb-60">
                        <div class="icon-main"><span class="flaticon-browser"></span></div>
                        <div class="content-box">
                            <h5>QA & Testing</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1 xs-pb-60">
                        <div class="icon-main"><span class="flaticon-report-1"></span></div>
                        <div class="content-box">
                            <h5>IT Counsultancy</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1">
                        <div class="icon-main"><span class="flaticon-best"></span></div>
                        <div class="content-box">
                            <h5>Dedicated Team</h5>

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
                                    <span>// Əlaqə</span>
                                    <h2 class="main-heading">Ətraflı məlumat almaq üçün bizimlə əlaqə saxlayın.</h2>
                                </div>
                            </div>
                            <div class="col-md-3 text-md-right text-center align-self-end">
                                <a href="contact.html" class="octf-btn btn-border" role="button">Əlaqə</a>
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
                        <span>// Məhsulllar</span>

                    </div>
                </div>
            </div>
        </div>
        <div class="space-40"></div>
    </section>
    <section class="no-padding-top">
        <div class="owl-carousel owl-theme project-slider">

            @foreach ($products as $product)

            <div class="project-item projects-style-2">
                <div class="projects-box">
                    <div class="projects-thumbnail">
                        <a href="portfolio-details-1.html">
                            <img src="{{ $product->image }}" class="" alt="">
                            <span class="overlay"></span>
                        </a>
                    </div>
                    <div class="portfolio-info ">
                        <div class="portfolio-info-inner">
                            <h5><a href="portfolio-details-1.html">{{  $product->title }}</a></h5>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">

            <div class="col-md-8"></div>

            <div class="home-about-btn">
                <div class="ot-button">
                    <a href="about-us.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> ƏTRAFLI
                        MƏLUMAT</a>
                    <div class="space-15"></div>
                </div>
            </div>
        </div>
   </div>
</section>
</section>
<section class="technology-v1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ot-heading">
                    <span>// Qalereya</span>

                </div>
            </div>
        </div>


        <div class="owl-carousel owl-theme project-slider slider-gallery">

            @foreach ($galeriImages as $images)

            <div class="project-item projects-style-2">
                <div class="projects-box gallery"  >
                    <div class="projects-thumbnail" >

                            <img src="{{ asset('image').'/'.$images->image }}"  onclick="myFunction()" class="" alt="">
                            <span class="overlay"></span>

                    </div>

                </div>
            </div>
            @endforeach

        </div>



    </div>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="home-about-btn">
            <div class="ot-button">
                <a href="about-us.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> ƏTRAFLI MƏLUMAT</a>
                <div class="space-15"></div>
            </div>
        </div>
    </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ot-heading text-center">
                    <span>// Partnyorlar</span>
                    <h2 class="main-heading"></h2>
                </div>
            </div>
        </div>
        <div class="space-35"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="ot-testimonials">
                    <div class="owl-carousel owl-theme testimonial-inner ot-testimonials-slider">
                        @foreach ($partners as $partner)
                        <div class="testi-item">
                            <div class="layer1"></div>
                            <div class="layer2">
                                <div class="t-head flex-middle">
                                    <img src="{{ asset('image').'/'.$partner->image }}" alt="{{ $partner->image }}"
                                        class="lazyloaded" data-ll-status="loaded" style="width: 100px">
                                    <div class="tinfo">
                                        <h6>SoftTech,</h6>
                                        <span>Manager of Company</span>
                                    </div>
                                </div>
                                <div class="ttext">
                                    "Patience. Infinite patience. No shortcuts. Very well thought out and articulate
                                    communication. Clear milestones, deadlines and fast work. Even if the client is
                                    being careless. The best part...always solving problems with great original
                                    ideas!."
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>


@endsection
