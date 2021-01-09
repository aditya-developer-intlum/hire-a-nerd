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
use Kyslik\ColumnSortable\Sortable;

class Gig extends Model implements Searchable {

	use SoftDeletes,Sortable;

	public $guarded = [];
	public $sortable = [
		'category',
		'sub_category',
		'gig_title',
		'user_id',
		'gigprice.standard_price',
		'gigprice.premium_price',
		'gigPrice.basic_price',
		'created_at',
		'is_status'
	];

	public function user() {
		return $this->belongsTo(User::class,'user_id' );
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
