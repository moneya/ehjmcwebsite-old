 <!-- <div class="page-title-area pt-220 pb-225 bg-ehj" style="background-image:url(/{{ $page->image }})"> -->
    <div class="page-title-area pt-100 pb-100 bg-eh"  style="background: linear-gradient( rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5) ),url({{ Voyager::image( $page->image ) }}) no-repeat fixed;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8">
                    <div class="page-title-wrapper">
                        <div class="page-title-text">
                            <h1>{{ $page->title }}</h1>
                            <p>{{ $page->excerpt }}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>