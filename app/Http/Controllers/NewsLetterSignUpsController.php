<?php

namespace App\Http\Controllers;

use App\Models\NewsLetterSignUps;
use Illuminate\Http\Request;

class NewsLetterSignUpsController extends Controller
{
    //

    public function signUp(Request $request)
    {
        # code...

        $request->validate([

            'email' => 'required|email'
        ]);

        $signUp = NewsLetterSignUps::updateOrCreate([
            'email' => $request->email
        ],[

            'email' => $request->email,
            'name' => $request->name

        ]);

        return $signUp;
    }
}
