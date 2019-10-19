<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class OrderController extends Controller
{
	private $orders;
	private $pagination;

    public function __invoke(Request $request)
    {
    	$this->init($request)
    	->filter($request)
    	->search($request)
    	->searchDate($request)
    	->get($request)
    	->refresh($request);	
    	return view('admin.order.view',['orders'=> $this->orders]);
    }
    public function init(Request $request)
    {
    	if($request->has('search_status')){
    		Session::put('filter',$request->search_status);
    	}
    	if($request->has('search')){
    		Session::put('order_search',$request->search);
    	}
    	if($request->has('order_search_date')){
    		Session::put('order_search_date',$request->order_search_date);	
    	}
    	if($request->has('pagination')){
    		Session::put('pagination_orders',$request->pagination);
    		$this->pagination = Session::get('pagination_orders');
    	}
    	if(Session::has('pagination_orders')){
    		$this->pagination = Session::get('pagination_orders');
    	}
    	return $this;
    }
    private function filter(Request $request)
    {
    	if(!empty(Session::get('filter'))){

    		switch (Session::get('filter')) {
    			case 'pending':
    				$this->orders = Order::with('gig','user')->whereIsCompletedAndIsAccepted(false,false)->paginate($this->pagination ?? 10);	
    				Session::put('filter','pending');

    				break;
    			case 'progress':
    				$this->orders = Order::with('gig','user')->whereIsCompletedAndIsAccepted(false,true)->paginate($this->pagination ?? 10);
    				Session::put('filter','progress');

    				break;
    			case 'completed':
    				$this->orders = Order::with('gig','user')->whereIsCompletedAndIsAccepted(true,true)->paginate($this->pagination ?? 10);
    				Session::put('filter','completed');

    				break;
    			
    			default:
    				$this->orders = Order::with('gig','user')->whereIsCompletedAndIsAccepted(true,true)->paginate($this->pagination ?? 10);
    				Session::put('filter','completed');
    				break;
    		}

    	}
    	return $this;
    }
    private function search(Request $request)
    {
    	if(Session::has('order_search')){
    		$search = Session::get('order_search');

    		$this->orders = Order::with('gig','user')
    		->orWhere('id',$search)
    		->orWhere(function($q) use ($search){
    			$q->orWhereHas('gig',function($query) use ($search){
    				$query->where('gig_title','like',"{$search}%");
    			});
    			$q->orWhereHas('user',function($query) use ($search){
    				$query->where('name','like',"{$search}%");
    			});
    		})
    		->paginate($this->pagination ?? 10);

    	}
    	return $this;
    }
    public function searchDate(Request $request)
    {
    	if(Session::has('order_search_date')){
    		$date = Session::get('order_search_date');

    		$this->orders = Order::with('gig','user')
    		->whereBetween('created_at',
    			array_map(
    				function($date){
    					return date('Y-m-d',strtotime($date));
    				},explode('-',$date)
    			)
    		)
    		->paginate($this->pagination ?? 10);
    	}
    	return $this;
    }
    private function get(Request $request)
    {
    	if(!Session::has('filter') && !Session::has('order_search') && !Session::has('order_search_date')){
    		$this->orders = Order::with('gig','user')->paginate($this->pagination ?? 10);
    	}
    	return $this;
    }
    private function refresh(Request $request)
    {
    	if($request->has('refresh')){
    		Session::forget('filter');
    		Session::forget('order_search');
    		Session::forget('order_search_date');
    	}
    	return $this;
    }
}
