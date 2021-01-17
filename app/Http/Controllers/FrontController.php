<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Inquiry;
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



    public function inquirySubmit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);

        $inquery =new Inquiry();
        $inquery->name =$request->name;
        $inquery->email =$request->email;
        $inquery->message =$request->message;
        $inquery->phone =$request->phone;
        $inquery->save();

        return back()->withSuccess('Inquiry submnitted successfully!');

    }

    public function about_us(){
        return view('about_us');
    }

    public function appointment(){
        return view('appointment');
    }

    public function appointmentSubmit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'age'=>'required',
            'date'=>'required',
        ]);

        $inquery =new Appointment();
        $inquery->name =$request->name;
        $inquery->email =$request->email;
        $inquery->message =$request->message;
        $inquery->phone =$request->phone;
        $inquery->age =$request->age;
        $inquery->date =$request->date;
        $inquery->save();


        return back()->withSuccess('Your appointment request has been sent successfully. Thank you!');
    }


}
