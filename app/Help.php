<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HelpCategory;

class Help extends Model
{
    protected $fillable = ['help_category_id','title','description','type'];

    public function helpCategory()
    {
    	return $this->belongsTo(HelpCategory::class);
    }
}
