<?php

namespace App\Http\Controllers;


use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::paginate(12);
        return view('teacher',['teachers' => $teachers]);
    }

    public function show(){
        $teachers = Teacher::findBySlug($slug);
        return view('teacher-details',['teachers' => $teachers]);
    }
}
