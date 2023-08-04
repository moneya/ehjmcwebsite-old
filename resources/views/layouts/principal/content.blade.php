@if (setting('principal.body'))
    <section class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-10 mx-auto bg-white shadow p-5">
                <p>{!! setting('principal.body') !!}</p>

            </div>

        </div>
    </section>
   
        
    @else

<section class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-10 mx-auto bg-white shadow p-5">
                <h4 class="text-muted">No Message here</h4>

            </div>

        </div>
    </section>

@endif
    

    