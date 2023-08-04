  <section class="container-fluid bg-gray">
        <div class="row  justify-content-center ">

            <div class="col-xl-10  col-lg-8 ">
                <div class="author">
                    <div class="author-img">
                        <img src=" {{ Voyager::image( setting('principal.image') ) }}" alt="">
                    </div>
                    <div class="author-text">
                        <h4>{{ setting('principal.pname') }}</h4>
                        <p>{{ setting('principal.pdes') }} </p>
                        <span>{{ setting('principal.pemail') }}</span>
                        <div class="author-icon">
                            @if (setting('principal.facebook'))
                             <a target="_blank"  href="{{ setting('principal.facebook') }}">
                                <i class="fab fa-facebook"></i>
                            </a>   
                            @endif

                             @if (setting('principal.twitter'))
                             <a target="_blank" href="{{ setting('principal.twitter') }}">
                                <i class="fab fa-twitter"></i>
                            </a>   
                            @endif

                            @if (setting('principal.instagram'))
                             <a target="_blank" href="{{ setting('principal.instagram') }}">
                                <i class="fab fa-instagram"></i>
                            </a>   
                            @endif

                            @if (setting('principal.gplus'))
                             <a target="_blank" href="{{ setting('principal.gplus') }}">
                                <i class="fab fa-google"></i>
                            </a>   
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>