
   <section class="masthead" style="background: linear-gradient( rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5) ),url({{ Voyager::image( $admissionlist->image ) }})  fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="admissionlist-heading text-white">
                        <h1>{{ $admissionlist->title }}</h1>
                        <h2 class="subheading">{{ str_limit(strip_tags($admissionlist->body), 50) }}</h2>
                        <span class="meta">posted on {{ $admissionlist->created_at->format('F d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
