
     <section class="event_list_1 event_grid_1 loaded">
        <div class="popular_event">
            <div class="container">
                <div class="row">
                     @foreach ($events as $event)
        @include('layouts.events.lists', ['events' => $events])
    @endforeach
                </div>
                
                    {{ $events->links('vendor.pagination.ehj') }}
            </div>
        </div>
    </section>