<?php

namespace App\Http\Controllers;


use App\Notice;
use Illuminate\Http\Request;

class NoticesController extends Controller
{
     public function index(){
        $notices = Notice::paginate(12);
        return view('notice',['notices' => $notices]);
    }

    public function show(){
        $notices = Notice::findBySlug($slug);
        return view('notices-details',['notices' => $notices]);
    }
}
