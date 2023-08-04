<?php

namespace App\Http\Controllers;

use App\Admissionlist;

use Illuminate\Http\Request;

class AdmissionlistsController extends Controller
{
   

    public function index(){
		$admissionlists  = Admissionlist::orderBy('created_at','desc')->paginate(12);
        return view('admissionlists',['admissionlists' => $admissionlists]);
    }

    public function show(){
        $admissionlists = Admissionlist::findBySlug($slug);
        return view('admissionlists-details',['admissionlists' => $admissionlists]);
    }
}
