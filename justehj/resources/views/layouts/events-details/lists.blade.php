<div class="event_signle_3">
                                <div class="event_date">
                                    <p>{{ $event->day }}<span><br>{{ $event->month }}, {{ $event->year }}</span></p>
                                </div>


                                <div class="event_title">
                                    <h4><a href="/events/{{ $event->slug }}" title="">{{ $event->title }}</a></h4>
                                    <p>{{ $event->starttime }} to {{ $event->endtime }} <br>{{ $event->location }}</p>
                                </div>
                            </div>