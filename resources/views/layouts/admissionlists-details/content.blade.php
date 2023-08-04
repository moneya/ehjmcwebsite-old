
    <section class="container-fluid bg-white shadow">
    
   
        <div class="row justify-content-center">
          
			
			
			@if($admissionlist->all)

            <div class="col-lg-8 col-md-12 mx-auto  p-3">

                <p>{!! $admissionlist->all !!}</p>
                <hr>

            </div>
			
			
			@endif
			
			
			
			@if($admissionlist->js_1)

            <div class="col-lg-8 col-md-12 mx-auto  p-3">
              <section class="masthead bg-primary" >
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mx-auto">
                    <div class="admissionlist-heading text-white">
                        <h1>Admission Lists for JSS1</h1>
             </div>
                </div>
            </div>
        </div>
    </section>

                <p>{!! $admissionlist->js_1 !!}</p>
                <hr>

            </div>
			
			
			@endif

				@if($admissionlist->js_2)
             <div class="col-lg-8 col-md-12 mx-auto  p-3">
             <section class="masthead bg-success" >
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mx-auto">
                    <div class="admissionlist-heading text-white">
                        <h1>Admission Lists for JSS2</h1>
             </div>
                </div>
            </div>
        </div>
    </section>


                <p>{!! $admissionlist->js_2 !!}</p>
                <hr>

            </div>
			
			@endif


			
					@if($admissionlist->ss_1)
               <div class="col-lg-8 col-md-12 mx-auto  p-3">
             <section class="masthead bg-warning" >
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mx-auto">
                    <div class="admissionlist-heading text-white">
                        <h1>Admission Lists for SS1</h1>
             </div>
                </div>
            </div>
        </div>
    </section>


                <p>{!! $admissionlist->ss_1 !!}</p>
                <hr>

            </div>
			
			@endif

          
				
				@if($admissionlist->ss_2)
               <div class="col-lg-8 col-md-12 mx-auto  p-3">
             <section class="masthead bg-gray" >
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mx-auto">
                    <div class="admissionlist-heading text-white">
                        <h1>Admission Lists for SS2</h1>
             </div>
                </div>
            </div>
        </div>
    </section>


                <p>{!! $admissionlist->ss_2 !!}</p>

                <hr>

            </div>
			
			@endif
			
			
				@if($admissionlist->uploads)
               <div class="col-lg-8 col-md-12 mx-auto text-center  p-3">
          
		  <a class="btn btn-sm btn-ehj" 
		  download="{{$admissionlist->title}}" 
		  href="/storage/{{ json_decode($admissionlist->uploads)[0]->download_link}}">Download Admissionlist</a>
						
            </div>
			
			@endif

        </div>
    </section>