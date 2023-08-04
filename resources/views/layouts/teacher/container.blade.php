
						  @foreach ($teachers as $teacher)
	@if(count($teachers) > 0)
     @include('layouts.teacher.lists', ['teachers' => $teachers])
	@else
		<div class="col-lg-10 col-md-10 mx-auto mt-5  mb-5 text-center bg-white">
			
		<h1 class="text-muted p-2"> There are no teachers added yet  </h1>
		
		</div>
	@endif
    @endforeach	
				



{{--

    @foreach ($teachers as $teacher)
        @include('layouts.teacher.lists', ['teachers' => $teachers])
    @endforeach
	
--}}
        

                   
 <div class=" col-12 col-md-12 col-lg-12 d-flex justify-content-center">
                  
                    {{ $teachers->links('vendor.pagination.ehj') }}
                </div>
               