<footer id="site-footer" class="site-footer footer-v2">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
                    <p>{{ $contact->address }}</p>
                        <h6>Ünvan</h6>

                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="contact-info box-style2 ft-contact-info">
                    <div class="box-icon"><i class="flaticon-envelope"></i></div>
                    <p>{{ $contact->email }}</p>
                    <h6>Email Adresi</h6>

                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="contact-info box-style2 ft-contact-info">
                    <div class="box-icon"><i class="flaticon-phone-1"></i></div>
                    <p>{{ $contact->tel1 }}</p>
                    <h6>Telefon</h6>

                </div>
            </div>
        </div>
        <div class="space-65"></div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="footer-menu ">
                    <ul>
                        <li><a href="#">{{ __('static.home') }}</a></li>
                        <li><a href="#">{{ __('static.haqqimizda') }}</a></li>
                        <li><a href="#">{{ __('static.xidmetler') }}</a></li>
                        <li><a href="#">{{ __('static.mehsul') }}</a></li>
                        <li><a href="#">{{ __('static.qalereya') }}</a></li>
                        <li><a href="#">{{ __('static.elaqe') }}</a></li>
                    </ul>
                </div>
                <div class="space-20"></div>
                <p class="copyright-text v2">Copyright © {{ date('Y') }} Bütün müəllif hüquqları qorunur</p>
                <div class="space-26"></div>
                <div class="ft-list-icon">
                    <a class="twitter" href="{{ $contact->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="facebook" href="{{ $contact->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="linkedin" href="{{ $contact->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="instagram" href="{{ $contact->insat }}" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->
