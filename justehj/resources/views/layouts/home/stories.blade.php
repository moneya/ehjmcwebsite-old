 <div class="col-md-6  col-lg-4 col-xl-4 blog-card">
 <div class="single bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="box-head border-bottom">
                            <div class="themeum-title title-leftborder leftborder">
                                <h3 class="intro-title text-uppercase">Stories</h3>
                            </div>
                        </div>

                   <!--- Hero Start-->
                 @php( $posts = \App\Post::paginate(1) )  
                          @foreach ($posts as $post)
                      @include('layouts.home.storylist', ['posts' => $posts])
    
                 @endforeach
                 <!---Hero End-->

             
              
              
              
                </div>

  </div>