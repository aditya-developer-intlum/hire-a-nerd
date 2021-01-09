<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PostRequest extends Model
{
	use Sortable;
	public $sortable = [
		'category_id',
		'sub_category_id',
		'description',
		'deliver_time',
		'budget',
		'status'
	];

	public function scopeUser($query)
	{
		return $query->where('user_id',auth()->user()->id);
	}
	public function category()
	{
		return $this->belongsTo("App\Models\Menu","category_id");
	}
	public function subCategory()
	{
		return $this->belongsTo("App\Models\SubMenu","sub_category_id");
	}
}
