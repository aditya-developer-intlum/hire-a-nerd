@extends('layouts.app')

@section("content")

	<main class="main_body _dBody _grayBg">
        <div class="container">
        <div class="row _dRow">
                <div class="col-md-5 _dLeft">
                     <!-- Begin: Card -->
                     <div class="_dCard _p0">
                        <div class="row">
                            <div class="col-md-4">
                              <div class="_dUserPro">
                                  <img src="{{ asset("public/storage/{$user->userdetail->avatar}") }}" alt="">                                  
                              </div>
                            </div>
                            <div class="col-md-8">
                                <div class="_dUserProDesc">
                                    <h3 class="_dUHead">{{ Auth::user()->name ?? ""}}</h3>
                                        <p>{{ (Auth::user()->load('userDetail'))->userDetail->description ?? '' }}</p>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End : Card -->
                    <!-- Begin: Card -->
                    <div class="_dCard">                     
                        <div class="_dsBody">
                            <ul class="_prolist-ul _dBorText">
                                <li>
                                    <span class="_uLft">Response Rate</span> 
                                    <div class="_process-div">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
                                        </div>
                                        <span>100%</span>
                                    </div> 
                                </li>
                                <li>
                                    <span class="_uLft">Delivered on Time</span> 
                                    <div class="_process-div">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="{{ $delivered ?? '' }}" style="width:{{ $delivered ?? '' }}%"></div>
                                        </div>
                                        <span>{{ $delivered ?? '' }}%</span>
                                    </div> 
                                </li>
                                <li>
                                    <span class="_uLft">Order Completion</span> 
                                    <div class="_process-div">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="{{ $completedOrder ?? 0 }}" style="width:{{ $completedOrder ?? 0 }}%"></div>
                                        </div>
                                        <span>{{ $completedOrder ?? 0 }}%</span>
                                    </div> 
                                </li>                                
                            </ul>
                            <ul class="_prolist-ul">
                                <li>
                                    <span class="_uLft">Earned in {{ date('F') }}</span> 
                                    <span><strong class="_txtGreen">$ {{ $earning }}</strong></span> 
                                </li>
                                <li>
                                    <span class="_uLft">Response Time</span> 
                                    <span><strong class="_txtGreen">1 Hour</strong></span> 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End : Card -->
                    
                </div>
                <!-- Right page -->
                <div class="col-md-7 _dRight">
                   
                    <div class="_dCard">
                        <div class="row">
                            <div class="col-md-5">
                              <div class="">
                                  <img src="images/communicate-img.png" alt="">                                  
                              </div>
                            </div>
                            <div class="col-md-7">
                                <div class="_dUserProDesc">
                                    <h3 class="_dHeading">Communicate With Your Customers</h3>
                                    <p>Good communication is a key factor for creating successful collaborations. Reply quickly to all your customers’ inquiries, provide information and proactively update on your progress throughout the entire order process.</p>                                    
                                    <a href="#" class="_commonBtn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- Right page -->
            </div>
        </div>       
    </main>
@endsection