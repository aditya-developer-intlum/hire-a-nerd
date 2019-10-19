<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\University;

class UserEducation extends Model
{
   public $fillable=["user_id","country_id","university_id","title","branch_id","year"];

   public function country()
   {
   	  return $this->belongsTo(Country::class);
   }
   public function university()
   {
   	  return $this->belongsTo(University::class);
   }
   
}
