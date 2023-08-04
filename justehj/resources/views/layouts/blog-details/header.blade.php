
   <section class="masthead" style="background: linear-gradient( rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5) ),url({{ Voyager::image( $post->image ) }})  fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">{{ str_limit(strip_tags($post->body), 50) }}</h2>
                        <span class="meta">Posted on {{ $post->created_at->format('F d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
