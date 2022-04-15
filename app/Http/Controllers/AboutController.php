<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
       
       $data=[
           'title'=>'About page',
           'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam voluptates, dolor cupiditate ad
           reiciendis ab, un
          de eos hic, odit illum illo modi tenetur nostrum. Consectetur deserunt aut nobis nisi exceptu
          ri!Loremlorem Lorem ipsum dolor sit, amet consectetur ad
          ipisicing elit. Impedit, necessitatibus beatae. Vero sunt aliquid libero consectetur op
          tio sequi id tempora non quaerat, explicabo odio fugit mollitia nemo ipsum, ab repellendus?'
       ];
        return view('frontend.about')->with('data',$data);
    }
    public function view($number){
        $data=[
            'title'=> 'this is a page with number '. $number,
            'text'=>'test text'
        ];
        return view('frontend.about-inner')->with('data',$data);
    }
}
