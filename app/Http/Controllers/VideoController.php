<?php

namespace App\Http\Controllers;


use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
		$videos = Video::orderBy('created_at','desc')->paginate(12);
       
        return view('video',['videos' => $videos]);
    }

    public function show(){
        $videos = Video::findBySlug($slug);
        return view('video-details',['videos' => $videos]);
    }
}
