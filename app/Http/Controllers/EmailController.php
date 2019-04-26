<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function sendEmail(Request $request)
    {   
        $request->validate([
            'email'=>'required',
            'subject'=>'required',
            'pesan'=>'required'
        ]);

        $data = [
        'email'=>$request->email,
        'subject'=>$request->email,
        'bodyMessage'=>$request->email,
        ];

        Mail::send('admin.email.email',$data,function($message) use($data){
            $message->from('fadlannaufal6969@gmail.com','Fadlan');
            $message->to($data['email']);
            $message->subject($data['subject']);
        });

        return redirect()->back();
    }
}
