<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class UserLanguage extends Model
{
    public $fillable=["user_id","language_id","language_level"];

    public $hidden = ['language_name'];

    public function Language()
    {
		return $this->belongsTo(Language::class);
    }
    public function getLanguageNameAttribute()
    {
    	$lang = Language::find($this->language_id);

		return $lang->name;
    }
}
