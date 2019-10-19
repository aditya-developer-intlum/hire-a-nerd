<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table="user_detail";

    public $fillable=["user_id","sort_story","country","description","languages_id","language_level","linked_account_id","skills_id","skills_name","skill_level","education_country_id","university_id","edu_title","edu_major","year_of_graduation","certification","certified_by","certification_year","avatar","notification_email","notification_mobile"];
}
