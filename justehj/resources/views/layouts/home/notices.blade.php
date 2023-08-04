<div class="col-md-6  col-lg-4 col-xl-4 notice-card">
                    <div class="single  bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="box-head border-bottom">
                            <div class="themeum-title title-leftborder leftborder">
                                <h3 class="intro-title text-uppercase">Notice</h3>
                            </div>
                        </div>
                        <div class="blog-title">


                              @php( $notices = \App\Notice::paginate(5) )  
                          @foreach ($notices as $notice)
                      @include('layouts.home.noticelist', ['notices' => $notices])
    
                 @endforeach

                           

                            <div class="cources_btn d-flex justify-content-between">
                                <a href="/notices" title="" class="apply_btn">Read More<i class="flaticon-angle-arrow-pointing-to-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>