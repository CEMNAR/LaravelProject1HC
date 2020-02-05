<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Validation\ValidationException;
use ReCaptcha\ReCaptcha;

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
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
            ]);
        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        Mail::to('narcem67380@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}
