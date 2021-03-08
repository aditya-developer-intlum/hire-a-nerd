<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Carbon\Carbon;
use App\Rating;

class AnalyticsController extends Controller
{
	private $total_earning;
	private $complete_orders;
	private $avgSellingPrice;
	private $currentMonthEarning;
	private $earned;
	private $cancelled;
	private $completed;
	private $new_orders;
    private $all_time_rating;
    private $all_time_count;
    private $five;
    private $four;
    private $three;
    private $two;
    private $one;
    private $communication_with_seller;
    private $communication_count;
    private $service_as_described;
    private $service_count;
    private $buy_again;
    private $buy_again_count;


    public function __invoke(Request $request,$analytics = "")
    {
    	$this->getTotalEarning()
    	->getTotalCompletedOrders()
    	->getAvgSellingPrice()
    	->getCurrentMonthEarning()
        ->rating()
        ->communicationWithSeller()
        ->serviceDescribed()
        ->buyAgain();

    		switch ($analytics) {
    			case 'days':
    				$this->getLast30Days();
    			break;
    			case 'month':
    				$this->getLast3Months();
    			break;
    			case 'year':
    				$this->getYearly();
    			break;
    			default:
    				$this->getLast30Days();
    			break;
    		}

    	return view("seller.analytics",[
    		'total_earning' => $this->total_earning,
    		'complete_orders' => $this->complete_orders,
    		'avgSellingPrice' => $this->avgSellingPrice,
    		'currentMonthEarning' => $this->currentMonthEarning,
    		'earned' => $this->earned,
    		'cancelled' => $this->cancelled,
    		'completed' => $this->completed,
    		'newOrder' => $this->new_orders,
            'location' => auth()->user()->load('location'),
            'all_time_rating' => number_format($this->all_time_rating,2),
            'all_time_count' => $this->all_time_count,
            'five_star' => $this->five,
            'four_star' => $this->four,
            'three_star' => $this->three,
            'two_star' => $this->two,
            'one_star' => $this->one,
            'communication_count' => $this->communication_count,
            'communication_with_seller' => $this->communication_with_seller,
            'service_as_described' => $this->service_as_described,
            'service_count' => $this->service_count,
            'buy_again' => $this->buy_again,
            'buy_again_count' => $this->buy_again_count
    	]);
    }
    private function getTotalEarning()
    {
    	$this->total_earning = Order::where('seller_id',auth()->user()->id)
    	->where('is_completed',true)->sum('price');	

    	return $this;
    }
    private function getTotalCompletedOrders()
    {
    	$this->complete_orders = Order::where('seller_id',auth()->user()->id)
    	->where('is_completed',true)->count();	
    	return $this;
    }
    private function getAvgSellingPrice()
    {
    	$this->avgSellingPrice = Order::where('seller_id',auth()->user()->id)
    	->where('is_completed',true)->avg('price');
    	return $this;
    }
    private function getCurrentMonthEarning()
    {
    	$this->currentMonthEarning = Order::where('seller_id',auth()->user()->id)
    	->whereMonth('completed_at',date('m'))
    	->where('is_completed',true)->sum('price');	
    	return $this;
    }
    private function getLast30Days()
    {
    	$this->earned30days()
    	->cancelled30days()
    	->completed30days()
    	->newOrder30days();
    	return $this;
    }
    private function getLast3Months()
    {
    	$this->earned3months()
    	->cancelled3months()
    	->completed3months()
    	->newOrder3months();
    	return $this;
    }
    private function getYearly()
    {
    	$this->earnedYearly()
    	->cancelledYearly()
    	->completedYearly()
    	->newOrderYearly();
    	return $this;
    }

