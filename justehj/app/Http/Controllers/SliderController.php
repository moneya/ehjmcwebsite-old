<?php

namespace App\Http\Controllers;

use DB;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = DB::select('select * from sliders');
        $sliders = Slider::paginate(5);
        return view('layouts.home.hero',['slider' => $sliders]);
    }
}
