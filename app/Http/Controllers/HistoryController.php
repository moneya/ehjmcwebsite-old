<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){
        $historys = History::paginate(12);
        return view('historys',['historys' => $historys]);
    }

    public function show(){
        $historys = History::findBySlug($slug);
        return view('historys-details',['historys' => $historys]);
    }
}
