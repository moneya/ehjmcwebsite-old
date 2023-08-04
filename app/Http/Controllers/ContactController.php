<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

use Mail;
use App\Mail\NewContactRequest;

class ContactController extends Controller
{
    public function show(){
       
        return view('contact');
    }

    public function mail( ContactRequest $request)
    {

        // Mail::to('support@example.com')->send(new NewContactRequest($request));
        // return back()->with('status','Your message has been received');


        
        Mail::send('emails.message', [
            'request' => $request->message
        ], function($mail)use($request){
         $mail->from($request->email, $request->name);
   
   
         $mail->to('info@ehjmodelcollegeilorin.com')->subject($request->subject);
        });

        return back()->with('status','Your message has been received,  We will get back to you shortly.');

    // dd($request);
       //  return view('contact');
    }

}
 