<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Post;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post= Post::orderBy('id','DESC')->paginate(12);
        $data=[
            'posts'=>$post
        ];
        return view('frontend.home',['data'=>$data]);
    }
}
