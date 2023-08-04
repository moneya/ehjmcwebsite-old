  <section class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-10 mx-auto bg-white shadow">
			
							
			  @foreach ($assignments as $assignment)
	@if(count($assignments) > 0)
        @include('layouts.assignment.lists')
	@else
		<div class="col-lg-10 col-md-10 mx-auto  text-center bg-white">
			
		<h1 class="text-muted"> No Assignment </h1>
		
		</div>
	@endif
    @endforeach	
				
			
			{{--
@foreach($assignments as $assignment)
         @include('layouts.assignment.lists')
@endforeach
			--}}
                <!-- Pager -->
                 {{ $assignments->links('vendor.pagination.ehj') }}

        </div>
     </div> 
  </section>