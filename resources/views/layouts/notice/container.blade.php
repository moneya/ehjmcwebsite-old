  <section class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-10 mx-auto bg-white">
			
    @foreach ($notices as $notice)
	@if(count($notices) > 0)		
         @include('layouts.notice.lists')
    @else
		<div class="col-lg-10 col-md-10 mx-auto  text-center bg-white">
			
		<h1 class="text-muted"> No Notices  </h1>
		
		</div>
	@endif
 @endforeach
 
		
                <!-- Pager -->
                 {{ $notices->links('vendor.pagination.ehj') }}

        </div>
     </div> 
  </section>