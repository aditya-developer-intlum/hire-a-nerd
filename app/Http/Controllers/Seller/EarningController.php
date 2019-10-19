<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Earning;

class EarningController extends Controller
{
	private $netIncome;
	private $withdrawn;
	private $usedForPurchase;
	private $pending;
	private $availWithdrawal;
	private $earning;

    public function __invoke(Request $request)
    {
    	$this->setEarning()
    	->getNetIncome()
    	->getWithdrawn()
    	->getUsedForPurchase()
    	->getPending()
    	->getAvailWithdrawal();

    	return view("seller.earning",[
    		'netIncome' => $this->netIncome,
    		'withdrawn' => $this->withdrawn,
    		'usedForPurchase' => $this->usedForPurchase,
    		'pending' => $this->pending,
    		'availWithdrawal' => $this->availWithdrawal
    	]);
    }
    private function setEarning()
    {
    	$this->earning = Earning::where('seller_id',auth()->user()->id)->get();
    	return $this;
    }
    private function getNetIncome()
    {
    	$this->netIncome = $this->earning->where('mode','credited')->sum('amount');
    	return $this;
    }
    private function getWithdrawn()
    {
    	$this->withdrawn = $this->earning->where('mode','debited')->sum('amount');
    	return $this;
    }
    private function getUsedForPurchase()
    {
    	$this->usedForPurchase = 0;
    	return $this;
    }
    private function getPending()
    {
    	$this->pending = $this->earning->where('mode','credited')->where('is_withdraw_able',false)->sum('amount');
    	return $this;
    }
    private function getAvailWithdrawal()
    {
    	$this->availWithdrawal = $this->earning->where('mode','credited')->where('is_withdraw_able',true)->sum('amount');
    	$this->availWithdrawal -= $this->withdrawn;
    	return $this;
    }
}
