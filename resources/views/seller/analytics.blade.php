@extends('layouts.app')
@section("content")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css"  />
<main class="main_body _dBody _grayBg">
        <div class="container">
            <div class="row">              
                <div class="col-md-12">
                    <!-- Begin: Card  -->
                    <div class="_dCard _p0">
                        <div class="_dCardHeader _borderBtm _pGap">
                            <span class="_dHeading">Analytics</span>                                    
                        </div>
                        <div class="_dsBody _pGap">
                            <div class="row _numBox__row">
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Total Earnings</span>
                                            <p class="_numTxt _txtBlue">${{ $total_earning ?? 0 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col End   -->
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Total Completed Orders</span>
                                            <p class="_numTxt _txtGreen">{{ $complete_orders ?? 0 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col End   -->
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Avg. Selling Price</span>
                                            <p class="_numTxt _txtOrange">${{ number_format($avgSellingPrice,2) ?? 0 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col End   -->
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Earned In {{ date('F') }}</span>
                                            <p class="_numTxt _txtRed">${{ $currentMonthEarning ?? 0 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col End   -->
                            </div>
                        </div>
                    </div>
                    <!-- End: Card  -->
                    <!-- Begin: Card  -->
                    <div class="_dCard _p0">
                        <div class="_dCardHeader _borderBtm _pGap">
                            <span class="_dHeading">Overview</span>  
                            <div>
                              
                                <select name="" id="filter" class="form-control2">
                                    <option value="days" {{ request()->analytics == 'days'?'selected':'' }}>Last 30 Days</option>
                                    <option value="month" {{ request()->analytics == 'month'?'selected':'' }}>Last 3 months</option>
                                    <option value="year" {{ request()->analytics == 'year'?'selected':'' }}>Yearly</option>
                                </select>
                            </div>                                  
                        </div>
                        <div class="_dsBody _pGap">
                           
                                <div class="form-group">
                                    <div class="_radioList">
                                        <label class="_radio">
                                            <input type="radio" name="example_1" value="1" onclick="earned()" checked=""> Earned 
                                            <span></span>
                                        </label>
                                        <label class="_radio">
                                            <input type="radio" name="example_1" value="2" onclick="cancelled()" > Cancelled
                                            <span></span>
                                        </label>    
                                        <label class="_radio">
                                            <input type="radio" name="example_1" value="3" onclick="completed()"> Completed     
                                            <span></span>
                                        </label> 
                                        <label class="_radio">
                                            <input type="radio" name="example_1" value="4" onclick="newOrder()"> New Orders
                                            <span></span>
                                        </label>                                    
                                    </div>											
                                </div>
                         
                            <div class="text-center _imgDescBox">
                                    <canvas id="earned" style="display: none;"></canvas>       
                                    <canvas id="cancelled" style="display: none;"></canvas>       
                                    <canvas id="completed" style="display: none;"></canvas>       
                                    <canvas id="newOrder" style="display: none;"></canvas>       
                                {{-- <figure>
                                    <img src="images/feature-img.png" alt="">
                                </figure>
                                <p class="_largeText">There are no orders to display</p>
                                <p>There is no data available within the selected timeframe.</p>   --}}                              
                            </div>
                        </div>                        
                    </div>
                    <!-- End: Card  -->
                    <div class="_dCard">  
                        <div class="_dCardHeader _dHeaderLeft">
                            <span class="_dHeading">Your Seller Level <a href="#">Learn More</a></span> 
                            <p>Evaluation period ends on Jun 15, 2019, 00:00 GMT</p>   
                        </div>                      
                        <div class="_dsBody">
                            <div class="_levelCont">
                                <div class="_levelDiv">
                                    <div class="_levelIcon"><img src="images/user-img-2.png" alt=""></div>
                                </div>
                                <div class="_levelDiv">
                                    <div class="_levelIcon _bgOrange">1 <br>Level</div>
                                </div>
                                <div class="_levelDiv">
                                    <div class="_levelIcon _bgBlue">2 <br>Level</div>
                                </div>
                                <div class="_levelDiv">
                                    <div class="_levelIcon _bgGrren">3 <br>Level</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_dCard">
                        <section class="_commonPadding">
            <div class="container">
                <div class="_headingDiv">
                    <h2 class="_headingTxt">Achieve these goals to become a Level One Seller </h2>                
                </div> 
                <div class="row _seller-list-row">
                    <!-- Col : Begin  -->
                    <div class="col-md-6 _seller-list-col">
                        <div class="_seller-list">
                            <div class="_seller-list-left active">
                                <p class="_sel-title">Response Rate</p>
                                <p>Respond to 90% of the inquiries you received in the last 60 days</p>
                            </div>
                            <div class="_seller-list-right">
                                <div class="_progress-cont">
                                    <span>0</span>
                                    <div class="progress">                                
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100" style="width:100%">                                        
                                        </div>
                                    </div>
                                    <span>100%</span>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <!-- Col : End  -->
                    <!-- Col : Begin  -->
                    <div class="col-md-6 _seller-list-col">
                        <div class="_seller-list">
                            <div class="_seller-list-left">
                                <p class="_sel-title">Order Completion Rate</p>
                                <p>Complete 90% of your orders, over the course of 60 days</p>
                            </div>
                            <div class="_seller-list-right">
                                <div class="_progress-cont">
                                    <span>0</span>
                                    <div class="progress">                                
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100" style="width:100%">                                        
                                        </div>
                                    </div>
                                    <span>100%</span>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <!-- Col : End  -->
                    <!-- Col : Begin  -->
                    <div class="col-md-6 _seller-list-col">
                        <div class="_seller-list">
                            <div class="_seller-list-left active">
                                <p class="_sel-title">On-time Delivery</p>
                                <p>Deliver 90% of your orders on time, over the course of 60 days</p>
                            </div>
                            <div class="_seller-list-right">
                                <div class="_progress-cont">
                                    <span>0</span>
                                    <div class="progress">                                
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100" style="width:100%">                                        
                                        </div>
                                    </div>
                                    <span>100%</span>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <!-- Col : End  -->
                    <!-- Col : Begin  -->
                    <div class="col-md-6 _seller-list-col">
                        <div class="_seller-list">
                            <div class="_seller-list-left">
                                <p class="_sel-title">Rating</p>
                                <p>Maintain a 4.7 star rating, over the course of 60 days</p>
                            </div>
                            <div class="_seller-list-right">
                                <div class="_progress-cont">
                                    <span>0</span>
                                    <div class="progress">                                
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100" style="width:100%">                                        
                                        </div>
                                    </div>
                                    <span>100%</span>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <!-- Col : End  -->
                    <!-- Col : Begin  -->
                    <div class="col-md-6 _seller-list-col">
                        <div class="_seller-list">
                            <div class="_seller-list-left">
                                <p class="_sel-title">Selling Seniority</p>
                                <p>Complete at least 60 day as a seller</p>
                            </div>
                            <div class="_seller-list-right">
                                <div class="_progress-cont">
                                    <span>0</span>
                                    <div class="progress">                                
                                        <div class="progress-bar" role="progressbar" aria-valuenow="5"
                                        aria-valuemin="0" aria-valuemax="100" style="width:5%">                                        
                                        </div>
                                    </div>
                                    <span>5%</span>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <!-- Col : End  -->
                    <!-- Col : Begin  -->
                    <div class="col-md-6 _seller-list-col">
                        <div class="_seller-list">
                            <div class="_seller-list-left active">
                                <p class="_sel-title">Orders</p>
                                <p>Receive and complete at least 10 orders (all time)</p>
                            </div>
                            <div class="_seller-list-right">
                                <div class="_progress-cont">
                                    <span>0</span>
                                    <div class="progress">                                
                                        <div class="progress-bar" role="progressbar" aria-valuenow="43"
                                        aria-valuemin="0" aria-valuemax="100" style="width:43%">                                        
                                        </div>
                                    </div>
                                    <span>100%</span>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 _seller-list-col">
                        <div class="_seller-list">
                            <div class="_seller-list-left active">
                                <p class="_sel-title">Earnings</p>
                                <p>Earn at least $400 from completed orders (all time)</p>
                            </div>
                            <div class="_seller-list-right">
                                <div class="_progress-cont">
                                    <span>0</span>
                                    <div class="progress">                                
                                        <div class="progress-bar" role="progressbar" aria-valuenow="43"
                                        aria-valuemin="0" aria-valuemax="100" style="width:43%">                                        
                                        </div>
                                    </div>
                                    <span>100%</span>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 _seller-list-col">
                        <div class="_seller-list">
                            <div class="_seller-list-left active">
                                <p class="_sel-title">Days Without Warnings</p>
                                <p>Avoid receiving warnings for TOS violations over the course of 30 day</p>
                            </div>
                            <div class="_seller-list-right">
                                <div class="_progress-cont">
                                    <span>0</span>
                                    <div class="progress">                                
                                        <div class="progress-bar" role="progressbar" aria-valuenow="43"
                                        aria-valuemin="0" aria-valuemax="100" style="width:43%">                                        
                                        </div>
                                    </div>
                                    <span>100%</span>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <!-- Col : End  -->
                </div>           
            </div> 
        </section>
                    </div>

                    <section class="_commonPadding" style="background: #f7f7f7;margin-bottom: 10px">
            <div class="container">
                <div class="_headingDiv">
                    <h2 class="_headingTxt">Rating</h2>                
                </div> 
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <p class="_r-title">
                            <span><strong style="color: #0e0e0f;">All time rating </strong></span>
                            <span class="_r-star">
                                @if ($all_time_rating>=0.50 && $all_time_rating<1)
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($all_time_rating>=1 && $all_time_rating<1.50)
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($all_time_rating>=1.50 && $all_time_rating<2)
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($all_time_rating>=2 && $all_time_rating<2.50)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($all_time_rating>=2.50 && $all_time_rating<3)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($all_time_rating>=3 && $all_time_rating<3.50)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($all_time_rating>=3.50 && $all_time_rating<4)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($all_time_rating>=4 && $all_time_rating<4.5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($all_time_rating>=4.50 && $all_time_rating<5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                @elseif ($all_time_rating == 5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                @endif

                            
                               <!-- <i class="fas fa-star-half-alt"></i> -->
                            </span>
                            <span>({{ $all_time_count ?? 0 }})</span>
                        </p>
                        <div class="_progress-cont _mB15">
                            <span>5 Star</span>
                            <div class="progress">                                
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:{{ ($five_star *100)? ($five_star *100)/$all_time_count:0}}%">                                        
                                </div>
                            </div>
                            <span>({{ $five_star ?? 0 }})</span>
                        </div>
                        <div class="_progress-cont _mB15">
                            <span>4 Star</span>
                            <div class="progress">                                
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:{{ ($four_star *100)? ($four_star *100)/$all_time_count:0}}%">                                        
                                </div>
                            </div>
                            <span>({{ $four_star ?? 0 }})</span>
                        </div>
                        <div class="_progress-cont _mB15">
                            <span>3 Star</span>
                            <div class="progress">                                
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:{{ ($three_star *100)? ($three_star *100)/$all_time_count:0}}%">                                        
                                </div>
                            </div>
                            <span>({{ $three_star ?? 0 }})</span>
                        </div>
                        <div class="_progress-cont _mB15">
                            <span>2 Star</span>
                            <div class="progress">                                
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:{{ ($two_star *100)? ($two_star *100)/$all_time_count:0}}%">                                        
                                </div>
                            </div>
                            <span>({{ $two_star ?? 0 }})</span>
                        </div>
                        <div class="_progress-cont _mB15">
                            <span>1 Star</span>
                            <div class="progress">                                
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:{{ ($one_star *100)? ($one_star *100)/$all_time_count:0}}%">                                        
                                </div>
                            </div>
                            <span>({{ $one_star ?? 0 }})</span>
                        </div>
                       

                    </div>
                    <div class="col-lg-3 col-md-6 mx-auto">
                        <p class="_r-title">
                            <span><strong style="color: #0e0e0f;">Rating Breakdown</strong></span> 
                        </p>
                        <p class="_r-title _mB15">
                            <span>Communication with seller</span>
                            <span class="_r-star">
                                 @if ($communication_with_seller>=0.50 && $communication_with_seller<1)
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($communication_with_seller>=1 && $communication_with_seller<1.50)
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($communication_with_seller>=1.50 && $communication_with_seller<2)
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($communication_with_seller>=2 && $communication_with_seller<2.50)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($communication_with_seller>=2.50 && $communication_with_seller<3)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($communication_with_seller>=3 && $communication_with_seller<3.50)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($communication_with_seller>=3.50 && $communication_with_seller<4)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($communication_with_seller>=4 && $communication_with_seller<4.5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($communication_with_seller>=4.50 && $communication_with_seller<5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                @elseif ($communication_with_seller == 5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                @endif
                            </span>
                            <span>({{ $communication_count ?? 0 }})</span>
                        </p>
                        <p class="_r-title _mB15">
                            <span>Service as Described</span>
                            <span class="_r-star">
                               @if ($service_as_described>=0.50 && $service_as_described<1)
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($service_as_described>=1 && $service_as_described<1.50)
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($service_as_described>=1.50 && $service_as_described<2)
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($service_as_described>=2 && $service_as_described<2.50)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($service_as_described>=2.50 && $service_as_described<3)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($service_as_described>=3 && $service_as_described<3.50)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($service_as_described>=3.50 && $service_as_described<4)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($service_as_described>=4 && $service_as_described<4.5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($service_as_described>=4.50 && $service_as_described<5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                @elseif ($service_as_described == 5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                @endif
                            </span>
                            <span>({{ $service_count ?? 0 }})</span>
                        </p>
                        <p class="_r-title _mB15">
                            <span>Buy Again or Recommend</span>
                            <span class="_r-star">
                               @if ($buy_again>=0.50 && $buy_again<1)
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($buy_again>=1 && $buy_again<1.50)
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($buy_again>=1.50 && $buy_again<2)
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($buy_again>=2 && $buy_again<2.50)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($buy_again>=2.50 && $buy_again<3)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($buy_again>=3 && $buy_again<3.50)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($buy_again>=3.50 && $buy_again<4)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($buy_again>=4 && $buy_again<4.5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif ($buy_again>=4.50 && $buy_again<5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                @elseif ($buy_again == 5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                @endif
                            </span>
                            <span>({{ $buy_again_count ?? 0 }})</span>
                        </p>
                    </div>
                    
                </div>
            </div>
        </section>






                    <!-- Begin: Card  -->
                    
                    <div id="chartdiv"></div>

                    <!-- End: Card  -->
                </div>
            </div>
        </div> 

    </main>
    <!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
  overflow: hidden;
}

.map-marker {
    /* adjusting for the marker dimensions
    so that it is centered on coordinates */
    margin-left: -8px;
    margin-top: -8px;
    box-sizing: border-box;
}
.map-marker.map-clickable {
    cursor: pointer;
}
.pulse {
    width: 10px;
    height: 10px;
    border: 5px solid green;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    background-color: green;
    z-index: 10;
    position: absolute;
    box-sizing: border-box;
}
.map-marker .dot {
    border: 10px solid red;
    background: transparent;
    -webkit-border-radius: 60px;
    -moz-border-radius: 60px;
    border-radius: 60px;
    height: 50px;
    width: 50px;
    -webkit-animation: pulse 3s ease-out;
    -moz-animation: pulse 3s ease-out;
    animation: pulse 3s ease-out;
    -webkit-animation-iteration-count: infinite;
    -moz-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    position: absolute;
    top: -20px;
    left: -20px;
    z-index: 1;
    opacity: 0;
    box-sizing: border-box;
}
@-moz-keyframes pulse {
   0% {
      -moz-transform: scale(0);
      opacity: 0.0;
   }
   25% {
      -moz-transform: scale(0);
      opacity: 0.1;
   }
   50% {
      -moz-transform: scale(0.1);
      opacity: 0.3;
   }
   75% {
      -moz-transform: scale(0.5);
      opacity: 0.5;
   }
   100% {
      -moz-transform: scale(1);
      opacity: 0.0;
   }
  }
  @-webkit-keyframes "pulse" {
   0% {
      -webkit-transform: scale(0);
      opacity: 0.0;
   }
   25% {
      -webkit-transform: scale(0);
      opacity: 0.1;
   }
   50% {
      -webkit-transform: scale(0.1);
      opacity: 0.3;
   }
   75% {
      -webkit-transform: scale(0.5);
      opacity: 0.5;
   }
   100% {
      -webkit-transform: scale(1);
      opacity: 0.0;
   }
}
</style>

<!-- Resources -->
<script src="{{ asset('public/storage/js/core.js') }}"></script>
<script src="{{ asset('public/storage/js/maps.js') }}"></script>
<script src="{{ asset('public/storage/js/worldLow.js') }}"></script>
<script src="{{ asset('public/storage/js/animated.js') }}"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create map instance
var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;
chart.chartContainer.wheelable = false;
chart.seriesContainer.draggable = false;
chart.maxZoomLevel = 1;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Exclude Antartica
polygonSeries.exclude = ["AQ"];

// Make map load polygon (like country names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.fill = chart.colors.getIndex(0).lighten(0.5);

// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = chart.colors.getIndex(0);

// Add image series
var imageSeries = chart.series.push(new am4maps.MapImageSeries());
imageSeries.mapImages.template.propertyFields.longitude = "longitude";
imageSeries.mapImages.template.propertyFields.latitude = "latitude";
imageSeries.data = [ {
  "title": "{{ $location->location->city ?? '' }}",
  "latitude": {{ $location->location->latitude ?? 0 }},
  "longitude": {{ $location->location->longitude ?? 0 }}
} ];

// add events to recalculate map position when the map is moved or zoomed
chart.events.on( "ready", updateCustomMarkers );
chart.events.on( "mappositionchanged", updateCustomMarkers );

// this function will take current images on the map and create HTML elements for them
function updateCustomMarkers( event ) {
  
  // go through all of the images
  imageSeries.mapImages.each(function(image) {
    // check if it has corresponding HTML element
    if (!image.dummyData || !image.dummyData.externalElement) {
      // create onex
      image.dummyData = {
        externalElement: createCustomMarker(image)
      };
    }

    // reposition the element accoridng to coordinates
    var xy = chart.geoPointToSVG( { longitude: image.longitude, latitude: image.latitude } );
    image.dummyData.externalElement.style.top = xy.y + 'px';
    image.dummyData.externalElement.style.left = xy.x + 'px';
  });

}

// this function creates and returns a new marker element
function createCustomMarker( image ) {
  
  var chart = image.dataItem.component.chart;

  // create holder
  var holder = document.createElement( 'div' );
  holder.className = 'map-marker';
  holder.title = image.dataItem.dataContext.title;
  holder.style.position = 'absolute';

  // maybe add a link to it?
  if ( undefined != image.url ) {
    holder.onclick = function() {
      window.location.href = image.url;
    };
    holder.className += ' map-clickable';
  }

  // create dot
  var dot = document.createElement( 'div' );
  dot.className = 'dot';
  holder.appendChild( dot );

  // create pulse
  var pulse = document.createElement( 'div' );
  pulse.className = 'pulse';
  holder.appendChild( pulse );

  // append the marker to the map container
  chart.svgContainer.htmlElement.appendChild( holder );

  return holder;
}

}); // end am4core.ready()
</script>


<!-- HTML -->
    @push('script')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" ></script>
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" ></script>

     <script>
    var bgColor = [];
    var border = [];
    @json(array_keys($earned)).forEach(function(val){
        var r = getRandomInt(50,255);
        var g = getRandomInt(50,255);
        var b = getRandomInt(50,255);
        bgColor.push(`rgba(${r},${g},${b},0.2)`);
        border.push(`rgba(${r},${g},${b},1)`);
    });


function earned() {

    document.getElementById('earned').style.display = 'block';
    document.getElementById('cancelled').style.display = 'none';
    document.getElementById('completed').style.display = 'none';
    document.getElementById('newOrder').style.display = 'none';

    var ctx = document.getElementById('earned').getContext('2d');;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json(array_keys($earned)),
            datasets: [{
                label: '$ USD',
                data: @json(array_values($earned)),
                backgroundColor: bgColor,
                borderColor: border,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                    }
                }],
                xAxes: [{
                barThickness: 30,
                maxBarThickness: 30,
                gridLines: {
                    offsetGridLines: true
                }
            }]
            },

        }
    });
}
function cancelled() {

    document.getElementById('earned').style.display = 'none';
    document.getElementById('cancelled').style.display = 'block';
    document.getElementById('completed').style.display = 'none';
    document.getElementById('newOrder').style.display = 'none';

    var ctx = document.getElementById('cancelled');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json(array_keys($cancelled)),
            datasets: [{
                label: '# Cancelled',
                data: @json(array_values($cancelled)),
                backgroundColor: bgColor,
                borderColor: border,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                    }
                }],
                xAxes: [{
                barThickness: 30,
                maxBarThickness: 30,
                gridLines: {
                    offsetGridLines: true
                }
            }]
            }
        }
    });
}
function completed() {
    
    document.getElementById('earned').style.display = 'none';
    document.getElementById('cancelled').style.display = 'none';
    document.getElementById('completed').style.display = 'block';
    document.getElementById('newOrder').style.display = 'none';

    var ctx = document.getElementById('completed');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json(array_keys($completed)),
            datasets: [{
                label: '# Orders',
                data: @json(array_values($completed)),
                backgroundColor: bgColor,
                borderColor: border,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                    }
                }],
                xAxes: [{
                barThickness: 30,
                maxBarThickness: 30,
                gridLines: {
                    offsetGridLines: true
                }
            }]
            }
        }
    });
}
function newOrder() {
    
    document.getElementById('earned').style.display = 'none';
    document.getElementById('cancelled').style.display = 'none';
    document.getElementById('completed').style.display = 'none';
    document.getElementById('newOrder').style.display = 'block';

    var ctx = document.getElementById('newOrder');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json(array_keys($newOrder)),
            datasets: [{
                label: '# New Order',
                data: @json(array_values($newOrder)),
                backgroundColor: bgColor,
                borderColor: border,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                    }
                }],
                xAxes: [{
                barThickness: 30,
                maxBarThickness: 30,
                gridLines: {
                    offsetGridLines: true
                }
            }]
            }
        }
    });
}

earned();

$("#filter").change(function(event) {
    window.location.href = `{{ url('seller/analytics/') }}/${this.value}`;
});

$(function(){

$("#id-19-description").next().next().hide();
});

</script>
    @endpush
@endsection