// Slider js using slick
// $(document).ready(function() {

//     $(".Modern-Slider").slick({
//         autoplay: true,
//         autoplaySpeed: 10000,
//         speed: 900,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         pauseOnHover: false,
//         dots: true,
//         pauseOnDotsHover: true,
//         cssEase: 'linear',
//         fade: true, // Disable This And Watch
//         draggable: true,
//         prevArrow: '<button class="PrevArrow text-center"><i class="fas fa-angle-left"></i></button>',
//         nextArrow: '<button class="NextArrow text-center"><i class="fas fa-angle-right"></i></button>',
//     });

// })

$(document).ready(function() {

    $(".Modern-Slider").slick({
        autoplay: true,
        autoplaySpeed: 10000,
        speed: 900,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnHover: false,
        dots: true,
        pauseOnDotsHover: true,
        cssEase: 'linear',
        fade: true, // Disable This And Watch
        draggable: false,
        prevArrow: '<button class="PrevArrow text-center"><i class="fas fa-angle-left"></i></button>',
        nextArrow: '<button class="NextArrow text-center"><i class="fas fa-angle-right"></i></button>',
    });

})


// map
function basicmap() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 17,
        scrollwheel: false,
        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(8.448902, 4.562763), // New York


        // This is where you would paste any style found on Snazzy Maps.
        styles: [{ "featureType": "all", "elementType": "geometry.fill", "stylers": [{ "hue": "#ffb500" }, { "lightness": "54" }, { "saturation": "-61" }] }, { "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{ "color": "#444444" }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "road", "elementType": "all", "stylers": [{ "saturation": -100 }, { "lightness": 45 }] }, { "featureType": "road.highway", "elementType": "all", "stylers": [{ "visibility": "simplified" }] }, { "featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "color": "#c8d7d4" }, { "visibility": "on" }] }]
    };
    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('contact-map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(8.448902, 4.562763),
        map: map,
        title: 'Eucharistic Heart of Jesus Model College Ilorin'
    });
}
if ($('#contact-map').length != 0) {
    google.maps.event.addDomListener(window, 'load', basicmap);
}

;



// /**Ajax Message  **/
// $(function() {

//     $('#question-form').validator();
//     // Get the form.
//     var form = $('#question-form');

//     // Get the messages div.
//     var formMessages = $('.ajax-response');

//     // Set up an event listener for the contact form.
//     $(form).submit(function(e) {
//         // Stop the browser from submitting the form.
//         e.preventDefault();

//         // Serialize the form data.
//         var formData = $(form).serialize();

//         // Submit the form using AJAX.
//         $.ajax({
//                 type: 'POST',
//                 url: $(form).attr('action'),
//                 data: formData
//             })
//             .done(function(response) {
//                 // Make sure that the formMessages div has the 'success' class.
//                 $(formMessages).removeClass('error');
//                 $(formMessages).addClass('success');

//                 // Set the message text.
//                 $(formMessages).text(response);

//                 // Clear the form.
//                 $('#question-form input,#question-form textarea').val('');
//             })
//             .fail(function(data) {
//                 // Make sure that the formMessages div has the 'error' class.
//                 $(formMessages).removeClass('success');
//                 $(formMessages).addClass('error');

//                 // Set the message text.
//                 if (data.responseText !== '') {
//                     $(formMessages).text(data.responseText);
//                 } else {
//                     $(formMessages).text('Oops! An error occured and your message could not be sent.');
//                 }
//             });
//     });

// });


$('body').on('mouseenter mouseleave', '.dropdown', function(e) {
    var _d = $(e.target).closest('.dropdown');
    _d.addClass('show');
    setTimeout(function() {
        _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
        $('[data-toggle="dropdown"]', _d).attr('aria-expanded', _d.is(':hover'));
    }, 300);
});