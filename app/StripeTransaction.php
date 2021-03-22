<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StripeTransaction extends Model
{
    protected $fillable = [
        "order_id",
		"gig_id",
        "stripe_id",
        "amount",
        "description",
        "receipt_url",
        "status"
    ];
}
