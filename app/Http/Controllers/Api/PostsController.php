<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
        $data = [
            'posts' => Post::orderBy('id', 'DESC')->get()
        ];
        return response()->json([
            'status'=>'ok',
            'data'=>$data
        ]);


    }
    public function view(Request $request){
        $post = Post::where('id', $request->input('id'))->first();
        $data = $post;
        return response()->json([
            'status'=>$post?'ok':'error',
            'data'=>$data
        ]);

    }
}
