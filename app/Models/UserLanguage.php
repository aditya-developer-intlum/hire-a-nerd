<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class UserLanguage extends Model
{
    public $fillable=["user_id","language_id","language_level"];

    public function Language()
    {
		return $this->belongsTo(Language::class);
    }
}
