  <section class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-10 mx-auto bg-white">
			
    
	
			@if(count($notes) > 0)
				@include('layouts.note.lists')
			@else
				<div class="col-lg-10 col-md-10 mx-auto  text-center bg-white">
					
				<h1 class="text-muted"> No notes  </h1>
				
				</div>
				
			@endif

 
		
                <!-- Pager -->
                 {{ $notes->links('vendor.pagination.ehj') }}

        </div>
     </div> 
  </section>