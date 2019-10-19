<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBillingAddress extends Model
{
    public $fillable=["company_name","user_id","country_id","full_name","country","address","city_id","zip_code","is_invoice"];
}
