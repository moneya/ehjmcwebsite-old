<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NotesController extends Controller
{
     public function index(){
		 $notes = Note::orderBy('created_at','desc')->where('status','PUBLISHED')->paginate(12);

        return view('note',['notes' => $notes]);
    }
}
