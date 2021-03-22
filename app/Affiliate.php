<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    protected $fillable = [
    	"first_name",
    	"last_name",
    	"email",
    	"password",
    	"phone_number",
    	"skype_id",
    	"country",
    	"company_name",
    	"website",
    	"additional_info",
    	"confirmed"
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function getFullNameAttribute()
    {
         return "{$this->first_name} {$this->last_name}";
    }


}
