 <div class="col-xl-4 col-lg-4 col-md-6 blog-card">
                    <div class="single bg-white shadow wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: fadeIn;">


                        <div class="blog-img">
                            <img src="{{ Voyager::image( $video->image ) }}" alt="" class="img-fluid">
                        </div>

                        <div class="blog-title">
                            <span class="date text-muted">{{ $video->created_at->format('F d, Y') }}</span>
                            <h6><a href="/videos/{{ $video->slug }}" title="">{{ $video->title }}</a></h6>
                        </div>
                    </div>
                </div>