  <section class=" overview">
        <div class="container">
            <div class="row">


			
			  @foreach ($posts as $post)
	@if(count($posts) > 0)
         @include('layouts.blog.lists', ['posts' => $posts])
	@else
		<div class="col-lg-10 col-md-10 mx-auto  text-center bg-white">
			
		<h1 class="text-muted"> No News  </h1>
		
		</div>
	@endif
    @endforeach
			
			
			
			{{--
    @foreach ($posts as $post)
        @include('layouts.blog.lists', ['posts' => $posts])
    @endforeach
        
			--}}
                    </div>

                    {{ $posts->links('vendor.pagination.ehj') }}
                </div>
      </section>