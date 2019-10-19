<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Account</title>
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
            <div class="row _dRow">
                <div class="col-md-5 _dLeft">
                     <!-- Begin: Card -->
                     <div class="_dCard _p0">
                        <div class="row">
                            <div class="col-md-4">
                              <div class="_dUserPro">
                                  <img src="images/user-img.jpg" alt="">
                                  <a href="#" class="_editPic"><i class="fas fa-camera"></i></a>
                              </div>
                            </div>
                            <div class="col-md-8">
                                <div class="_dUserProDesc">
                                    <h3 class="_dUHead">Lorem Ipsum</h3>
                                    <p>What's your story in one line?</p>
                                    <ul class="_DabtUl">
                                        <li><span class="_iconLft"><i class="fas fa-map-marker-alt"></i></span>From : USA   </li>
                                        <li><span class="_iconLft"><i class="fas fa-user"></i></span>Member since : Jul 2017</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End : Card -->
                    <!-- Begin: Card -->
                    <div class="_dCard">
                        <div class="_dCardHeader">
                            <span class="_dHeading">Description</span>
                            <a href="#" class="btn _dBorBtn">Edit Description</a>
                        </div>
                        <div class="_dBorText">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                        </div>
                        <div class="_dCardHeader">
                            <span class="_dHeading">Languages</span>
                            <a href="#" class="btn _dBorBtn">Add Language<span class="_iconRight"><i class="fas fa-plus"></i></span></a>
                        </div>
                        <div class="_dsBody">
                            <ul>
                                <li>English - Basic US</li>
                                <li>Latin</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End : Card -->
                    <!-- Begin: Card -->
                    <div class="_dCard">
                        <div class="_dCardHeader">
                            <span class="_dHeading">Linked Accounts</span>                            
                        </div>                        
                        <div class="_dsBody">
                            <ul>
                                <li><a href="#">Facebook +</a></li>
                                <li><a href="#" class="_highLighed">Google Linked</a></li>
                                <li><a href="#">Dribbble +</a></li>
                                <li><a href="#">Stack Overflow +</a></li>
                                <li><a href="#">Linkedin +</a></li>
                                <li><a href="#">Behance +</a></li>
                                <li><a href="#">GitHub +</a></li>
                                <li><a href="#">Vimeo +</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End : Card -->
                    <!-- Begin: Card -->
                    <div class="_dCard">
                        <div class="_dCardHeader">
                            <span class="_dHeading">Skills</span> 
                            <a href="#" class="btn _dBorBtn">Add Skills <span class="_iconRight"><i class="fas fa-plus"></i></span></a>               
                        </div> 
                        <div class="_dBorText">
                            <ul class="_inlineList">
                                <li>Photoshop,</li>
                                <li>Logo Design,</li>
                                <li>Banner Design,</li>
                                <li>Website Design</li>
                            </ul>
                        </div>    
                        <div class="_dCardHeader">
                            <span class="_dHeading">Education</span> 
                            <a href="#" class="btn _dBorBtn">Add Education <span class="_iconRight"><i class="fas fa-plus"></i></span></a>               
                        </div> 
                        <div class="_dBorText">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                        </div>  
                        <div class="_dCardHeader">
                            <span class="_dHeading">Certification</span> 
                            <a href="#" class="btn _dBorBtn">Add Certification <span class="_iconRight"><i class="fas fa-plus"></i></span></a>               
                        </div>   
                        <p>You don't have any Certification. <a href="#"><strong>Add Now</strong></a></p>               
                        
                    </div>
                    <!-- End : Card -->
                </div>
                <!-- Right page -->
                <div class="col-md-7 _dRight">
                    <div class="_dTabNav">
                        <ul class="nav nav-tabs">                           
                            <li><a data-toggle="tab" href="#dAcc" class="active">Account</a></li>
                            <li><a data-toggle="tab" href="#dSec">Security</a></li>
                            <li><a data-toggle="tab" href="#dNoti">Notifications</a></li>
                            <li><a data-toggle="tab" href="#dBill"> Billing</a></li>
                        </ul>
                    </div>
                    <!-- Tab Cont Begin  -->
                    <div class="tab-content">     
                        <!-- Begin : Account Tab Pannel -->                   
                        <div id="dAcc" class="tab-pane fade in active show">
                             <!-- Begin: Card -->
                             <div class="_dCard">
                                <div class="_dCardHeader _borderBtm">                            
                                    <span class="_dHeading ">My Account</span> 
                                </div>                        
                                <div class="_dsBody">
                                    <form action="" class="_dForm">
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Full Name </label></div>
                                            <div class="col-md-8"><input type="text" placeholder="Type your Name" class="form-control2"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Email Address :</label></div>
                                            <div class="col-md-8"><input type="email" placeholder="Enter your Email" class="form-control2"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Online Status :</label></div>
                                            <div class="col-md-8">
                                                <select name="" id="" class="form-control2">
                                                    <option value="">Go offline For</option>
                                                    <option value="">Go offline For</option>
                                                    <option value="">Go offline For</option>
                                                    <option value="">Go offline For</option>
                                                </select>
                                                <p class="_emTxt">When online, your Gigs are visible under the Online search filter.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="#" class="btn _btn2 _btnSuccess ">Save Changes</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End : Card -->
                            <!-- Begin: Card -->
                            <div class="_dCard">
                                <div class="_dCardHeader _borderBtm">                            
                                    <span class="_dHeading ">Account Deactivation</span> 
                                </div>                        
                                <div class="_dsBody">
                                    <form action="" class="_dForm">                                        
                                        <div class="form-group row">
                                            <div class="col-md-8">
                                                <p class="_txtRed"><strong>What happens when you deactivate your account?</strong></p>
                                                <ul class="_listStyle">
                                                    <li>Your profile and Gigs won't be shown on Fiverr anymore. </li>
                                                    <li>Active orders will be cancelled.</li> 
                                                    <li>You won't be able to re-activate your Gigs.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">I'm leaving because... </label></div>
                                            <div class="col-md-8">
                                                <select name="" id="" class="form-control2">
                                                    <option value="">Reason</option>
                                                    <option value="">Go offline For</option>
                                                    <option value="">Go offline For</option>
                                                    <option value="">Go offline For</option>
                                                </select>                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="#" class="btn _btn2 _btnDanger">Deactivate Account</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End : Card -->                        
                        </div>
                        <!-- End : Account Tab Pannel -->

                        <!-- Begin : Description Tab Pannel -->
                        <div id="dSec" class="tab-pane fade">
                            <!-- Begin: Card -->
                            <div class="_dCard">
                                <div class="_dCardHeader _borderBtm">                            
                                    <span class="_dHeading ">Security</span> 
                                </div>                        
                                <div class="_dsBody">
                                    <div class="_dBorText">
                                        <form action="" class="_dForm"> 
                                            <div class="form-group row">
                                                <div class="col-md-4"><label class="" for="">Set Password :</label></div>
                                                <div class="col-md-8">
                                                    <input type="password" placeholder="New Password" class="form-control2 _mB15">
                                                    <input type="password" placeholder="Confirm Password" class="form-control2">    
                                                    <p class="_emTxt">8 characters or longer. Combine upper and lowercase letters and numbers.</p>                                           
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="#" class="btn _btn2 _btnSuccess">Save Changes</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="_dBorText">
                                        <div class="_dCardHeader">
                                            <div>
                                                <span class="_dHeading _mB15">Phone Verification</span>
                                                <p>Your phone is not verified with Hire a nerd <br>
                                                   Click Verify Now to complete phone verification</p>
                                            </div>
                                            <a href="#" class="btn _btn2 _btnVerify">Verify Now</a>
                                        </div>
                                    </div>
                                    <div class="_dBorText">
                                        <div class="_dCardHeader">
                                            <div>
                                                <span class="_dHeading _mB15">Security Questions</span>
                                                <p>By creating a security question, you will add an additional layer of <br>protection for your revenue withdrawals and for changing your password.</p>
                                            </div>
                                            <a href="#" class="btn _btn2 _btnVerify">Set</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End : Card -->                        
                        </div>
                        <!-- End : Description Tab Pannel -->

                        <!-- Begin : Notification Tab Pannel -->
                        <div id="dNoti" class="tab-pane fade">
                            <!-- Begin: Card -->
                            <div class="_dCard">
                                <div class="_dCardHeader _borderBtm">                            
                                    <span class="_dHeading">Notification</span> 
                                </div>                        
                                <div class="_dsBody">
                                    <div class="_dBorText">
                                        <p>For important updates regarding your Fiverr activity, certain notifications cannot be disabled.</p>
                                        <form action="" class="_dForm">
                                            <div class="form-group row">
                                                <div class="col-lg-8 col-md-12">
                                                    <div class="table-responsive _dTable">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Type</th>
                                                                    <th>Email</th>
                                                                    <th>Mobile</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Inbox Messages</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Order Messages</td>                                                        
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Order Updates</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Buyer Requests	</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>My Gigs</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>My Account	</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>To-dos</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>                                               
                                                    </div>
                                                </div>
                                            </div> 
                                           <div class="form-group">
                                                <a href="#" class="btn _btn2 _btnSuccess ">Save Changes</a>
                                            </div>
                                        </form>
                                    </div>  
                                    <div class="_dCardHeader">                            
                                        <span class="_dHeading">Real Time Notification</span> 
                                    </div>  
                                    <form action="" class="_dForm">
                                            <div class="form-group row">
                                                <div class="col-lg-8 col-md-12">
                                                    <div class="table-responsive _dTable">
                                                        <table class="table">                                                           
                                                            <tbody>
                                                                <tr>
                                                                    <td>Enable/disable real-time notifications</td>
                                                                    <td>
                                                                        <span class="_mSwitch ">
                                                                            <label>
                                                                                <input type="checkbox" checked>
                                                                                <span></span>
                                                                            </label>
                                                                        </span>
                                                                    </td>                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Enable/disable sound</td>                                                        
                                                                    <td>
                                                                        <span class="_mSwitch ">
                                                                            <label>
                                                                                <input type="checkbox">
                                                                                <span></span>
                                                                            </label>
                                                                        </span>
                                                                    </td>                                                                    
                                                                </tr>                                                               
                                                            </tbody>
                                                        </table>                                               
                                                    </div>
                                                </div>
                                            </div> 
                                           <div class="form-group">
                                                <a href="#" class="btn _btn2 _btnSuccess ">Save Changes</a>
                                            </div>
                                        </form>                                
                                </div>
                               
                            </div>
                            <!-- End : Card -->
                        </div>
                        <!-- End  : Notification Tab Pannel -->

                        <!-- Begin : Billing Tab Pannel -->
                        <div id="dBill" class="tab-pane fade">
                             <!-- Begin: Card -->
                             <div class="_dCard">
                                 <div class="_dBorText">
                                    <div class="_dCardHeader _mB10">                            
                                        <span class="_dHeading ">Billing Information</span> 
                                    </div> 
                                    <p>The following information will be displayed on your invoices:</p>                     
                                 </div>
                                                
                                <div class="_dsBody">
                                    <form action="" class="_dForm">
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Company Name :</label></div>
                                            <div class="col-md-8"><input type="text" placeholder="" class="form-control2"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Full Name :</label></div>
                                            <div class="col-md-8"><input type="email" placeholder="" class="form-control2"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Country :</label></div>
                                            <div class="col-md-5">
                                                <select name="" id="" class="form-control2">
                                                    <option value=""></option>
                                                    <option value="">Country</option>
                                                    <option value="">Country</option>
                                                    <option value="">Country</option>
                                                </select>                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Address :</label></div>
                                            <div class="col-md-8"><input type="email" placeholder="" class="form-control2"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">City :</label></div>
                                            <div class="col-md-5"><input type="email" placeholder="" class="form-control2"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Zip Code :</label></div>
                                            <div class="col-md-5"><input type="email" placeholder="" class="form-control2"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Invoice : </label></div>
                                            <div class="col-md-5">
                                                <label  class="_mCheckbox _mB0">
                                                    <input type="checkbox" checked> Send me invoice via email
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="#" class="btn _btn2 _btnSuccess ">Save Changes</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End : Card -->
                        </div>
                        <!-- End : Billing Tab Pannel -->
                    </div>
                    <!-- Tab cont End    -->
                    
                </div>
                <!-- Right page -->
            </div>
        </div>        
    </main>
    <!-- End: Main  -->

    <!--- Begin:  Footer --->
    <?php include("includes/footer.php"); ?>
</body>

</html>