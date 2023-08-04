
                    <li>
                        <a class="float-left" href="/hists/{{ $hist->slug}}">{{ $hist->title}}</a>
                        <a href="#" class="float-right">{{ $hist->actiondate}}</a>

                        <div class="d-inline-block">
                            <p>"{{ str_limit(strip_tags($hist->content), 150) }}</p>
                        </div>
                    </li>
                  {{--  <div class="post-preview">
                    <a >
                        <h2 class="post-title">
                           {{ $hist->title }}
                        </h2>
                    </a>
                    <p class="post-meta">Posted on {{ $hist->created_at->format('F d, Y') }}</p>
                </div>  --}}
                 <hr>
