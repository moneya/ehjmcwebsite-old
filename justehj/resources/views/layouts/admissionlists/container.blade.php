  <section class=" overview">
        <div class="container">
            <div class="row">



    @foreach ($admissionlists as $admissionlist)
        @include('layouts.admissionlists.lists', ['admissionlists' => $admissionlists])
    @endforeach
        

                    </div>

                    {{ $admissionlists->links('vendor.pagination.ehj') }}
                </div>
      </section>