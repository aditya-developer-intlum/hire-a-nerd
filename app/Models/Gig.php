<?php

namespace App\Models;

use App\Models\GigPrice;
use App\Models\Menu;
use App\Models\SubMenu;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Gig extends Model implements Searchable {

	use SoftDeletes;

	public $guarded = [];

	public function user() {
		return $this->belongsTo(User::class );
	}
	public function menu() {
		return $this->belongsTo(Menu::class , "category");
	}
	public function subMenu() {
		return $this->belongsTo(SubMenu::class , "sub_category");
	}
	public function gigPrice() {
		return $this->hasOne(GigPrice::class );
	}
	public function delete() {
		$this->gigPrice()->delete();
		return parent::delete();
	}
	public function orders() {
		return $this->hasMany('App\Order');
	}
	public function gigFaqs() {
		return $this->hasMany('App\GigFaq');
	}
	public function getSearchResult(): SearchResult
    {
        return new SearchResult(
            $this,
            $this->gig_title
        );
    }
}
