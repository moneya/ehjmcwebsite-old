<?php

namespace App\Http\Controllers;



use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index(){
		$assignments  = Assignment::orderBy('created_at','desc')->paginate(12);
      
        return view('assignments',['assignments' => $assignments]);
    }

    public function show(){
        $assignment = App\Assignment::where('slug', '=', $slug)->firstOrFail();
        return view('assignments-details',['assignments' => $assignments]);
    }
}
