<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    //

    public function post_message(Request $request) {

        // return $request->all();



        $request->validate([
            'email' => 'required|email',
            'name' => 'required'
        ]);

        $data =[
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone,

        ];

        Mail::to('victor@intertradeltd.biz')->send(new ContactFormMail($data));

        // Mail::to('enquiry@intertradeltd.biz')->send(new ContactFormMail($data));


        return back()->with('msg', 'Message sent successfully.');

    }
}
