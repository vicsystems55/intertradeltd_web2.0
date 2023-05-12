<?php

namespace App\Http\Controllers;

use App\Mail\NewsLetterMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\EmailCampaign;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailCampaignSchedule;

class EmailCampaignController extends Controller
{
    //
    public function fireCampaign()
    {

        // get todays campaigns

        $todaysCampaign = EmailCampaignSchedule::
        with('emailCampaign')
        ->whereDate('date', Carbon::today())->get();

        // loop over the campaigsn
        foreach ($todaysCampaign as $campaign) {
            # code...

            $datax =[
                'name' => $campaign->name,
                'emailBody' => $campaign->emailCampaign->emailBody,
                'title' => $campaign->emailCampaign->title,
                'subject' => $campaign->emailCampaign->subject,
            ];

        // send email to each member

        Mail::to($campaign->email)->send(new NewsLetterMail($datax));
        // update the status from unsent to sent
        $campaign->update([
            'status' => 'sent'
        ]);
        }

        return $todaysCampaign;
    }


}
