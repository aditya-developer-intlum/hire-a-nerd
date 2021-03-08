<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GigScope;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class GigPrice extends Model implements Searchable 
{
    public $timestamps = false;

     public $fillable = [
    	"gig_id",
    	"basic_package_name",
    	"standard_package_name",
    	"premium_package_name",
    	"basic_description",
    	"standard_description",
    	"premium_description",
    	"basic_delivery_time",
    	"standard_delivery_time",
    	"premium_delivery_time",
    	"basic_price",
    	"standard_price",
    	"premium_price",
    	"status"
    ];

    public function gigScope()
    {
       	return $this->hasMany(GigScope::class);
    }
    
    public function delete()
    { 
        $this->gigScope()->delete();
        return parent::delete();
    }
    public function getSearchResult(): SearchResult
    {
        return new SearchResult(
            $this,
            $this->gig_title
        );
    }
}
