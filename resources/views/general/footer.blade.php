<footer class="footer bg-ehj">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3 footer-about wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <img class="logo-footer" src="{{Voyager::image(setting('site.logo') )}}" alt="logo-footer" data-at2x="assets/img/logo.png"><span class="logo-text text-uppercase text-white">EHJMC - Ilorin</span>
                        <p>
                           {{ setting('site.description') }}
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <h3>Contact</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Plot 528 Asa-Dam road Ilorin west, Ilorin Kwara State</p>
                        <p><i class="fas fa-box"></i> P.O.Box 4580 Asa-Dam road Ilorin</p>
                        <p><i class="fas fa-phone"></i> Phone: (+234) 080 564 32423</p>
                        <p><i class="fas fa-phone"></i> Phone: (+234) 070 393 31351</p>
                        <p><i class="fas fa-envelope"></i> Email: <a href="mailto:info@ehjmodelcollegeilorin.com">info@ehjmodelcollegeilorin.com</a></p>
                    </div>
                    <div class="col-md-4 col-lg-4 footer-links wow fadeInUp animated d-none d-sm-none d-md-block" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="row">
                            <div class="col">
                                <h3>Links</h3>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                               <p><a class="scroll-link" href="{{ url('/') }}/news">News</a></p>
                                <p><a class="scroll-link" href="{{ url('/') }}/notices">Notices</a></p>
                                <p><a class="scroll-link" href="{{ url('/') }}/events">Events</a></p>
                                 <p><a class="scroll-link" href="{{ url('/') }}/videos">Videos</a></p>
                                  <p><a class="scroll-link" href="{{ url('/') }}/fees-and-payments">Fees and Payments</a></p>
                                
                            </div>
                            {{--  <div class="col-md-6">
                                <p><a class="scroll-link" href="#section-4">Section 4</a></p>
                                <p><a href="#">Affiliates</a></p>
                                <p><a href="#">Terms</a></p>
                            </div>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        © 2018 EHJMC ILORIN
                    </div>
                    <div class="col-md-6 footer-social">
                    @if (setting('footer.facebook'))
                         <a target="_blank" href="{{ setting('footer.facebook') }}"><i class="fab fa-facebook"></i></a>
                    @endif

                      @if (setting('footer.twitter'))
                         <a target="_blank" href="{{ setting('footer.twitter') }}"><i class="fab fa-twitter"></i></a>
                    @endif

                    @if (setting('footer.youtube'))
                         <a target="_blank" href="{{ setting('footer.youtube')}}"><i class="fab fa-youtube"></i></a>
                    @endif
                       
                       @if (setting('footer.instagram'))
                         <a target="_blank" href="{{ setting('footer.instagram') }}"><i class="fab fa-instagram"></i></a>
                    @endif

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-powered bg-black-gradient bg-black text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="m-1 p-1">
                            <span class="h6">powered by </span> <a target="_blank" href="http://kallyict.com" class="kally"> <img src="{{ url('/') }}/img/kally.png" alt=""> Kally ICT</span> </div>
                    </div>
                </div>
            </div>

        </div>

    </footer>