
        <section class="event_details_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                        <div class="event_intro">
                            <img src="{{ Voyager::image($event->image) }}" alt="" class="img-fluid">
                            <div class="post_content">
                                <div class="post_by d-flex justify-content-between">
                                    <span class="date_event">{{ $event->day }} {{ $event->month}} {{ $event->year }}</span>
                                    <span> {{ $event->starttime }} to {{ $event->endtime }}</span>
                                </div>
                                <div class="blog_post_content">
                                    <p>{!! $event->content !!}</p>
                                    
                                                        </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="events_wrapper ">
                            <h2>Latest Events</h2>
                            
                                 @php( $events = \App\Event::paginate(5) )  
                          @foreach ($events as $event)
                      @include('layouts.events-details.lists', ['events' => $events])
    
                 @endforeach
                            


                           

                        </div>



                    </div>


                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                        <div class="location_bottom_wrapper ">
                            <div class="event_details ">
                                <div class="details_title">
                                    <h3>Event Details</h3>
                                </div>
                                <div class="event_location_info bg-white">
                                    <ul class="list-unstyled">
                                        <li>
                                            <p>Date</p><span>{{$event->day}} {{$event->month}} {{$event->year}}</span></li>
                                        <li>
                                            <p>Time</p><span>{{ $event->starttime }} to {{ $event->endtime }}</span></li>
                                    </ul>
                                    <ul class="list-unstyled">
                                        <li>
                                            <p class="hall_location">State</p>
                                        </li>
                                        <li>
                                         <p>{{ $event->state }}</p>
                                         </li>
                                         <li>
                                            <p class="hall_location">Location</p>
                                        </li>
                                        <li>
                                            <p>{{ $event->location }}</p><span>{{ $event->address}}</span></li>
                                    </ul>
                                </div>
                            </div>

                            {{--  <div class="event_location_map">
                                <div class="details_title">
                                    <h3>Google Map</h3>
                                </div>
                                <div class="google_map">
                                    <div class="google_map">
                                        <div class="gmap">
                                            <div id="map" style="position: relative; overflow: hidden;">
                                               
                                            </div>
                                        </div>
                                        <!-- Ends: .gmap -->
                                    </div>
                                </div>
                            </div>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

<?php
$lat = $event->lat;
$lng = $event->lng;

?>

    <script>
    
    // When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 11,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(<?php echo $lat;?>, <?php echo $lng;?>), // New York

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.6700, -73.9400),
        map: map,
        title: 'Snazzy!'
    });
}
    
    </script>