@extends('layouts.app')

@section("content")
<style type="text/css">


.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

</style>

<main class="main_body _dBody">
        <div class="container">
            <!-- Begin : Row  -->
            <div class="_jTopSec row" >
                <div class="_jTopSec__lft col-lg-8" id="navbar" style="z-index: 9">
                    <div class="_dTabNav" >
                        <ul class="nav nav-tabs">                           
                            <li><a href="#dAcc" class="active">Overview</a></li>
                            <li><a href="#packages" >Packages</a></li>
                            <li><a href="#description" >Description</a></li>
                            <li><a href="#reviews" >Reviews</a></li>
                            <li><a href="#dBill" >FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="_jTopSec__right col-lg-4">
                    <div class="_userAction">
                        <a href="#" class="_badge"><span><i class="fas fa-heart"></i></span> Wishlist</a>
                        <span class="_priceTag">500</span>
                        <a href="#" class="_badge _badgeDanger"><span><i class="fas fa-heart"></i></span></a>
                        <a href="#" class="btn _btn2 _btnSuccess "><span class="_iconLeft"><i class="fas fa-share-alt"></i></span> Share</a>
                    </div>
                </div>
            </div>
            <!-- End : Row  -->

            <!-- Begin: Div -->
            <div class="_outerLayout" id="dAcc"> 
                <div class="row">
                    <!-- Begin: Col  -->
                    <div class="col-lg-8">
                        <div class="_innerLayout">
                            <!-- Begin: Border Card -->
                            <div class="_bCard">
                                <div class="_bCard__hdr">
                                    <div class="_bCard__heading">{{ $gigs->gig_title }}</div>
                                    <div class="_bCard__desc">
                                        <div class="_ratingDiv">
                                            <ul class="_ratingStar">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span>(0)</span>
                                        </div>
                                        <p>0 Orders in Queue</p>
                                    </div>
                                </div>
                                <!-- Begin -->
                                <div class="_breadcumDiv">
                                    <ul>
                                        <li><a href="#">{{ $title }}</a>/ </li>   
                                        <li><a href="#">{{ $subTitle }}</a></li>
                                    </ul>
                                </div>
                                <!-- End -->
                                <div class="_bCard__bdy">

                                </div>
                            </div>
                            <!-- End : Border Card -->

                            <!-- Begin: Border Card -->
                            
                            <!-- End : Border Card -->

                            <!-- Begin: Border Card -->
                            <div class="_bCard" id="packages">
                                <!-- Begin:  Header  -->
                                <div class="_bCard__hdr">
                                    <div class="_bCard__heading">Pricing</div>
                                    <div class="_bCard__desc">
                                       
                                    </div>
                                </div>   
                                <!-- End:  Header -->
                                <!-- Begin: Border card Body -->                             
                                <div class="_bCard__bdy _borderBtm">
                             
                              @guest
                                   <center>
                                        <a href="javascript:;" data-toggle="modal" data-target="#signupModal" class="btn  create_acc_btn" style="width: 500px;">Create an Account to See Price</a>
                                   </center>

                              @endguest
                              @auth
                                   
                                    <div class="table-responsive">
                                     <table class="table table-bordered table-striped   _pTable">
                                         <thead>
                                             <tr>
                                                 <th>Package</th>
                                                 <th>
                                                     <span class="_price">@doller($gigs->gigPrice->premium_price)</span>
                                                     <span class="_type">Premium</span>
                                                     <span class="_title">{{ $gigs->gigPrice->premium_package_name ?? "" }}</span>
                                                     <span class="_desc">
                                                         {{ $gigs->gigPrice->premium_description ?? "" }}
                                                     </span>
                                                 </th>
                                                 <th>
                                                      <span class="_price">@doller($gigs->gigPrice->standard_price)</span>
                                                      <span class="_type">Standard</span>
                                                      <span class="_title">{{ $gigs->gigPrice->standard_package_name ?? "" }}</span>
                                                      <span class="_desc">
                                                            {{ $gigs->gigPrice->standard_description ?? "" }}
                                                      </span>
                                                 </th>
                                                 <th>
                                                      <span class="_price">@doller($gigs->gigPrice->basic_price)</span>
                                                      <span class="_type">Basic</span>
                                                      <span class="_title">{{ $gigs->gigPrice->basic_package_name ?? "" }}</span>
                                                      <span class="_desc">
                                                              {{ $gigs->gigPrice->basic_description ?? "" }}
                                                      </span>
                                                 </th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                          @foreach($scopes as $scope)
                                 
                                             <tr>
                                                 <td>{{ $scope->name }}</td>
                                                 <td><span class="{{ in_array($scope->id,$checkbox['premium'])?'_txtGreen':'' }}"><i class="fas fa-check"></i></span></td>
                                                 <td><span class="{{ in_array($scope->id,$checkbox['standard'])?'_txtGreen':'' }}"><i class="fas fa-check"></i></span></td>
                                                 <td><span class="{{ in_array($scope->id,$checkbox['basic'])?'_txtGreen':'' }}"><i class="fas fa-check"></i></span></td>
                                             </tr>
                                 
                                          @endforeach
                                            
                                                  <td>Delivery Time</td>
                                                  <td>{{ $gigs->gigPrice->premium_delivery_time." days" ?? "" }}</td>
                                                  <td>{{ $gigs->gigPrice->standard_delivery_time." days" ?? "" }}</td>
                                                  <td>{{ $gigs->gigPrice->basic_delivery_time." days" ?? "" }}</span></td>
                                              </tr>
                                              <tr>
                                                  <td></td>
                                                  <td>
      <a href="{{ route('make.orders',[$gigs->id,'premium']) }}" class="btn _btnSuccess">Select (@doller($gigs->gigPrice->premium_price))</a>
                                                  </td>
                                                  <td>
      <a href="{{ route('make.orders',[$gigs->id,'standard']) }}" class="btn _btnSuccess">Select (@doller($gigs->gigPrice->standard_price))</a>
                                                </td>
                                                  <td>
      <a href="{{ route('make.orders',[$gigs->id,'basic']) }}" class="btn _btnSuccess">Select (@doller($gigs->gigPrice->basic_price))</a>
                                                </td>
                                              </tr>
                                         </tbody>
                                     </table>
                                 </div>
                              @endauth
                                   <!-- End : Package Table  -->
                                </div>
                                <!-- End: Border card Body -->  
                                <!-- Begin: Msg Box -->                             
                              
                                <!-- End: Msg Box -->  
                            </div>
                            <!-- End : Border Card -->
