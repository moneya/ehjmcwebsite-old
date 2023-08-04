  <section class=" overview">
        <div class="container">
            <div class="row">



    @foreach ($videos as $video)
        @include('layouts.video.lists', ['videos' => $videos])
    @endforeach
        

                    </div>

                    {{ $videos->links('vendor.pagination.ehj') }}
                </div>
      </section>