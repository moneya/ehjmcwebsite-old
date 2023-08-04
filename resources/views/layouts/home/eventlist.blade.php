<div class="media event-card  pl-2 pr-2 ">
                                <span class="align-self-start mr-3 date-box">
                                <div class="day">
                                 {{ $event->day }}
                                </div>

                                <div class="month">
                                   {{ $event->month }}
                                </div>

                                <div class="year">
                                      {{ $event->year }}
                                    </div>
                                </span>
                                <div class="media-body">
                                    <span class="time"><i class="fa fa-clock"></i> {{ $event->starttime }} - {{ $event->endtime }}</span>
                                    <div class="mt-0 title">
                                        <a href="events/{{ $event->slug }}">{{ $event->title }}</a>
                                    </div>

                                </div>
                            </div>
                            