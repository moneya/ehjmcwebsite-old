

                        <div class="blog-img">
                            <img src="{{ Voyager::image( $post->image ) }}" alt="" class="img-fluid">
                        </div>

                        <div class="blog-title">
                            <span class="date">{{ $post->created_at->format('F d, Y') }}</span>
                            <h6><a href="news/{{ $post->slug }}" title="">{{ $post->title }}</a></h6>
                            <div class="cources_btn d-flex justify-content-between">
                                <a href="/news" title="" class="apply_btn">Read More<i class="flaticon-angle-arrow-pointing-to-right"></i></a>
                            </div>
                        </div>
                  