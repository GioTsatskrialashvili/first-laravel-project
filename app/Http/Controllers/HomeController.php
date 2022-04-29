<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class HomeController extends Controller
{
    public function index(){
        
      
        $slide=Slide::all();
        $data=[
            'slides'=>$slide
        ];
       
        return view('frontend.home')->with('data',$data);

    }
}
