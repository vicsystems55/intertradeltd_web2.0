<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\EmailCampaign;
use App\Models\NewsLetterSignUps;
use App\Models\EmailCampaignSchedule;

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

        $campaigns = EmailCampaign::orderBy('order', 'asc')->get();
        // set interval days
        $interval = 2;
        // set starting point
        $set = 0;
        // loop over each campaign, creating schedule for the new member
        foreach ($campaigns as $campaign) {
            # code...
            EmailCampaignSchedule::updateOrCreate([
                'email' => $request->email,
                'name' => $request->name,
                'email_campaign_id' => $campaign->id,
            ],[
                'name' => $request->name,
                'email' => $request->email,
                'email_campaign_id' => $campaign->id,
                'date' => Carbon::now()->addDays($set),
            ]);

            //update the next date
            $set += $interval;
        }

        return $signUp;
    }
}
