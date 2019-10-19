<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    public $fillable=["user_id","is_email","is_mobile","notification_id"];
}
