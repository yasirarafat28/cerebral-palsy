<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Gallery;
use App\Inquiry;
use App\Media;
use App\SuccessfulTreatment;
use App\Testimonials;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){

        $galleries = Gallery::where('status','active')->get();
        return view('index',compact('galleries'));
    }

    public function testimonials(){

        $success_records = SuccessfulTreatment::where('status','active')->get();
        $testimonials = Testimonials::where('status','active')->get();

        return view('testimonials',compact('success_records','testimonials'));
    }

    public function media(){
        $records = Media::where('status','active')->get();
        return view('media',compact('records'));
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
