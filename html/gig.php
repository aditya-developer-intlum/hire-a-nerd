<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gig</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!--  CSS -->
    <?php include("includes/header-links.php");?>
</head>

<body>
    <!-- Begin : Header  -->
    <?php include('includes/header-after-login.php'); ?>
    <!-- End : Header --->   
    <!-- Main Begin here -->
    <main class="main_body _dBody _grayBg _pT0">
        <div class="container">
            <div class="row _gRow">
                <!-- Begin: Top Nav  -->
                <div class="col-md-12">
                    <div class="_gigProsessBar">
                        <ul class="nav nav-tabs">
                            <li class="active _completed">
                                <a data-toggle="tab" href="#gOverview">
                                    <span class="_num">1</span>
                                    Overview
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#gPricing">
                                    <span class="_num">2</span>
                                    Pricing 
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#gDesc">
                                    <span class="_num">3</span>
                                    Description & FAQ
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#gRequirment">
                                    <span class="_num">4</span>
                                    Requirements 
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#gGallery">
                                    <span class="_num">5</span>
                                    Gallery
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#gPublish">
                                    <span class="_num">6</span>
                                    Publish
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                        </ul>                                            
                    </div>
                </div>    
                <!-- End: Top Nav  -->
                <!-- Begin :  Section -->
                <div class="col-lg-12 col-md-12">
                    <div class="tab-content">
                        <!-- Begin : Overview  -->
                        <div id="gOverview" class="tab-pane fade in active show">
                            <div class="row">
                                 <!-- Begin : Left Section   -->
                                <div class="col-lg-8 col-md-12">
                                    <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">Overview</span>                                    
                                        </div>
                                        <form action="" class="_dForm">
                                            <div class="_dBorText">
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="" for="">Gig Title</label></div>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control2" placeholder="I’m Realy good At"></textarea>
                                                        <p class="_emTxt _mT0 text-right">0 / 80 max</p>
                                                    </div>
                                                </div>                                       
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="_label" for="">Categorie :</label></div>
                                                    <div class="col-md-6">
                                                        <select name="" id="" class="form-control2">
                                                            <option value="">Select</option>
                                                            <option value="">Go offline For</option>
                                                            <option value="">Go offline For</option>
                                                            <option value="">Go offline For</option>
                                                        </select>                                                
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="" for="">Search Tags :</label></div>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="" class="form-control2">
                                                        <p class="_emTxt  text-right">Up to 5 terms</p>
                                                        <p class="_emTxt"><strong>Please note:</strong> Some categories require that sellers verify their skills.</p>
                                                    </div>
                                                </div>  
                                            </div>                                
                                            <div class="_dBtnGroup">
                                                <a href="#" class="btn _btn2 _btnSuccess ">Save Changes</a>
                                                <a href="#" class="btn _btn2 _btnDanger ">Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End : Card -->
                                </div>
                                <!-- End : Left Section   -->
                                <!-- Begin : Right Section -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="_gigDefBox">
                                        <figure>
                                            <img src="images/gig-img.png" alt="">
                                        </figure>
                                        <p class="_gigDefHead">Start Defining Your Gig</p>
                                        <p class="_gigDefTxt">
                                            Create a catchy title.<br>
                                            Choose a category that fits your Gig.<br>
                                            Add meta data to help buyers find more information regarding your Gig.<br>
                                            Add tags to help buyers find your Gig while searching.
                                        </p>
                                        <a href="#" class="btn _dBorBtn">General Gig Policy</a>
                                    </div>
                                </div>
                                <!-- End : Right Section   -->
                            </div>                                                       
                        </div>
                        <!-- End  : Overview  -->

                        <!-- Begin:  Pricing -->
                        <div id="gPricing" class="tab-pane fade">
                            <div class="row">
                                <!-- Begin : Left Section   -->
                                <div class="col-lg-8 col-md-12">
                                    <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">Pricing</span>                                   
                                        </div>                        
                                        <div class="_dsBody">
                                            <form action="" class="_dForm">
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="_label" for="">Name Your Package :</label></div>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="" class="form-control2">    
                                                    </div>
                                                </div>   
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="_label" for="">Describe the details of your offering :</label></div>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="" class="form-control2">    
                                                    </div>
                                                </div>                                     
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="_label" for="">Delivery Time :</label></div>
                                                    <div class="col-md-5">
                                                        <select name="" id="" class="form-control2">
                                                            <option value="">Select</option>
                                                            <option value="">Go offline For</option>
                                                            <option value="">Go offline For</option>
                                                            <option value="">Go offline For</option>
                                                        </select>                                                
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="_label" for="">Revisions :</label></div>
                                                    <div class="col-md-5">
                                                        <select name="" id="" class="form-control2">
                                                            <option value="">Select</option>
                                                            <option value="">Go offline For</option>
                                                            <option value="">Go offline For</option>
                                                            <option value="">Go offline For</option>
                                                        </select>                                                
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="_label" for=""># of Initial Concepts Included :</label></div>
                                                    <div class="col-md-5">
                                                        <select name="" id="" class="form-control2">
                                                            <option value="">Select</option>
                                                            <option value="">Go offline For</option>
                                                            <option value="">Go offline For</option>
                                                            <option value="">Go offline For</option>
                                                        </select>                                                
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="" for="">Search Tags :</label></div>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="" class="form-control2">
                                                        <p class="_emTxt  text-right">Up to 5 terms</p>
                                                        <p class="_emTxt"><strong>Please note:</strong> Some categories require that sellers verify their skills.</p>
                                                    </div>
                                                </div> 
                                                <div class="row form-group">
                                                    <div class="form-group col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-8"><label class="_label" for="">Source File</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-8"><label class="_label" for="">Stationery Designs</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-8"><label class="_label" for="">Logo Transparency</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-8"><label class="_label" for="">Social Media Kit</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 form-group ">
                                                        <div class="row">
                                                            <div class="col-md-8"><label class="_label" for="">High Resolution</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <div class=" row">
                                                            <div class="col-md-8"><label class="_label" for="">Vector File</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <div class=" row">
                                                            <div class="col-md-8"><label class="_label" for="">3D Mockup</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="_label" for="">Select Price</label></div>
                                                    <div class="col-md-5">
                                                        <select name="" id="" class="form-control2">
                                                            <option value="">Select</option>
                                                            <option value="">Go offline For</option>
                                                            <option value="">Go offline For</option>
                                                            <option value="">Go offline For</option>
                                                        </select>                                                
                                                    </div>
                                                </div>                                      
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End : Card -->
                                    <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">My Gig Extras</span>                                    
                                        </div>
                                        <form action="" class="_dForm">
                                            <div class="_dBorText">
                                                <div class="row form-group">
                                                    <div class="form-group col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-8"><label class="_label" for="">Extra fast delivery</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-8"><label class="_label" for="">High Resolution</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-8"><label class="_label" for="">Additional Revision	</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-8"><label class="_label" for="">3D Mockup</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 form-group ">
                                                        <div class="row">
                                                            <div class="col-md-8"><label class="_label" for="">Additional Logo	</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <div class=" row">
                                                            <div class="col-md-8"><label class="_label" for="">Stationery Designs</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <div class=" row">
                                                            <div class="col-md-8"><label class="_label" for="">Source File	</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <div class=" row">
                                                            <div class="col-md-8"><label class="_label" for="">Social Media Kit</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <div class=" row">
                                                            <div class="col-md-8"><label class="_label" for="">Logo Transparency	</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <div class=" row">
                                                            <div class="col-md-8"><label class="_label" for="">Vector File</label></div>
                                                            <div class="col-md-4">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>                                            
                                                </div> 
                                                <div class="form-group">
                                                    <a href="#" class="btn _dBorBtn">Add gig Extra<span class="_iconRight"><i class="fas fa-plus"></i></span></a>
                                                </div>                                  
                                            </div>                                
                                            <div class="_dBtnGroup">
                                                <a href="#" class="btn _btn2 _btnSuccess ">Save Changes</a>
                                                <a href="#" class="btn _btn2">Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End : Card --> 
                                </div>
                                <!-- End : Left Section   -->
                                <!-- Begin : Right Section -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="_gigDefBox">
                                        <figure>
                                            <img src="images/gig-img.png" alt="">
                                        </figure>
                                        <p class="_gigDefHead">Set your packages</p>
                                        <p class="_gigDefTxt">
                                            Set the prices for your 3 packages. Select the elements you want to include in each offer.<br>
                                            Add Extras to increase your order value.
                                        </p>
                                        <a href="#" class="btn _dBorBtn">See examples</a>
                                    </div>
                                </div>
                                <!-- End : Right Section   -->
                            </div>
                            
                        </div>
                        <!-- End:  Pricing -->

                        <!-- Begin : Description -->
                        <div id="gDesc" class="tab-pane fade">
                            <div class="row">
                                <!-- Begin : Left Section   -->
                                <div class="col-lg-8 col-md-12">
                                     <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">Description & FAQ</span>                                    
                                        </div>
                                        <div class="_dsBody">
                                            <form action="" class="_dForm">
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="" for="">Briefly Describe Your Gig :</label></div>
                                                    <div class="col-md-8">
                                                        <textarea placeholder="" class="form-control2" style="min-height: 125px"> </textarea>
                                                        <div>
                                                            <p class="_emTxt float-left">min. 120</p>
                                                            <p class="_emTxt  float-right text-right">0/1200 Characters</p>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End : Card -->
                                    <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">Frequently Asked Questions</span>
                                            <a href="#" class="btn _dBorBtn">Add FAQ<span class="_iconRight"><i class="fas fa-plus"></i></span></a>
                                        </div>                        
                                        <div class="_dsBody">
                                            <form action="" class="_dForm">
                                                <div class="_dBorText">
                                                    <div class="form-group">
                                                        <p>Add Questions & Answers for Your Buyers. </p>
                                                        <a href="#" class="btn _dBorBtn _dsucces">Add FAQ<span class="_iconRight"><i class="fas fa-plus"></i></span></a>
                                                    </div>
                                                </div>                                       
                                                <div class="form-group ">
                                                    <div class="_dBtnGroup">
                                                        <a href="#" class="btn _btn2 _btnSuccess ">Save Changes</a>
                                                        <a href="#" class="btn _btn2">Cancel</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End : Card -->
                                </div>
                                <!-- End : Left Section   -->
                                <!-- Begin : Right Section -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="_gigDefBox">
                                        <figure>
                                            <img src="images/gig-img.png" alt="">
                                        </figure>
                                        <p class="_gigDefHead">Write Your Description & FAQ</p>
                                        <p class="_gigDefTxt">
                                            Include the most important information for your Gig.<br>
                                            Add frequently asked questions and answers to the most commonly asked questions.
                                        </p>
                                        <a href="#" class="btn _dBorBtn">See examples</a>
                                    </div>
                                </div>
                                <!-- End : Right Section   -->
                            </div>
                           
                        </div>
                        <!-- End  : Description  -->
                       
                        <!-- Begin : Requirment -->
                        <div id="gRequirment" class="tab-pane fade">
                            <div class="row">
                                <!-- Begin : Left Section   -->
                                <div class="col-lg-8 col-md-12">
                                    <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">Requirements</span>                                   
                                        </div>                        
                                        <div class="_dsBody">
                                            <form action="" class="_dForm">
                                                <div class="_dBorText">                                        
                                                    <div class="form-group" style="margin-bottom: 35px;">
                                                        <p class="_lText">Tell your buyer what you need to get started.</p>
                                                        <p>Structure your Buyer Instructions as free text, a multiple choice question or file upload.</p>
                                                    </div>                                         
                                                    <div class="form-group row">
                                                        <div class="col-md-4"><label class="" for="">Requirement #1 :</label></div>
                                                        <div class="col-md-8">
                                                            <textarea placeholder="For example: specifications, dimensions, brand guidelines, or background materials." class="form-control2" style="min-height: 125px"> </textarea>                                                
                                                            <p class="_emTxt text-right">0 / 450 Characters</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-4"><label class="" for="">Answer Type :</label></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select name="" id="" class="form-control2">
                                                                    <option value="">Select</option>
                                                                    <option value="">Go offline For</option>
                                                                    <option value="">Go offline For</option>
                                                                    <option value="">Go offline For</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="_mCheckbox">
                                                                    <input type="checkbox"> Answer is mandatory
                                                                    <span></span>
                                                                </label>        
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="_dBtnGroup2">
                                                                    <a href="#" class="btn _btn2 _btnSuccess ">Add</a>
                                                                    <a href="#" class="btn _btn2 _btnDanger">Cancel</a>
                                                                </div>       
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="_dBtnGroup">
                                                    <a href="#" class="btn _btn2 _btnSuccess ">Save & Continue</a>
                                                    <a href="#" class="btn _btn2">Back</a>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End : Card -->
                                </div>
                                <!-- End : Left Section   -->
                                <!-- Begin : Right Section -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="_gigDefBox">
                                        <figure>
                                            <img src="images/gig-img.png" alt="">
                                        </figure>
                                        <p class="_gigDefHead">Provide Your Requirements</p>
                                        <p class="_gigDefTxt">
                                        Indicate what you need before you can start working.
                                        </p>
                                        <a href="#" class="btn _dBorBtn">See examples</a>
                                    </div>
                                </div>
                                <!-- End : Right Section   -->
                            </div>
                            
                        </div>
                        <!-- End : Requirment -->

                        <!-- Begin : Gallery -->
                        <div id="gGallery" class="tab-pane fade">
                            <div class="row">
                                <!-- Begin : Left Section   -->
                                <div class="col-lg-8 col-md-12">
                                     <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">Build Your Gig Gallery</span>                                   
                                        </div>                        
                                        <div class="_dsBody">
                                            <form action="" class="_dForm">
                                                <div class="_dBorText">   
                                                    <!-- Begin : row  --> 
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <label class="" >
                                                                <p class="_lText">Gig Photos</p>
                                                                <p>Upload photos that describe or are related to your Gig.</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">								
                                                                        <input type="file" id="_agntFile-1" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="">
                                                                        <label for="_agntFile-1">
                                                                            <span>                                                                                                                                              
                                                                                <img src="images/img-icon.png" alt="" class="_attIcon">
                                                                                Drag a Photo or <br>
                                                                                <a href="#">Browse</a>
                                                                            </span>
                                                                        </label>                                                                              
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">								
                                                                        <input type="file" id="_agntFile-1" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="">
                                                                        <label for="_agntFile-1">
                                                                            <span>                                                                                                                                              
                                                                                <img src="images/img-icon.png" alt="" class="_attIcon">
                                                                                Drag a Photo or <br>
                                                                                <a href="#">Browse</a>
                                                                            </span>
                                                                        </label>                                                                              
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">								
                                                                        <input type="file" id="_agntFile-1" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="">
                                                                        <label for="_agntFile-1">
                                                                            <span>                                                                                                                                              
                                                                                <img src="images/img-icon.png" alt="" class="_attIcon">
                                                                                Drag a Photo or <br>
                                                                                <a href="#">Browse</a>
                                                                            </span>
                                                                        </label>                                                                              
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End : row  -->
                                                    <!-- Begin : row  --> 
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <label class="" >
                                                                <p class="_lText">Gig Video</p>
                                                                <p>Add a relevant, high quality video that best showcases your Gig.</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">								
                                                                        <input type="file" id="_agntFile-1" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="">
                                                                        <label for="_agntFile-1">
                                                                            <span>                                                                                                                                              
                                                                                <img src="images/video-icon.png" alt="" class="_attIcon">
                                                                                Drag a Video or <br>
                                                                                <a href="#">Browse</a>
                                                                            </span>
                                                                        </label>                                                                              
                                                                    </div>
                                                                </div>                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End : row  --> 
                                                    <!-- Begin : row  --> 
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <label class="" >
                                                                <p class="_lText">Gig PDFs</p>
                                                                <p>We only recommend adding a PDF file if it further clarifies the service you will be providing</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">								
                                                                        <input type="file" id="_agntFile-1" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="">
                                                                        <label for="_agntFile-1">
                                                                            <span>                                                                                                                                              
                                                                                <img src="images/pdf-icon.png" alt="" class="_attIcon">
                                                                                Drag a Photo or <br>
                                                                                <a href="#">Browse</a>
                                                                            </span>
                                                                        </label>                                                                              
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">								
                                                                        <input type="file" id="_agntFile-1" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="">
                                                                        <label for="_agntFile-1">
                                                                            <span>                                                                                                                                              
                                                                                <img src="images/pdf-icon.png" alt="" class="_attIcon">
                                                                                Drag a Photo or <br>
                                                                                <a href="#">Browse</a>
                                                                            </span>
                                                                        </label>                                                                              
                                                                    </div>
                                                                </div>                                                      
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End : row  -->                                   
                                                </div>
                                                <div class="_dBtnGroup">
                                                    <a href="#" class="btn _btn2 _btnSuccess ">Save & Continue</a>
                                                    <a href="#" class="btn _btn2">Back</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End : Card -->
                                </div>
                                <!-- End : Left Section   -->
                                <!-- Begin : Right Section -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="_gigDefBox">
                                        <figure>
                                            <img src="images/gig-img.png" alt="">
                                        </figure>
                                        <p class="_gigDefHead">Showcase Your Talent</p>
                                        <p class="_gigDefTxt">
                                            Add photos, an introduction video, or PDF files that best represent your service.
                                        </p>
                                        <a href="#" class="btn _dBorBtn">See examples</a>
                                    </div>
                                </div>
                                <!-- End : Right Section   -->
                            </div>
                           
                        </div>
                        <!-- End : Gallery -->
                        
                        <!-- Begin : Publish  -->
                        <div id="gPublish" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-8 col-md-12">
                                    <!-- Begin: Card -->
                                    <div class="_dCard">                                                        
                                        <div class="_dsBody">
                                            <div class="_publishDiv text-center">
                                                <figure>
                                                    <img src="images/publish-img.png" alt="">
                                                </figure>
                                                <p class="_boldGreenTxt">Almost There...</p>
                                                <p>Let's publish your Gig and get  some buyers rolling in.</p>
                                                <a href="#" class="btn _btn2 _btnSuccess ">Publish Gig</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End : Card -->
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- Begin : Publish  -->
                        
                    </div>
                </div>
                <!-- End :  Section -->
               
            </div>
        </div>        
    </main>
    <!-- End: Main  -->

    <!--- Begin:  Footer --->
    <?php include("includes/footer.php"); ?>
</body>

</html>