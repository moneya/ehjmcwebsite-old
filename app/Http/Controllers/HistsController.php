<?php

namespace App\Http\Controllers;


use App\Hist;
use Illuminate\Http\Request;

class HistsController extends Controller
{
    public function index(){
        $hists = Hist::paginate(12);
        return view('hist',['hists' => $hists]);
    }

    public function show(){
        $hists = Hist::findBySlug($slug);
        return view('hist-details',['hists' => $hists]);
    }
}
