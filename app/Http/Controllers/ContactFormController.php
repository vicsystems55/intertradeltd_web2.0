<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\IpUtils;

class ContactFormController extends Controller
{
    //

    public function post_message(Request $request) {

        // return $request->all();

        $recaptcha_response = $request->input('g-recaptcha-response');

        if (is_null($recaptcha_response)) {
            return redirect()->back()->with('msg', 'Please Complete the Recaptcha to proceed');
        }

        $url = "https://www.google.com/recaptcha/api/siteverify";

        $body = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha_response,
            'remoteip' => IpUtils::anonymize($request->ip()) //anonymize the ip to be GDPR compliant. Otherwise just pass the default ip address
        ];

        $response = Http::asForm()->post($url, $body);

        $result = json_decode($response);

        if ($response->successful() && $result->success == true) {



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

    }else{
        return redirect()->back()->with('msg', 'Please Complete the Recaptcha Again to proceed');
    }

    }
}
