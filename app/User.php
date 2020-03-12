<?php

namespace App;

use App\Models\UserBillingAddress;
use App\Models\UserCertification;
use App\Models\UserDetail;
use App\Models\UserEducation;
use App\Models\UserLanguage;
use App\Models\UserSkill;
use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class User extends Authenticatable implements Searchable{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'email',
		'password',
		'term_and_condition',
		'online_status',
		"deative_reasion",
		'status',
		'mobile_number',
		'token',
		'f_name',
		'l_name',
		'type',
		'mode',
		'address_latitude',
        'address_longitude',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function userDetail() {
		return $this->hasOne(UserDetail::class )->withDefault([
				'avatar' => 'uploads/user/avatar/banner-img-1.jpg',
			]);
	}

	public function userLang() {
		return $this->hasMany(UserLanguage::class );
	}

	public function userCertification() {
		return $this->hasMany(UserCertification::class );
	}

	public function userEducation() {
		return $this->hasMany(UserEducation::class );
	}
	public function skill() {
		return $this->hasMany(UserSkill::class );
	}
	public function userBillingAaddresses() {
		return $this->hasOne(UserBillingAddress::class );
	}
	public function getMemberIdAttribute() {
		$member_id = '';

		if (empty($this->attributes['id'])) {
			return '';
		}

		return sprintf('HIRE%05d', $this->attributes['id']+12500);
	}
	public function setMemberIdAttribute($value) {
		$member_id = '';

		return sprintf('HIRE%05d', $value+12500);
	}
	public function userPermission() {
		return $this->hasMany('App\Models\UserPermission');
	}
	public function permissions($condition = "") {
		if (empty($condition)) {

			return $this->hasManyThrough('App\Models\Permission',
				'App\Models\UserPermission',
				'user_id',
				'id', 'id',
				'permission_id'
			);
		}

		return $this->hasManyThrough('App\Models\Permission',
			'App\Models\UserPermission',
			'user_id',
			'id', 'id',
			'permission_id'
		)->whereSlug($condition);

	}
	public function getIsUserAttribute() {
		return $this->attributes['type'] === 0;
	}
	public function getIsSuperAdminAttribute() {
		return $this->attributes['type'] === 1;
	}
	public function getIsSubAdminAttribute() {
		return $this->attributes['type'] === 2;
	}
	public function linkedAccount() {
		return $this->hasManyThrough('App\Models\LinkedAccount', 'App\Models\UserSocialMedia', 'user_id', 'id', 'id', 'linked_account_id');
	}
	public function gig() {
		return $this->hasMany('App\Models\Gig');
	}
	public function sellerTransaction() {
		return $this->hasMany('App\Transaction', 'seller_id');
	}
	public function buyerTransaction() {
		return $this->hasMany('App\Transaction', 'buyer_id');
	}
	public function wallet() {
		return $this->hasOne('App\Wallet');
	}
	public function sellerOrders() {
		return $this->hasMany('App\Order', 'seller_id');
	}
	public function buyerOrders() {
		return $this->hasMany('App\Order', 'buyer_id');
	}
	public function unreadMessage()
	{
		return $this->hasMany('App\Chat','sender_id')->where('receiver_id',Auth::id())->where('is_seen',false);
	}
	public function location()
	{
		return $this->hasOne('App\UserLocation');
	}
	public function getSearchResult(): SearchResult
    {
        return new SearchResult(
            $this,
            $this->name,
            "usertable"
        );
    }
}
