
     <section class="event_list_1 event_grid_1 loaded">
        <div class="popular_event">
            <div class="container">
                <div class="row">
				
				
					
			  @foreach ($events as $event)
	@if(count($events) > 0)
        @include('layouts.events.lists', ['events' => $events])
	@else
		<div class="col-lg-10 col-md-10 mx-auto  text-center bg-white">
			
		<h1 class="text-muted"> No Events  </h1>
		
		</div>
	@endif
    @endforeach	
				
				
				
				
				{{--
				
                     @foreach ($events as $event)
        @include('layouts.events.lists', ['events' => $events])
    @endforeach
	
				--}}
                </div>
                
                    {{ $events->links('vendor.pagination.ehj') }}
            </div>
        </div>
    </section>