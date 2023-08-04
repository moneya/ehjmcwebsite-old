  <section class=" overview">
        <div class="container">
            <div class="row">


	@if(count($admissionlists) > 0)	
							
		@foreach ($admissionlists as $admissionlist)
	
			@include('layouts.admissionlists.lists', ['admissionlists' => $admissionlists])
	    @endforeach	
	@else
		<div class="col-lg-10 col-md-10 mx-auto  text-center bg-white">
			
		<h1 class="text-muted"> There's No Admission lists out yet  </h1>
		
		</div>
	@endif
   
				
				

			
			{{--
    @foreach ($admissionlists as $admissionlist)
        @include('layouts.admissionlists.lists', ['admissionlists' => $admissionlists])
    @endforeach
			--}}

                    </div>

                    {{ $admissionlists->links('vendor.pagination.ehj') }}
                </div>
      </section>