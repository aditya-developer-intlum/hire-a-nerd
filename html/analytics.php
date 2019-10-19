<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Analytics</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!--  CSS -->
    <?php include("includes/header-links.php");?>
</head>

<body>
    <!-- Begin : Header  -->
    <?php include('includes/header-after-login.php'); ?>
    <!-- End : Header --->   
    <!-- Main Begin here -->
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
                                            <p class="_numTxt _txtBlue">$78869</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col End   -->
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Total Completed Orders</span>
                                            <p class="_numTxt _txtGreen">4896</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col End   -->
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Avg. Selling Price</span>
                                            <p class="_numTxt _txtOrange">$48</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Col End   -->
                                <!-- Col Begin  -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="_numBox__outer">
                                        <div class="_numBox__inner">
                                            <span class="_numDesc">Earned In May</span>
                                            <p class="_numTxt _txtRed">$785</p>
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
                                <select name="" id="" class="form-control2">
                                    <option value="">Last 30 Days</option>
                                    <option value="">Go offline For</option>
                                    <option value="">Go offline For</option>
                                    <option value="">Go offline For</option>
                                </select>
                            </div>                                  
                        </div>
                        <div class="_dsBody _pGap">
                            <form action="">
                                <div class="form-group">
                                    <div class="_radioList">
                                        <label class="_radio">
                                            <input type="radio" name="example_1" value="1"> Earned 
                                            <span></span>
                                        </label>
                                        <label class="_radio">
                                            <input type="radio" name="example_1" value="2"> Cancelled
                                            <span></span>
                                        </label>    
                                        <label class="_radio">
                                            <input type="radio" name="example_1" value="3"> Completed     
                                            <span></span>
                                        </label> 
                                        <label class="_radio">
                                            <input type="radio" name="example_1" value="4"> New Orders
                                            <span></span>
                                        </label>                                    
                                    </div>											
                                </div>
                            </form>
                            <div class="text-center _imgDescBox">
                                <figure>
                                    <img src="images/feature-img.png" alt="">
                                </figure>
                                <p class="_largeText">There are no orders to display</p>
                                <p>There is no data available within the selected timeframe.</p>                                
                            </div>
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
                    <!-- End: Card  -->
                </div>
            </div>
        </div>        
    </main>
    <!-- End: Main  -->

    <!--- Begin:  Footer --->
    <?php include("includes/footer.php"); ?>
</body>

</html>