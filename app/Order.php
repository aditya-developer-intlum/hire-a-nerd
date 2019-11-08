<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
	public function transaction() {
		return $this->hasOne('App\Transaction');
	}
	public function user() {
		return $this->belongsTo('App\User', 'buyer_id', 'id');
	}
	public function gig() {
		return $this->belongsTo('App\Models\Gig');
	}
	public function seller() {
		return $this->belongsTo('App\User', 'seller_id');
	}
}
