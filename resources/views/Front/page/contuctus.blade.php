
@extends('front.layout.master')
@section('content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title">Contact</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-left">
                        <div class="ot-heading">
                            <span>// contact details</span>
                            <h2 class="main-heading">Contact us</h2>
                        </div>
                        <div class="space-5"></div>
                        <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
                        <div class="contact-info box-style1">
                            <i class="flaticon-world-globe"></i>
                            <div class="info-text">
                                <h6>Our Address:</h6>
                                <p>411 University St, Seattle, USA</p>
                            </div>
                        </div>
                        <div class="contact-info box-style1">
                            <i class="flaticon-envelope"></i>
                            <div class="info-text">
                                <h6>Our Mailbox:</h6>
                                <p>engitech@mail.net</p>
                            </div>
                        </div>
                        <div class="contact-info box-style1">
                            <i class="flaticon-phone-1"></i>
                            <div class="info-text">
                                <h6>Our Phone:</h6>
                                <p>+1 -800-456-478-23</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="contact.php" method="post" class="wpcf7">
                        <div class="main-form">
                            <h2>Ready to Get Started?</h2>
                            <p class="font14">Your email address will not be published. Required fields are marked *</p>
                            <p>
                                <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name *" required>
                            </p>
                            <p>
                                <input type="email" name="email" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Email *" required>
                            </p>
                            <p>
                                <textarea name="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required></textarea>
                            </p>
                            <p><button type="submit" class="octf-btn octf-btn-light">Send Message</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="no-padding">
        <div class="map">
            <iframe src="https://goo.gl/maps/zMg2LHwr6Wzn1QaCA" height="500" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>


@endsection
