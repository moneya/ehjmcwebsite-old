
    {{--  <section class="container-fluid bg-white shadow">
        <div class="row ">
            <div class="col-lg-8 col-md-12 mx-auto  p-3">

                <p>{!! $video->body !!}</p>

            </div>

        </div>
    </section>  --}}


      <section class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-12 mx-auto bg-white shadow p-3">
                <div class="text-center">
                    <p>
                        <h4>{{ $video->title }}</h4>
                    </p>
                </div>
                <hr>
                <br>
                <p>{!! $video->content !!}</p>

            </div>

        </div>
    </section>