<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliateLinks extends Model
{
    protected $fillable = [
    	"affiliate_id",
    	"service_id",
    	"generated_link",
    	"total_clicks",
    	"unique_clicks",
    	"total_purchase"
    ];
}
