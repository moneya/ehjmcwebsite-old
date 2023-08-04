

<div class="contact-area pb-105">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                    <div class="section-title text-center mb-60">
                        <h2>Leave a message</h2>
                        <p>Norem tosum dolor sittem ametamngcing elit per sed do eiusmoad teimpor sittem elit inuning ut sed sittem do eiusmod.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="question-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                        {{--  @if(Session::has('flash_message'))
                        <div class="alert alert-success"> {{ Session::get('flash_message') }} </div>
                        @endif  --}}
   
                                    @if(Session ('status'))
                                   <div class="alert alert-success">
                                            {{ Session ('status') }}
                                   </div>
                                        
                                   @else
                         

                                {{--  <form action="{{ route('contact.store') }}" id="question-form">
                                  {{ csrf_field() }}  --}}

                                   <form action="contact" class="form" method="POST" id="question-form">
                                        {{ csrf_field() }}

                                 
                                    




                                    <div class="form-row">

                                        <div class="col-xl-6 col-md-6 mb-3  form-inline">                                
                                            <input class="form-control" required id="name" name="name" placeholder="Name :" type="text">
                                            @if($errors->has('name'))
                                            <small class=" invalid-feedback">{{ $errors->first('name') }}</small>
                                            @endif
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-3  form-inline">
                                            <input class="form-control"  required id="email" name="email" placeholder="Email :" type="text">
                                         {{--  @if($errors->has('email'))
                                            <small class=" invalid-feedback">{{ $errors->first('email') }}</small>
                                            @endif  --}}
                                        </div>

                                         <div class="col-xl-12 col-md-12 mb-3  form-inline">
                                            <input class="form-control"  required id="subject" name="subject" placeholder="Subject :" type="text">
                                              {{--  @if($errors->has('subject'))
                                            <small class=" invalid-feedback">{{ $errors->first('subject') }}</small>
                                            @endif  --}}
                                        </div>

                                        <div class="col-md-12 text-center mb-3 ">
                                            <textarea class="form-control"  required id="message" name="message" cols="30" rows="10" placeholder="Message : "></textarea>
                                              {{--  @if($errors->has('message'))
                                            <small class=" invalid-feedback">{{ $errors->first('message') }}</small>
                                            @endif  --}}
                                            <button type="submit">send message</button>
                                        </div>
                                    </div>
                                    <p class="ajax-response"></p>
                                </form>

                                 @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
