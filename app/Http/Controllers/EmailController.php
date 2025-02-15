<?php

namespace App\Http\Controllers;

use App\Mail\welcomemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(){
       $toEmail = "abdurrahaman444.spy@gmail.com";
       $message = "Hellow , Welcome to our website";
       $subject = "Wecome to Our website";


    //    cc and you can also use bcc with cc
    // singel user send
      $request= Mail::to($toEmail)->send(new welcomemail($message,$subject));
      dd($request);
    }
    public function contactForm(){
        return view('mail.contact-form');
    }
    public function sendContactEmail(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required|min:1|max:100 ',
            'message'=>'required|min:5|max:255 ',
            'attachment'=>'required|mimes:pdf,doc,docx,xls,txt,xlsx|max:2028',
        ]);
        $fileName=time(). "." . $request->file('attachment')->extension();
        $request->file('attachment')->move('uploads',$fileName);
        $adminEmail= "mstasiakhatun444.spy@gmail.com";
        $response= Mail::to($adminEmail)->send(new welcomemail($request->all(),$fileName));

        if( $response){
            return back()->with('success','Thanks you for contacting us');
        }else{
            return back()->with('error','unable to submit, please try again');

        }
    }
}
