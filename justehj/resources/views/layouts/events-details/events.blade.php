  <div class="col-md-6  col-lg-4 col-xl-4 blog-card">
                    <div class="single bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="box-head border-bottom">
                            <div class="themeum-title title-leftborder leftborder">
                                <h3 class="intro-title text-uppercase">Events</h3>
                            </div>
                        </div>

                        <div class="blog-title">

                               <!--- Event Start-->
                      @php( $events = \App\Event::paginate(3) )  
                         @foreach ($events as $event)
                   @include('layouts.home.eventlist', ['events' => $events])
    
                             @endforeach
                             <!---Event End-->
                         

                          



                            <div class="cources_btn d-flex justify-content-between">
                                <a href="" title="" class="apply_btn">Apply Now<i class="flaticon-angle-arrow-pointing-to-right"></i></a>
                            </div>

                        </div>

                    </div>
                </div>