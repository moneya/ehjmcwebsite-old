
   {{--  <section class="masthead" style="background: linear-gradient( rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5) ),url({{ Voyager::image( $video->image ) }})  fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="video-heading">
                        <h1>{{ $video->title }}</h1>
                        <h2 class="subheading">{{ str_limit(strip_tags($video->body), 50) }}</h2>
                        <span class="meta">videoed on {{ $video->created_at->format('F d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}

  <!-- <div class="page-title-area pt-220 pb-225 bg-ehj" style="background-image:url(img/people.jpg)"> -->
    <div class="page-title-area pt-3 pb-3 bg-dark">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-10  col-lg-8 col-sm-8">
                    <iframe width="100%" height="380px" src="https://www.youtube.com/embed/{{ $video->videourl}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>