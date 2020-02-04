<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Validation\ValidationException;

class SendEmailController extends Controller
{
    function index()
    {
        return view('send_email');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        Mail::to('narcem67380@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}


//    function send(Request $request)
//    {
//
//        try {
//            $request->validate([
//                'name' => 'required',
//                'email' => 'required',
//                'message' => 'required'
//            ]);
//        } catch (ValidationException $e) {
//            echo $e->getMessage();
//        }
//        $data = array(
//            'name'=>$request->name,
//            'message'=>$request->message
//        );
//
//        Mail::send('send_email',
//            array(
//                'name' => $request->get('name'),
//                'email' => $request->get('email'),
//                'message' => $request->get('message')
//            ), function($message)
//            {
//                $message->from('yavuz@kutuk.fr');
//                $message->to('narcem67380t@gmail.com', 'Admin')->subject('Laravel Project 1 TEST Mail send');
//            });
//
//        return back()->with('success');
//    }
//}
