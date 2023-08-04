  <section class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-10 mx-auto bg-white shadow">

       
 
               

        </div>
     </div> 
  </section>




     <section class="container">
        <div class="row ">
            <div class="col-lg-10 col-md-10 mx-auto bg-white shadow p-5">
                <ul class="timeline">

                     @foreach ($hists as $hist)
        @include('layouts.history.lists', ['hists' => $hists])
            @endforeach
                


                </ul>
                 <!-- Pager -->
                 {{ $hists->links('vendor.pagination.ehj') }}

            </div>
    </section>