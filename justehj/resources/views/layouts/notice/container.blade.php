  <section class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-10 mx-auto bg-white shadow">

         @include('layouts.notice.lists')

 
                <!-- Pager -->
                 {{ $notices->links('vendor.pagination.ehj') }}

        </div>
     </div> 
  </section>