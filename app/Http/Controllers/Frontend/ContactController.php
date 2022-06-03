<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Mail\ContactMail;
class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }
    public function send(Request $request){
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
        ];
        dd($data);
        Mail::to('info@laravel-app.ge')->send(new ContactMail($data));
    }
    
};