    private function earned30days()
    {
    		$start = $month = strtotime(date('Y-m-d h:i:s',strtotime('-30 days')));
			$end = strtotime(date('Y-m-d h:i:s'));
			while($month < $end)
			{
			   $data[date('Y-m-d', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereDate('completed_at',date('Y-m-d', $month))
    			->where('is_completed',true)->sum('price');
			     
			     $month = strtotime("+1 day", $month);
			}
    		$this->earned = $data;
    	return $this;
    }
    private function cancelled30days()
    {
    		$start = $month = strtotime(date('Y-m-d h:i:s',strtotime('-30 days')));
			$end = strtotime(date('Y-m-d h:i:s'));
			while($month < $end)
			{
			   $data[date('Y-m-d', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereDate('rejected_at',date('Y-m-d', $month))
    			->where('is_cancelled',true)->count();
			     
			     $month = strtotime("+1 day", $month);
			}
    		$this->cancelled = $data;
		return $this;    	
    }
    private function completed30days()
    {
    	$start = $month = strtotime(date('Y-m-d h:i:s',strtotime('-30 days')));
			$end = strtotime(date('Y-m-d h:i:s'));
			while($month < $end)
			{
			   $data[date('Y-m-d', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereDate('completed_at',date('Y-m-d', $month))
    			->where('is_completed',true)->count();
			     
			     $month = strtotime("+1 day", $month);
			}
    		$this->completed = $data;
    	return $this;
    }
    private function newOrder30days()
    {
    	$start = $month = strtotime(date('Y-m-d h:i:s',strtotime('-30 days')));
			$end = strtotime(date('Y-m-d h:i:s'));
			while($month < $end)
			{
			   $data[date('Y-m-d', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereDate('created_at',date('Y-m-d', $month))
    			->where('is_accepted',true)->count();
			     
			     $month = strtotime("+1 day", $month);
			}
    		$this->new_orders = $data;

    	return $this;
    }
    private function earned3months()
    {
    		$start = $month = strtotime(date('Y-m-d h:i:s',strtotime('-3 month')));
			$end = strtotime(date('Y-m-d h:i:s'));
			while($month < $end)
			{
			   $data[date('Y-m', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereMonth('completed_at',date('m', $month))
    			->where('is_completed',true)->sum('price');
			     
			     $month = strtotime("+1 month", $month);
			}
    		$this->earned = $data;
    	return $this;
    }
    private function cancelled3months()
    {
    		$start = $month = strtotime(date('Y-m-d h:i:s',strtotime('-3 month')));
			$end = strtotime(date('Y-m-d h:i:s'));
			while($month < $end)
			{
			   $data[date('Y-m', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereMonth('rejected_at',date('m', $month))
    			->where('is_cancelled',true)->count();
			     
			     $month = strtotime("+1 month", $month);
			}
    		$this->cancelled = $data;
		return $this;    	
    }
    private function completed3months()
    {
    	$start = $month = strtotime(date('Y-m-d h:i:s',strtotime('-3 month')));
			$end = strtotime(date('Y-m-d h:i:s'));
			while($month < $end)
			{
			   $data[date('Y-m', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereMonth('completed_at',date('m', $month))
    			->where('is_completed',true)->count();
			     
			     $month = strtotime("+1 month", $month);
			}
    		$this->completed = $data;
    	return $this;
    }
    private function newOrder3months()
    {
    	$start = $month = strtotime(date('Y-m-d h:i:s',strtotime('-3 month')));
			$end = strtotime(date('Y-m-d h:i:s'));
			while($month < $end)
			{
			   $data[date('Y-m', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereMonth('created_at',date('m', $month))
    			->where('is_accepted',true)->count();
			     
			     $month = strtotime("+1 month", $month);
			}
    		$this->new_orders = $data;

    	return $this;
    }

    private function earnedYearly()
    {
    	$month = strtotime(auth()->user()->created_at);
		$end = strtotime(date('Y-m-d h:i:s'));
        $data = [];
			while($month < $end)
			{
			   $data[date('Y', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereYear('completed_at',date('Y', $month))
    			->where('is_completed',true)->sum('price');
			     
			    $month = strtotime("+1 year", $month);
			}
    		$this->earned = $data;
    	return $this;
    }
    private function cancelledYearly()
    {
    		$month = strtotime(auth()->user()->created_at);
			$end = strtotime(date('Y-m-d h:i:s'));
            $data = [];
			while($month < $end)
			{
			   $data[date('Y', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereYear('rejected_at',date('Y', $month))
    			->where('is_cancelled',true)->count();
			     
			     $month = strtotime("+1 year", $month);
			}
    		$this->cancelled = $data;
		return $this;    	
    }
    private function completedYearly()
    {
    	$month = strtotime(auth()->user()->created_at);
			$end = strtotime(date('Y-m-d h:i:s'));
            $data = [];
			while($month < $end)
			{
			   $data[date('Y', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereYear('completed_at',date('Y', $month))
    			->where('is_completed',true)->count();
			     
			     $month = strtotime("+1 year", $month);
			}
    		$this->completed = $data;
    	return $this;
    }
    private function newOrderYearly()
    {
    	$month = strtotime(auth()->user()->created_at);
			$end = strtotime(date('Y-m-d h:i:s'));
            $data = [];
			while($month < $end)
			{
			   $data[date('Y', $month)] = Order::where('seller_id',auth()->user()->id)
    	 		->whereYear('created_at',date('Y', $month))
    			->where('is_accepted',true)->count();
			     
			     $month = strtotime("+1 year", $month);
			}
    		$this->new_orders = $data;

    	return $this;
    }
    private function rating()
    {
        $this->five = Rating::where('seller_id',auth()->user()->id)->whereStars(5)->count();
        $this->four = Rating::where('seller_id',auth()->user()->id)->whereStars(4)->count();
        $this->three = Rating::where('seller_id',auth()->user()->id)->whereStars(3)->count();
        $this->two = Rating::where('seller_id',auth()->user()->id)->whereStars(2)->count();
        $this->one = Rating::where('seller_id',auth()->user()->id)->whereStars(1)->count();

        $this->all_time_count =  ( $this->one + $this->two + $this->three + $this->four + $this->five );
        $predecessor = ((1 * $this->one) + (2 * $this->two) + (3 * $this->three) + (4 * $this->four) + (5 * $this->five));
        $successor = ( $this->one + $this->two + $this->three + $this->four + $this->five );

        if($predecessor && $successor){

            $this->all_time_rating =  $predecessor/$successor;
        }else{
            $this->all_time_rating = 0;
        }
         
         return $this;
    }
    private function communicationWithSeller()
    {
        $five = Rating::where('seller_id',auth()->user()->id)
        ->whereStars(5)->whereType('Communication with seller')->count();

        $four = Rating::where('seller_id',auth()->user()->id)->whereStars(4)
        ->whereType('Communication with seller')->count();
        $three = Rating::where('seller_id',auth()->user()->id)
        ->whereType('Communication with seller')->whereStars(3)->count();

        $two = Rating::where('seller_id',auth()->user()->id)
        ->whereType('Communication with seller')->whereStars(2)->count();

        $one = Rating::where('seller_id',auth()->user()->id)
        ->whereType('Communication with seller')->whereStars(1)->count();

        $this->communication_count =  ( $one + $two + $three + $four + $five );

         $predecessor = ((1 * $one) + (2 * $two) + (3 * $three) + (4 * $four) + (5 * $five));
         $successor = ( $one + $two + $three + $four + $five );

            if($predecessor && $successor){

                $this->communication_with_seller =  $predecessor/$successor;
            }else{
                $this->communication_with_seller =  0;
            }
         return $this;
    }
    private function serviceDescribed()
    {
        $five = Rating::where('seller_id',auth()->user()->id)
        ->whereStars(5)->whereType('Service as Described')->count();

        $four = Rating::where('seller_id',auth()->user()->id)->whereStars(4)
        ->whereType('Service as Described')->count();
        $three = Rating::where('seller_id',auth()->user()->id)
        ->whereType('Service as Described')->whereStars(3)->count();

        $two = Rating::where('seller_id',auth()->user()->id)
        ->whereType('Service as Described')->whereStars(2)->count();

        $one = Rating::where('seller_id',auth()->user()->id)
        ->whereType('Service as Described')->whereStars(1)->count();

        $this->service_count =  ( $one + $two + $three + $four + $five );

        $predecessor = ((1 * $one) + (2 * $two) + (3 * $three) + (4 * $four) + (5 * $five));
        $successor = ( $one + $two + $three + $four + $five );

            if($predecessor && $successor){

                 $this->service_as_described =  $predecessor/$successor;
            }else{
                 $this->service_as_described =  0;
            }
        
        return $this;
    }
    private function buyAgain()
    {
        $five = Rating::where('seller_id',auth()->user()->id)
        ->whereStars(5)->whereType('Buy Again or Recommend')->count();

        $four = Rating::where('seller_id',auth()->user()->id)->whereStars(4)
        ->whereType('Buy Again or Recommend')->count();
        $three = Rating::where('seller_id',auth()->user()->id)
        ->whereType('Buy Again or Recommend')->whereStars(3)->count();

        $two = Rating::where('seller_id',auth()->user()->id)
        ->whereType('Buy Again or Recommend')->whereStars(2)->count();

        $one = Rating::where('seller_id',auth()->user()->id)
        ->whereType('Buy Again or Recommend')->whereStars(1)->count();

        $this->buy_again_count =  ( $one + $two + $three + $four + $five );

        $predecessor = ((1 * $one) + (2 * $two) + (3 * $three) + (4 * $four) + (5 * $five));
        $successor = ( $one + $two + $three + $four + $five );

            if($predecessor && $successor){

                 $this->buy_again =  $predecessor/$successor;
            }else{
                 $this->buy_again =  0;
            }
        return $this;
    }
}
