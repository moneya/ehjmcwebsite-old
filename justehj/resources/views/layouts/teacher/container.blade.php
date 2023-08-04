


    @foreach ($teachers as $teacher)
        @include('layouts.teacher.lists', ['teachers' => $teachers])
    @endforeach
        

                   
 <div class=" col-12 col-md-12 col-lg-12 d-flex justify-content-center">
                  
                    {{ $teachers->links('vendor.pagination.ehj') }}
                </div>
               