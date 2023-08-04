 
 <section class="our_instructors_1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="single-wrapper">
                        <div class="team-single-item wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <figure>
                                <div class="member-img">
                                    <div class="teachars_pro">
                                        <img src="{{ Voyager::image( $teacher->profile_img ) }}" alt="member img" class="img-fluid">
                                    </div>
                                </div>
                                <figcaption>
                                    <div class="member-name">
                                        <h4><a href="/teachers/{{ $teacher->slug }}" title="{{ $teacher->name }}">{{ $teacher->name }}</a></h4>
                                        <span>{{ $teacher->position }}</span>
                                    </div>
                                    <ul class="social-links list-unstyled">
                                    @if ($teacher->facebook)
                                                <li class="nav-item"><a target="_blank" href="{{ $teacher->facebook }}"><i class="fab fa-facebook-f"></i></a></li>       
                                    @endif
                                        @if ($teacher->twitter)
                                             <li class="nav-item"><a target="_blank" href="{{ $teacher->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                        @endif
                                       
                                       @if ($teacher->linkedin)
                                           <li class="nav-item"><a target="_blank" href="{{ $teacher->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li> 
                                       @endif
                                       @if ($teacher->instagram)
                                             <li class="nav-item"><a target="_blank" href="{{ $teacher->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                       @endif
                                      
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>

  
               
            </div>
        </div>
    </section>
 
 
 
 
{{--   
 <div class="col-xl-4 col-lg-4 col-md-6 blog-card">
                    <div class="single bg-white shadow wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: fadeIn;">


                        <div class="blog-img">
                            <img src="" alt="" class="img-fluid">
                        </div>

                        <div class="blog-title">
                            <span class="date text-muted">{{ $teacher->created_at->format('F d, Y') }}</span>
                            <h6><a href="" title="">{{ $teacher->name }}</a></h6>
                        </div>
                    </div>
                </div>  --}}