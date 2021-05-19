<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactFormController extends Controller
{

    public function contactForm(){
        return view('contactForm');
    }

    public function submitContactForm(Request $request){
        //just change to_name as your name & to_email as your email address in $data array.

        $data = array('name'=>$request->name, 'subject' => $request->subject,'mobileNo'=> $request->mobileNo,
            'email' => $request->email, 'messages' => $request->messages,
            'to_name' => 'Kaleem Shoukat', 'to_email' => 'codeglory20@gmail.com');

        Mail::send('mail', $data, function($message) use ($data) {
            $message->to($data['to_email'], $data['to_name'])
                    ->subject($data['subject'])
                    ->from($data['email'], $data['name'])
                    ->replyTo($data['email'], $data['name']);
        });

        if ($request){
            return Response::json('success');
        }
        else{
            return Response::json('error');
        }
    }
}
