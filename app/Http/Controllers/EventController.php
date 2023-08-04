<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
		$events = Event::orderBy('created_at','desc')->paginate(12);
    
        return view('events',['events' => $events]);
    }

    public function show(){
        $event = App\Event::where('slug', '=', $slug)->firstOrFail();
        return view('events-details',['events' => $events]);
    }

}
