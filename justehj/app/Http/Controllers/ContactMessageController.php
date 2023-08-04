<?php

namespace App\Http\Controllers;


use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create(){
       
        return view('contact');
    }

    public function store(Request $request){
       
     $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'

     ]);

     Mail::send('emails.message', [
         'msg' => $request->message
     ], function($mail)use($request){
      $mail->from($request->email, $request->name);


      $mail->to('contact@example.com')->subject($request->email);
     });


     return redirect()->back()->with('flash_message', 'Thanks for you message, we will get to you shortly');
    }

}
