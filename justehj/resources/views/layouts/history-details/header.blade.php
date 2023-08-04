
   <section class="masthead text-white" style="background: linear-gradient( rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5) ),url({{ Voyager::image( $hist->image ) }})  fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="hist-heading">
                        <h1>{{ $hist->title }}</h1>
                        <h5 class="subheading">{{ str_limit(strip_tags($hist->content), 50) }}</h5>
                        <span class="meta">posted on {{ $hist->created_at->format('F d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



   