<div class="_bCard" id="description">
                                <!-- Begin:  Header  -->
                                <div class="_bCard__hdr">
                                    <div class="_bCard__heading">About This Gig</div>
                                    <div class="_bCard__desc">
                                        
                                    </div>
                                </div>   
                                <!-- End:  Header -->
                                <!-- Begin: Border card Body -->                             
                                <div class="_bCard__bdy" >
                                    {!! $gigs->describe_your_gig !!}
                                    
                                </div>
                                <!-- End: Border card Body -->  
                             <!--    Begin: Msg Box                             
                             <div class="_bCard__footer _blueBg">
                                  <p>Satisfaction Guaranteed. If you have any questions, drop me a message.</p>  
                                  <a href="#" class="btn _whiteBtn">Message</a>                                
                             </div> -->
                                <!-- End: Msg Box -->  
                            </div>
                           
      @isset ($gigs->gigFaqs[0])
          
     
                            <div class="_bCard" id="description">
                                
                                <div class="_bCard__hdr">
                                    <div class="_bCard__heading">FAQ</div>
                                    <div class="_bCard__desc">
                                        
                                    </div>
                                </div>   
                                                        
                               <div class="faq-box _mT25">
            <div id="accordion">

              @foreach ($gigs->gigFaqs as $faq)
              
          
                <div class="_card">
                    <div class="_card-header" id="headingOne{{ $faq->id ?? '' }}">
                        <h5 class="mb-0">
                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseOne{{ $faq->id ?? '' }}" aria-expanded="false" aria-controls="collapseOne{{ $faq->id ?? '' }}">
                                {{ $faq->question ?? '' }}
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne{{ $faq->id ?? '' }}" class="collapse" aria-labelledby="headingOne{{ $faq->id ?? '' }}" data-parent="#accordion" style="">
                        <div class="_card-body">
                            <p>{{ $faq->answer ?? '' }}</p>
                        </div>
                    </div>
                </div>
              @endforeach
                
                
                
            </div>
        </div>
                                
                            </div>
     @endisset
                            <!-- Begin: Border Card -->
                            <div class="_bCard" id="reviews">
                                <!-- Begin:  Header  -->
                                <!-- <div class="_bCard__hdr">
                                       <div class="_bCard__heading">Reviews</div>
                                       <div class="_bCard__desc">
                                           <select name="" id="" class="form-control2">
                                               <option value="">Shor By: </option>
                                               <option value="">Name</option>
                                               <option value="">Time</option>
                                               <option value="">Liked</option>
                                           </select>
                                       </div>
                                   </div> -->   
                                <!-- End:  Header -->
                                <div class="_flexDiv _linerTabCont">
                                    <ul class="nav nav-tabs _linearTab">
                                        <li class="active"><a data-toggle="tab" href="#home" class="active">User comments  </a></li>
                                        <li><a data-toggle="tab" href="#menu1">Buyer ratings</a></li>                                        
                                    </ul>
                                    <div class="_ratingDiv">
                                        <ul class="_ratingStar">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>(589)</span>
                                    </div>
                                </div>
                                <!-- Begin: Border card Body -->                             
                                <div class="_bCard__bdy" >
                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active show">
                                            <div class="_reviewCont">
                                                <figure class=""><img src="{{ url("public/storage/images/user-img-2.png") }}" alt=""></figure>
                                                <div>
                                                    <div class="_reviewHead">
                                                        <span class="_rName">jocisub</span> 9 months ago
                                                    </div>
                                                    <p>
                                                    This considerably has reduced the amount of work to both the companies and the employees. But yet again, people are facing some issues with this system. http://my-estub.info/myestub-login-employee-sign-in/
                                                    </p>
                                                    <div>
                                                        <ul class="_ratingStar">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            Ratings
                                        </div>                                        
                                    </div>
                                </div>
                                <!-- End: Border card Body -->  
                                <!-- Begin: Msg Box -->                             
                             <!--    <div class="_bCard__footer _blueBg">
                                  <p>Satisfaction Guaranteed. If you have any questions, drop me a message.</p>  
                                  <a href="#" class="btn _whiteBtn">Message</a>                                
                             </div> -->
                                <!-- End: Msg Box -->  
                            </div>
                            <!-- End : Border Card -->
                            <!-- Begin -->
                            <div></div>
                            <!-- End -->
                            <!-- Begin -->
                            <div></div>
                            <!-- End -->
                        </div>
                    </div>
                    <!-- End: Col  -->
                    <!-- Begin: Col  -->
                    <div class="col-lg-4">
                        <div class="_outerLayout">
                            <div class="_sellerCard">
                                <div class="_user-info">
                                      @guest
                                    <div class="text-center _mB15">
                                        
                                        <a href="javascript:;" data-toggle="modal" data-target="#signupModal" class="btn  create_acc_btn">Create an Account to See Price</a>
                                    </div>
                                    @endguest
                                    <div class="_userFig-div">
                                        <figure class="_user-fig"><img src="{{ url("public/storage/")."/".$gigs->user->userDetail->avatar }}" alt=""></figure>
                                    </div>
                                    <div class="_user-pro-leble">
                                        <a href="#" class="_name">{{ $gigs->user->name }}</a>
                                        <span class="_expertIn">
                          @foreach($gigs->user->skill as $skill)
                                  {{ $skill->skill_name }}
                          @endforeach

                                        </span>
                                        <div class="_ratingWrapper">
                                            <span class="_starRating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="_textRating"><strong>5.0</strong> (0 reviews)</span>
                                        </div>
                                        <a href="#" class="btn ">Contact Me</a>
                                    </div>
                                </div>
                                <div class="_userStatus">
                                    <ul class="_userStatus-ul">
                                        <li><span class="_uLft"><i class="fas fa-map-marker-alt"></i> From</span> <strong>{{ $gigs->user->userBillingAaddresses->country_id ?? "" }}</strong></li>
                                        <li><span class="_uLft"><i class="fas fa-user"></i> Member since</span> 
                                         <strong>{{date('M Y',strtotime($gigs->user->created_at))  }}</strong></li>
                                        <li><span class="_uLft"><i class="fas fa-clock"></i> Avg. Response Time</span><strong> 9 hours</strong></li>
                                        <li><span class="_uLft"><i class="fas fa-paper-plane"></i> Recent Delivery</span> <strong>about 48 minutes</strong></li>
                                    </ul>                                
                                </div>
                                <div class="_seller-desc">
                                    <p>{{ $gigs->user->userDetail->description}} </p>
                                    {{-- <a href="#">+ See More</a> --}}
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End: Col  -->
                </div>
            </div>
            <!-- End: Div -->

        </div>        
    </main>
    <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script>

    $('ul li a').click(function() {
    $('ul li a.active').removeClass('active');
    $(this).closest('a').addClass('active');
});


</script>
@endsection