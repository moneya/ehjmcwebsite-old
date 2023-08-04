<style>
.content-text-3 {
    height: 40px;
    width: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    background-color: #572ce86b;
    color: #572ce8;
    font-weight: 700
}
    .star {
    height: 40px;
    width: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #eee;
    margin-right: 10px;
    border-radius: 5px
}

    
.time-text {
    font-size: 14px;
    color: #5c5c5c;
    font-family: roboto;
    font-weight: bold;
    padding-bottom: 0.6rem;
}

.new {
    font-size: 14px
    font-weight: bold;
}
  .dots {
    height: 7px;
    width: 7px;
    background-color: #eee;
    display: flex;
    border-radius: 50%;
    margin-left: 7px;
    margin-right: 7px
}

.yellow {
    color: #ffab2e
}

.content-text-1 {
    height: 40px;
    width: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    background-color: #ffe7cc;
    color: #ffa03a;
    font-weight: 700
}
</style>


	   @foreach ($notes as $note)
       {{-- <div class="post-preview">
                    <a href="{{url('/notes')}}/{{$note->slug}}">
                        <h2 class="post-title">
                           {{ $note->topic }}
                        </h2>
                    </a>
                    <p class="post-meta">Posted on {{ $note->created_at->format('F d, Y') }}</p>
        </div>
        <hr> --}}
        <div class="mt-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row align-items-center"> <span class="star"><i class="fa fa-star yellow"></i></span>
                            <div class="d-flex flex-column"> <span>{{ ucfirst($note->topic) }}</span>
                                <div class="d-flex flex-row align-items-center time-text"> <small> {{ucfirst($note->subject)}}</small> <span class="dots"></span> <small> {{ucfirst($note->class)}}</small> <span class="dots"></span> <small>Posted on {{ $note->created_at->format('F d, Y') }}</small> </div>
                            </div>
                        </div> 
                        @if(!empty($note->file) && isset($note->file))
                        <a href="{{url('/storage/')}}/{{ json_decode($note->file)[0]->download_link}}"
                            download="{{ ucfirst($note->topic) }}-{{ucfirst($note->subject)}}" 
                            class="btn btn-ehj new">
                            Download
                        </a>
                        @endif
                    </div>
        </div>
	   @endforeach
    

