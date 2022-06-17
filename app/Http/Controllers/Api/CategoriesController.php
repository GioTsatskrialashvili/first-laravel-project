<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoriesController extends Controller
{
    public function index(){
        $data = [
            'categories' => Category::orderBy('id', 'DESC')->get()
        ];
        return response()->json([
            'status'=>'ok',
            'data'=>$data
        ]);
    }
    public function create(Request $request){
        $name=$request->input('name');
        try{
            Category::create([
                'name'=>$name
            ]);
            return response()->json([
                'status'=>'ok'
            ]);
        }
       
       catch(\Throwable $th){
           return response()->json([
               'status'>'ERROR'
           ]);
       }
    }
}
