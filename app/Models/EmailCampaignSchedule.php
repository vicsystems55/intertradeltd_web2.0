<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailCampaignSchedule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function emailCampaign()
    {

        return $this->belongsTo(EmailCampaign::class, 'email_campaign_id', 'id');
    }

}
