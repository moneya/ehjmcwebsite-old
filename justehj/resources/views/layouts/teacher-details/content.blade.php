{{--  
    <section class="container-fluid bg-white shadow">
        <div class="row ">
            <div class="col-lg-8 col-md-12 mx-auto  p-3">

                <p>{!! $teacher->body !!}</p>

            </div>

        </div>
    </section>  --}}


    <section class="teachers_profile bg-white p-3">
        <div class="teacher-details-wrapper">
            
                    
                    <!-- Ends: .teacher-detail-left -->
                    <div class="col-sm-12 ">
                        <div class="row justify-content-center">
    <div class="col-sm-3 teacher-detail-left">
                        <div class="teacher_info_wrapper">
                            
                                <img style="width:300px; height:300px; " src="{{ Voyager::image( $teacher->profile_img ) }}" alt="" class="img-fluid">
                            
                           <div class="social_wraper p-2">
                                <ul class="social-items  justify-content-center d-flex list-unstyled">
                                    <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                            <div class="col-sm-7 teacher-detail-right">
                                <div class="teacher-info">
                                   <div class="row">
<ul class="list-unstyled col-sm-6">
                                        <li>
                                            <h3>Name :</h3>
                                            <span>{{ $teacher->name }}</span>
                                        </li>
                                        <li>
                                            <h3>Department :</h3>
                                            <span>{{ $teacher->department }}</span>
                                        </li>
                                        <li>
                                            <h3>Position :</h3>
                                            <span>{{ $teacher->position }}</span>
                                        </li>
                                        <li>
                                            <h3>Qualification :</h3>
                                            <span>{{ $teacher->qualification }}</span>
                                        </li>
                                    </ul>
    
    
    
    <ul class="list-unstyled col-sm-6">
                                        <li>
                                            <h3>Languages :</h3>
                                            <span>{{ $teacher->language }}</span>
                                        </li>
                                        <li>
                                            <h3>Certification :</h3>
                                            <span>{{ $teacher->certification }}</span>
                                        </li>
                                        <li>
                                            <h3>Experience :</h3>
                                            <span>{{ $teacher->experience }}</span>
                                        </li>
                                        <li>
                                            <h3>Interests :</h3>
                                            <span>{{ $teacher->interest }}</span>
                                        </li>
                                    </ul>
</div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                <div class="teacher-contact">
                                    <h2>Contact Me</h2>
                                    <form action="#">
                                        <input type="text" placeholder="Your Name*" required="">
                                        <input type="email" placeholder="Email*" required="">
                                        <textarea>Your Message</textarea>
                                        <button type="submit">Submit Your Request</button>
                                    </form>
                                </div>
                            </div> -->
                            <div class="col-sm-10 mt-5 teacher-detail-right  bg-white " style="box-shadow: rgba(47, 47, 47, 0.1) 0px 0px 81px 0px;
">
                                <div class="courses_tab_wrapper pl-3 pr-3 pb-3  bg-white">
                                    <div class="courses_details_nav_tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item"><a class="nav-link active show" href="#information" role="tab" data-toggle="tab" aria-selected="true"><i class="flaticon-info-sign"></i>About</a></li>
                                            {{--  <li class="nav-item"><a class="nav-link" href="#curricularm" role="tab" data-toggle="tab" aria-selected="false"><i class="flaticon-portfolio"></i>Qualification</a></li>
                                          --}}
                                          </ul>
                                        <hr>
                                    </div>

                                    <!-- Tab panes -->
                                    <div class="tab_contents tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                            <p>{{ $teacher->about }}</p>
                                        </div>
                                        {{--  <div role="tabpanel" class="tab-pane fade" id="curricularm">
                                            <p>"Lorem ipsum idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                        </div>  --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ends: .teacher-detail-right -->
        </div>

    </section>