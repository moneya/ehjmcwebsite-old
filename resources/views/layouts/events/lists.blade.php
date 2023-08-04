
<div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="events-single-box">
                            <div class="event_banner">
                                <a href="" title=""><img src="{{ Voyager::image( $event->image ) }}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="event-info bg-white">
                                <h3><a href="events/{{ $event->slug }}" title="{{ $event->title }}">{{ $event->title }}</a></h3>
                                <div class="events-time d-flex justify-content-between">
                                    <span><i class="fa fa-calendar event-icon"></i> {{ $event->day }} {{ $event->month}}</span>
                                    <span><i class="fa fa-clock event-icon"></i> {{ $event->starttime }} - {{ $event->endtime }}</span>
                                    <span><i class="fa fa-map-marker event-icon"></i>{{ $event->location }}</span>
                                </div>
                                <p>{{ str_limit(strip_tags($event->content), 150) }}</p>
                                <a href="/events/{{ $event->slug }}" title="" class="btn btn-ehj">Read More<i class="flaticon-angle-arrow-pointing-to-right"></i></a>
                            </div>
                        </div>
                    </div>





