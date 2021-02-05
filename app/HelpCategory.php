<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Help;

class HelpCategory extends Model
{
    protected $fillable = ['title','type'];

    public function helps()
    {
    	return $this->hasMany(Help::class);
    }
}
