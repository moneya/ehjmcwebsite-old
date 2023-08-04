  <section class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-10 mx-auto bg-white shadow">

         @include('layouts.assignment.lists')

 
                <!-- Pager -->
                 {{ $assignments->links('vendor.pagination.ehj') }}

        </div>
     </div> 
  </section>