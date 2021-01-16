<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('index');
    }

    public function testimonials(){
        return view('testimonials');
    }

    public function media(){
        return view('media');
    }

    public function about_cp(){
        return view('about_cp');
    }

    public function contact_us(){
        return view('contact_us');
    }

    public function about_us(){
        return view('about_us');
    }

    public function appointment(){
        return view('appointment');
    }

    public function appointmentSubmit(Request $request){

    }


}
