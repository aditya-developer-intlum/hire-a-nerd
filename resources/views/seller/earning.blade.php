@extends('layouts.app')

@section("content")
<main class="main_body _dBody _grayBg">
        <div class="container">
            <div class="row">              
                <div class="col-md-12">
                    <!-- Begin: Card  -->
                    <div class="_dCard _p0">
                        <div class="_dCardHeader _borderBtm _pGap">
                            <span class="_dHeading">Earnings</span>   
                            <div>
                                <select name="" id="" class="form-control2">
                                    <option value="">Last 30 Days</option>
                                    <option value="">Go offline For</option>
                                    <option value="">Go offline For</option>
                                    <option value="">Go offline For</option>
                                </select>
                            </div>                                
                        </div>
                        <div class="_dsBody _pGap">
                            <div class="row _numBox__row">
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4  _numBox__col2">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Net Income</span>
                                            <p class="_numTxt _txtBlue">${{ $netIncome ?? 0 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col End   -->
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4  _numBox__col2">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Withdrawn</span>
                                            <p class="_numTxt _txtBlue">${{ $withdrawn ?? 0 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col End   -->
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4  _numBox__col2">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Used for Purchases</span>
                                            <p class="_numTxt _txtBlue">${{ $usedForPurchase ?? 0 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col End   -->
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4  _numBox__col2">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Pending Clearance</span>
                                            <p class="_numTxt _txtBlue">${{ $pending ?? 0 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col End   -->
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4  _numBox__col2">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Available for Withdrawal</span>
                                            <p class="_numTxt _txtBlue">${{ $availWithdrawal ?? 0 }}</p>
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
                            <span class="_dHeading">WITHDRAW</span>                                                                
                        </div>
                        <div class="_dsBody _pGap">
                            <form action="">
                                <div class="form-group  _payMentOption">
                                    <div class="_radioList">
                                        <label class="_radio">
                                            <input type="radio" name="example_1" value="1"> PayPal <img src="images/paypal.png" class="pay-img" alt="">
                                            <span></span>
                                        </label>
                                        <label class="_radio">
                                            <input type="radio" name="example_1" value="2"> Stripe <img src="images/skrill.png" class="pay-img" alt="">
                                            <span></span>
                                        </label>                         
                                    </div>											
                                </div>
                            </form>                           
                        </div>                        
                    </div>
                    <!-- End: Card  -->  
                    <!-- Begin: Card  -->
                    <div class="_dCard">  
                        <div class="_dCardHeader _dHeaderLeft">
                            <span class="_dHeading">Your Seller Level <a href="#">Learn More</a></span> 
                            <p>Evaluation period ends on Jun 15, 2019, 00:00 GMT</p>   
                        </div>                      
                        <div class="_dsBody">
                            <div class="_levelCont _levelCom-1">
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
                    <!-- End: Card  -->                 
                </div>
            </div>
        </div>        
    </main>
@endsection