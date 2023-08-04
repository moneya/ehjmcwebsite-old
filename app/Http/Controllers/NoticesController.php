<?php

namespace App\Http\Controllers;


use App\Notice;
use Illuminate\Http\Request;

class NoticesController extends Controller
{
     public function index(){
		 $notices = Notice::orderBy('created_at','desc')->paginate(12);

        return view('notice',['notices' => $notices]);
    }

    public function show(){
        $notices = Notice::findBySlug($slug);
        return view('notices-details',['notices' => $notices]);
    }
}
