<?php

namespace App\Http\Controllers;

use App\Mail\MyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function SendMail(Request $request){
       
        try{
            $details = [
                'name' =>$request->name,
                'email'=>$request->email,
                'message'=>$request->message
            ];
       
            Mail::to("silasudofia469@gmail.com")->send(new MyMail($details));
            return back()->with('Email_Sent', 'Email sent');
            
        }catch(\Swift_TransportException $e){
            return back()->with('Error', 'Failed to establish connection, please check your network settings: Email was not sent');
        }
    }
}
