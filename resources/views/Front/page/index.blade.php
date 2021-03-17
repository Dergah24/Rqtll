@extends('front.layout.master')

@section('content')
<div id="content" class="site-content">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($sliders as $slider)


          <div class="swiper-slide" style="background-image: url('{{ asset($slider->image) }}')">
            <div class="container swiper-text">
                <h1 class="title">test</h1>
                <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recuni rerum sequi officia quas, architecto consectetur?</p>
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
                        <span>// about company</span>
                        <h2 class="main-heading">haqimizda</h2>
                    </div>
                    <p class="mb-15">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs
                        and technology challengers. We help businesses elevate their value through custom software
                        development, product design, QA and consultancy services.</p>
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
                                <a href="about-us.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEANR
                                    MORE ABOUT US</a>
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
                        <h2 class="main-heading text-white">Xidemetler<br> slideri</h2>
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
                            <a href="it-services.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEARN
                                MORE</a>
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
                            <a href="web-development.html" class="btn-details"><i class="flaticon-right-arrow-1"></i>
                                LEARN MORE</a>
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
                            <a href="it-services.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEARN
                                MORE</a>
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
                            <a href="it-services.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEARN
                                MORE</a>
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
                        <p>To succeed, every software solution must be deeply integrated into the existing tech
                            environment..</p>
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
                        <p>To succeed, every software solution must be deeply integrated into the existing tech
                            environment..</p>
                    </div>
                </div>
            </div>
            <div class="space-120"></div>
            <div class="row">
                <div class="col-md-8 col-sm-8 mb-4 mb-sm-0">
                    <div class="ot-heading mb-0">
                        <span>// our service</span>
                        <h2 class="main-heading">Ustunlukler <br>statick</h2>
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
                            <p>We carry more than just good coding skills. Our experience makes us stand out from other
                                web development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1 pb-60">
                        <div class="icon-main"><span class="flaticon-app"></span></div>
                        <div class="content-box">
                            <h5>Mobile Development</h5>
                            <p>Create complex enterprise software, ensure reliable software integration, modernise your
                                legacy system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1 pb-60">
                        <div class="icon-main"><span class="flaticon-monitor"></span></div>
                        <div class="content-box">
                            <h5>UI/UX Design</h5>
                            <p>Build the product you need on time with an experienced team that uses a clear and
                                effective design process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1 sm-pb-60">
                        <div class="icon-main"><span class="flaticon-browser"></span></div>
                        <div class="content-box">
                            <h5>QA & Testing</h5>
                            <p>Turn to our experts to perform comprehensive, multi-stage testing and auditing of your
                                software.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1 xs-pb-60">
                        <div class="icon-main"><span class="flaticon-report-1"></span></div>
                        <div class="content-box">
                            <h5>IT Counsultancy</h5>
                            <p>Trust our top minds to eliminate workflow pain points, implement new tech, and
                                consolidate app portfolios.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box-s2 s1">
                        <div class="icon-main"><span class="flaticon-best"></span></div>
                        <div class="content-box">
                            <h5>Dedicated Team</h5>
                            <p>Over the past decade, our customers succeeded by leveraging Intellectsoft’s process of
                                building, motivating.</p>
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
                                    <span>// Elaqe</span>
                                    <h2 class="main-heading">Elaqe</h2>
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
                        <h2 class="main-heading">Mehsullar</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="mb-0">Software development outsourcing is just a tool to achieve business goals. But there
                        is no way to get worthwhile results without cooperation and trust between a client company.</p>
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
                            <p class="portfolio-cates">
                                <a href="#">Design</a><span>/</span>
                                <a href="#">Development</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2 ">
                <a class="" href="http://"> <b>Hamsina bax</b> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>


    </section>


    <section class="technology-v1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ot-heading text-center text-white">
                        <span>// TECHNOLOGY INDEX</span>
                        <h2 class="main-heading">Galery <br>the Goal of Trusting Relationships</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme project-slider">


                @foreach ($galeriImages as $images)



                <div class="project-item projects-style-5">

                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="portfolio-details-1.html">
                                <img src="{{ asset('image').'/'.$images->image }}" class="" alt="">
                                <span class="overlay"></span>
                            </a>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>

            <!--   <div class="row">
                <div class="col-md-12">
                    <div class="ot-heading text-center text-white">
                        <span>// TECHNOLOGY INDEX</span>
                        <h2 class="main-heading">Galery <br>the Goal of Trusting Relationships</h2>
                    </div>
                </div>
            </div>
            <div class="space-15"></div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <a class="tech-box text-center" href="it-services.html">
                        <div class="icon-main"><span class="flaticon-tv"></span></div>
                        <h5>TV</h5>
                    </a>
                </div>
            </div> -->

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ot-heading text-center">
                        <span>// our clients</span>
                        <h2 class="main-heading">Partnyorlar <br>15+ Countries Worldwide</h2>
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

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<style>

    .swiper-container {
      width: 100%;
      height: 768px;


    }

    .swiper-slide {
      font-size: 18px;
      background: #fff;
        background-size: cover;
        background-repeat: no-repeat;
      /* Center slide text vertically */


    }

</style>


  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },


    });
  </script>

@endsection
