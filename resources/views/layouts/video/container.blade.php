  <section class=" overview">
        <div class="container">
            <div class="row">



    @foreach ($videos as $video)
	@if(count($videos) > 0)
        @include('layouts.video.lists', ['videos' => $videos])
	@else
		<div class="col-lg-10 col-md-10 mx-auto  text-center bg-white">
			
		<h1 class="text-muted"> No videos  </h1>
		
		</div>
	@endif
    @endforeach
        

                    </div>

                    {{ $videos->links('vendor.pagination.ehj') }}
                </div>
      </section>