@extends('layouts.app')

@section("content")
<style>
.heart {
  width: 100px;
  height: 100px;
  position: absolute;

  transform: translate(-50%, -50%);
  background: url(http://imagizer.imageshack.com/img923/4545/XdJDuY.png) no-repeat;  
  cursor: pointer;
  
}
.heart-blast {
  background-position: -2800px 0;
  transition: background 1s steps(28);
}
</style>
    <main class="main_body">
    <!-- Begin : Banner --->
    <section class="_innerBanner">
        <img src="{{ asset("public/storage/images/after-login-banner.jpg") }}" alt="" class="img-fluid _bannerImg">  
        <div class="_bannerContent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="_bannerTxtDiv">
                            <h2 class="_bHeading wow _fadeInLeft" data-wow-delay="0.3s">Have You Tried Hire a Nerd <span class="_themeBlue">Pro?</span></h2>
                      <!--       <p class="_bTag wow _fadeInLeft" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br> do eiusmod tempor incid</p>   -->
                            <a href="#" class="_commonBtn wow _fadeInLeft" data-wow-delay="0.7s">Try Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
    <!-- End   : Banner --->

    <!-- Begin: Post a request  -->
    <section class="_postRequest">
        <div class="container">
            <div class="row">
                <div class="mx-auto">
                    <div class="_postDiv">
                        <div class="_postDivLft">
                            <span class="_profileImg"><img src="{{ asset("public/storage/images/profile-img.png") }}" alt=""></span>
                            <div>
                                @auth
                                <p class="_profileHead">Hi {{ Auth::user()->name }} !</p>
                                @endauth
                                <span>Get offers from sellers for your project</span>
                            </div>
                        </div>
                        <div class="_postDivRight">
                            <a href="#" class="btn _commonBtn">Post a Request</a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <!-- End:   Post a request  -->
    

    <!-- Begin: Service section  -->
    <section class="_serviceSec _commonPadding">
        <div class="container">
            <div class="_headerDiv">
                <!-- Begin: Heading -->
                <div class="_headingDiv">
                    <h2 class="_headingTxt">Recently Viewed & More</h2>
                    <p class="_headingTag">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi</p>
                </div>
                <!-- End : Heading  -->
                <a href="#" class="_commonBtn">View All</a>
            </div>
            <!-- Begin:  Slider2  -->
            <div class="_sliderDiv2">

                <div class="owl-carousel owl-theme" id="serviceSlider">

                    @foreach ($gigs as $gig)

                    @php 
                         $avatar = $gig->user->userDetail->avatar;
                    @endphp
                    <!-- item begin-->
                    <div class="item ">
                        <!-- Begin: Info Box -->
                        <div class="_infoBox__outter">
                            <div class="_infoBox__inner">  
                              <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">  
                                <figure class="_infoBox__img">
                                    <img src="{{ asset("public/storage/$gig->gig_photo_one") }}" alt="">
                                </figure> 
                            </a>
                                <div class="_infoBox__desc">
                                    <div class="_infoBox__desc1">
                                        <div class="_about">
                                            <div class="_aboutSeller">
                                               <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">  
                                                <figure class="_proImg"><img src="{{ url("public/storage/$avatar") }}" alt=""></figure>
                                            </a>
                                                <div class="_proInfo">
                                                    <span class="_proName">{{ $gig->user->name }}</span>
                                                    <span class="_proCat">4 Star Seller</span>
                                                </div>
                                            </div>
                                            <div class="_feedSec">
                                                <span class="_likeBtn _liked"><i class="far fa-heart" data-service='{{ $gig->id }}' ></i></span> 
                                            {{--   <div class="heart"></div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_infoBox__desc2">
                                         <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">
                                        <p>{{ title_case($gig->gig_title) }}</p>
                                    </a>
                                    </div>
                                </div>
                                <div class="_extraInfo">
                                    <div class="_ratingInfo"><span><i class="fas fa-star"></i> 4.0</span>Rating 4.0 (251)</div>
                                    <div class="_startInfo">Starting at <span>${{ $gig->gigPrice->basic_price }}</span></div>
                                </div>       
                            </div>
                            <!-- Begin:  overlay -->
                            <div class="_infoBox__overlay">
                                <div class="_content">
                                    <p class="_cHeading">{{ $gig->menu->name ?? ""}}</p>
                                    <p class="_cInfo">{{ $gig->describe_detail_offer }}</p>
                                       <div class="btn _lineBtn">Find Out More</div>
                                </div>
                            </div>
                            <!-- End: overlay -->
                        </div>
                        <!-- End: Info Box -->
                    </div>
                    <!-- item end-->   

                    @endforeach

                     
                </div>
            </div>
            <!-- End:    Slider2 -->
            
            
        </div>
    </section>
    <!-- End:   Service section  -->

    <!-- Begin: Service section  -->
    <section class="_serviceSec _commonPadding">
        <div class="container">            
            <!-- Begin: Heading -->
            <div class="_headingDiv">
                <h2 class="_headingTxt">Top Picks For You In Logo Design</h2>
                <!-- <p class="_headingTag">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi</p> -->
            </div>
            <!-- End : Heading  -->                
            
            <!-- Begin:  Slider2  -->
            <div class="_sliderDiv2">
                <div class="owl-carousel owl-theme" id="sellerSlider">
                    <!-- item begin-->
                     @foreach ($gigs as $gig)

                    @php 
                         $avatar = $gig->user->userDetail->avatar;
                    @endphp
                    <!-- item begin-->
                    <div class="item ">
                        <!-- Begin: Info Box -->
                        <div class="_infoBox__outter">
                            <div class="_infoBox__inner">    
                                  <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">
                                <figure class="_infoBox__img">
                                    <img src="{{ asset("public/storage/$gig->gig_photo_one") }}" alt="">
                                </figure> 
                            </a>
                                <div class="_infoBox__desc">
                                    <div class="_infoBox__desc1">
                                        <div class="_about">
                                            <div class="_aboutSeller">
                                                  <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">
                                                <figure class="_proImg"><img src="{{ url("public/storage/$avatar") }}" alt=""></figure>
                                            </a>
                                                <div class="_proInfo">
                                                    <span class="_proName">{{ $gig->user->name }}</span>
                                                    <span class="_proCat">4 Star Seller</span>
                                                </div>
                                            </div>
                                            <div class="_feedSec">
                                                <span class="_likeBtn _liked"><i class="far fa-heart" data-service='{{ $gig->id }}' ></i></span> 
                                            {{--   <div class="heart"></div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_infoBox__desc2">
                                         <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">
                                        <p>{{ title_case($gig->gig_title) }}</p>
                                    </a>
                                    </div>
                                </div>
                                <div class="_extraInfo">
                                    <div class="_ratingInfo"><span><i class="fas fa-star"></i> 4.0</span>Rating 4.0 (251)</div>
                                    <div class="_startInfo">Starting at <span>${{ $gig->gigPrice->basic_price }}</span></div>
                                </div>       
                            </div>
                            <!-- Begin:  overlay -->
                            <div class="_infoBox__overlay">
                                <div class="_content">
                                    <p class="_cHeading">{{ $gig->menu->name ?? ""}}</p>
                                    <p class="_cInfo">{{ $gig->describe_detail_offer }}</p>
                                       <div class="btn _lineBtn">Find Out More</div>
                                </div>
                            </div>
                            <!-- End: overlay -->
                        </div>
                        <!-- End: Info Box -->
                    </div>
                    <!-- item end-->   

                    @endforeach
                           
                </div>
            </div>
            <!-- End:    Slider2 -->        
            
        </div>
    </section>
    <!-- End:   Service section  -->

    <!-- Begin: Section  -->
    <section class="_grayBg _commonPadding">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv">
                <h2 class="_headingTxt">Similar To Services You've Viewed</h2>               
            </div>
            <!-- End : Heading  -->
            <div class="row _infoBoxRow">
            
                  
               
                 @foreach ($gigs as $gig)

                    @php 
                         $avatar = $gig->user->userDetail->avatar;
                    @endphp
                <!-- Begin: Col -->
                <div class="col-lg-3 col-md-4">
                    <!-- Begin: Info Box -->
                    <div class="_infoBox__outter">
                        <div class="_infoBox__inner"> 
                          <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">   
                            <figure class="_infoBox__img">
                                <img src="{{ asset("public/storage/$gig->gig_photo_one") }}" alt="">
                            </figure> 
                        </a>
                            <div class="_infoBox__desc _bgWhite">
                                <div class="_infoBox__desc1">
                                    <div class="_about">
                                        <div class="_aboutSeller">
                                              <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">
                                            <figure class="_proImg"><img src="{{ url("public/storage/$avatar") }}" alt=""></figure>
                                        </a>
                                            <div class="_proInfo">
                                                <span class="_proName">{{ $gig->user->name }}</span>
                                                <span class="_proCat">4 Star Seller</span>
                                            </div>
                                        </div>
                                        <div class="_feedSec">
                                            <span class="_likeBtn _liked"><i class="far fa-heart" data-service='{{ $gig->id }}' ></i></span> 
                                        {{--   <div class="heart"></div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="_infoBox__desc2">
                                    <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">
                                  <p>{{ title_case($gig->gig_title) }}</p>
                                </a>
                                </div>
                            </div>
                            <div class="_extraInfo">
                                <div class="_ratingInfo"><span><i class="fas fa-star"></i> 4.0</span>Rating 4.0 (251)</div>
                                <div class="_startInfo">Starting at <span>${{ $gig->gigPrice->basic_price }}</span></div>
                            </div>       
                        </div>
                        <!-- Begin:  overlay -->
                        <div class="_infoBox__overlay">
                            <div class="_content">
                                <p class="_cHeading">Website<br >Design</p>
                                <p class="_cInfo">I will design creative website ui template in photoshop</p>
                                <div class="btn _lineBtn">Find Out More</div>
                            </div>
                        </div>
                        <!-- End: overlay -->
                    </div>
                    <!-- End: Info Box -->
                </div>
                <!-- End: Col -->
                   @endforeach
                <!-- Begin: Col -->
                
                <!-- End: Col -->
                
                <!-- End: Col -->
                <!-- Begin: Col -->
                
                <!-- End: Col -->
                <!-- Begin: Col -->
                
                <!-- End: Col -->
                <!-- Begin: Col -->
                
                <!-- End: Col -->
                
                <!-- End: Col -->
            </div>
        </div>
    </section>
    <!-- End:   Section  -->

    <!-- Begin: Section  -->
    <section class="_commonPadding">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv">
                <h2 class="_headingTxt">Editors' Picks</h2>               
            </div>
            <!-- End : Heading  -->
            <div class="row _infoBoxRow">
                <!-- Begin: Col -->
                   
               
                 @foreach ($gigs as $gig)

                    @php 
                         $avatar = $gig->user->userDetail->avatar;
                    @endphp
                <!-- Begin: Col -->
                <div class="col-lg-3 col-md-4">
                    <!-- Begin: Info Box -->
                    <div class="_infoBox__outter">
                        <div class="_infoBox__inner">   
                          <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white"> 
                            <figure class="_infoBox__img">
                                <img src="{{ asset("public/storage/$gig->gig_photo_one") }}" alt="">
                            </figure> 
                        </a>
                            <div class="_infoBox__desc">
                                <div class="_infoBox__desc1">
                                    <div class="_about">
                                        <div class="_aboutSeller">
                                              <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">
                                            <figure class="_proImg"><img src="{{ url("public/storage/$avatar") }}" alt=""></figure>
                                        </a>
                                            <div class="_proInfo">
                                                <span class="_proName">{{ $gig->user->name }}</span>
                                                <span class="_proCat">5 Star Seller</span>
                                            </div>
                                        </div>
                                        <div class="_feedSec">
                                            <span class="_likeBtn _liked"><i class="far fa-heart" data-service='{{ $gig->id }}'  ></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="_infoBox__desc2">
                                    <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">
                                  <p>{{ title_case($gig->gig_title) }}</p>
                                </a>
                                </div>
                            </div>
                            <div class="_extraInfo">
                                <div class="_ratingInfo"><span><i class="fas fa-star"></i> 4.0</span>Rating 4.0 (251)</div>
                                <div class="_startInfo">Starting at <span>${{ $gig->gigPrice->basic_price }}</span></div>
                            </div>       
                        </div>
                        <!-- Begin:  overlay -->
                        <div class="_infoBox__overlay">
                            <div class="_content">
                                <p class="_cHeading">Website<br >Design</p>
                                <p class="_cInfo">I will design creative website ui template in photoshop</p>
                                <div class="btn _lineBtn">Find Out More</div>
                            </div>
                        </div>
                        <!-- End: overlay -->
                    </div>
                    <!-- End: Info Box -->
                </div>
                <!-- End: Col -->
                   @endforeach
                <!-- End: Col -->
                <!-- Begin: Col -->
                
                <!-- End: Col -->
                <!-- Begin: Col -->
                
                <!-- End: Col -->
                
                <!-- End: Col -->
                <!-- Begin: Col -->
                
                <!-- End: Col -->
                <!-- Begin: Col -->
                
                <!-- End: Col -->
                <!-- Begin: Col -->
                
                <!-- End: Col -->
                
                <!-- End: Col -->
            </div>
        </div>
    </section>
    <!-- End:   Section  -->

<script>
    $(document).ready(function(){
        $(".far").click(function(){
            var ele = $(this).data('service');

            $.post('{{ route('wishlist.store') }}', { _token: '{{ csrf_token() }}',service_id:ele });

            if($(`i[data-service = ${ele}]`).attr('class') == 'far fa-heart'){

               $(`i[data-service = ${ele}]`).removeClass('far fa-heart').addClass('fas fa-heart');
            }else{

                $(`i[data-service = ${ele}]`).removeClass('fas fa-heart fa-bounce').addClass('far fa-heart');
            }
        });

        $.each(@json($wish), function(index, val) {

            $(`i[data-service = ${val.gig_id}]`).removeClass('far fa-heart').addClass('fas fa-heart');

        });
    });
</script>
<script>
$(function() {
 
  $(".heart").on("click", function() {
    $(this).toggleClass("heart-blast");
  });
}); 
 
</script> 

@endsection