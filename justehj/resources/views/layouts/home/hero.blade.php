    <!--- Hero Start-->
    <div class="hero">
        <div class="Modern-Slider">

           <!--- Hero Start-->
     @php( $sliders = \App\Slider::paginate(5) )  
       @foreach ($sliders as $slider)
        @include('layouts.home.slider', ['sliders' => $sliders])
    
    @endforeach
    <!---Hero End-->
          
           
        </div>
    </div>
    <!---Hero End-->