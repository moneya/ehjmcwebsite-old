
@foreach($notices as $notice)
<div class="post-preview">
                    <a href="/notices/{{ $notice->slug}}">
                        <h2 class="post-title">
                           {{ $notice->title }}
                        </h2>
                    </a>
                    <p class="post-meta">Posted on {{ $notice->created_at->format('F d, Y') }}</p>
                </div>
                 <hr>
@endforeach