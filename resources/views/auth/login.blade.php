@extends('layouts.app')

@section('content')


    <!-- Main Begin here -->
    <main class="main_body">
    <!-- Begin : Banner --->
    <section class="_banner">
        <img src="{{ asset("public/storage/$home->banner_image") }}" alt="" class="img-fluid _bannerImg">  
        <div class="_bannerContent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ml-auto">
                        <div class="_bannerTxtDiv">
                            <h2 class="_bHeading wow _fadeInRight" data-wow-delay="0.3s">{!! $home->first_header ?? '' !!}</h2>
                            <p class="_bTag wow _fadeInRight" data-wow-delay="0.7s">{!! $home->first_subheader ?? '' !!}</p>
                            <!-- <div class="_searchDiv _searchDiv2 wow _fadeInRight" data-wow-delay="1.0s">
                                <form action="">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="_subBtn btn">Search</button>
                                </form>
                            </div> -->
                            <!-- Begin: Number list -->
                            <ul class="_numLists wow _fadeInRight" data-wow-delay="1.3s">
                                <li class="_numList">
                                    <p class="_numCount">{{ $home->first_professional ?? '' }}</p>
                                    <span class="_numText">Professionals</span>
                                </li>
                                <li class="_numList">
                                    <p class="_numCount">{{ $home->first_seller_earning ?? '' }}</p>
                                    <span class="_numText">Seller Earnings</span>
                                </li>
                                <li class="_numList">
                                    <p class="_numCount">{{ $home->first_affiliate_earning ?? '' }}</p>
                                    <span class="_numText">Affiliate Earnings</span>
                                </li>
                            </ul>
                            <!-- End: Number list -->
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
    <!-- End   : Banner --->
    <!-- Begin : Explore section --->
    <section class="_exploreSec _commonPadding">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv text-center">
                <h2 class="_headingTxt">Explore The Marketplace</h2>
            </div>
            <!-- End : Heading -->
            <div class="_sliderDiv">
                <div class="owl-carousel owl-theme" id="exploreSlider">
                    <!-- item begin-->
                    @foreach($marketplace as $market)
                    <div class="item ">
                        <div class="_imgCardDiv wow fadeIn">
                              <a href="{{ url($market->link) }}">
                            <figure class="_imgCardFig"><img src="{{ asset("public/storage/$market->icon") }}" alt="{{ $market->title }}"></figure></a>
                            <div class="_imgCardBody">
                                <a href="{{ url($market->link) }}">
                               <p class="_imgCardTxt">{{ $market->title }}</p>
                               </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- item end-->   
                    
           
                </div>
            </div>
        </div>
    </section>
    <!-- End : Explore section --->

    <!-- Begin: Service section  -->
    <section class="_serviceSec _commonPadding">
        <div class="container">
            <div class="_headerDiv">
                <!-- Begin: Heading -->
                <div class="_headingDiv">
                    <h2 class="_headingTxt">{{ $home->third_title ?? '' }}</h2>
                    <p class="_headingTag">{{ $home->third_subtitle ?? '' }}</p>
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
                              <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}">   
                                <figure class="_infoBox__img">
                                    <img src="{{ asset("public/storage/$gig->gig_photo_one") }}" alt="">
                                </figure> 
                            </a>
                                <div class="_infoBox__desc">
                                    <div class="_infoBox__desc1">
                                        <div class="_about">
                                            <div class="_aboutSeller">
                                                <figure class="_proImg"><img src="{{ url("public/storage/$avatar") }}" alt=""></figure>
                                                <div class="_proInfo">
                                                    <span class="_proName">{{ $gig->user->name }}</span>
                                                    <span class="_proCat">4 Star Seller</span>
                                                </div>
                                            </div>
                                            <div class="_feedSec">
                                                <span class="_likeBtn _liked" data-toggle="modal" data-target="#signupModal"><i class="far fa-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_infoBox__desc2">
                                         <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}"> 
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

     <!-- Begin: Buy and Make section  -->
     <section class="_buyMakeSec _commonPadding">
        <div class="container">
            <div class="row">
                <!-- Begin : col -->
                <div class="col-md-6">
                    <div class="_textCard2 _blueGradient">
                        <figure class="_textCard2__fig">
                            <img src="{{ asset("public/storage/images/card-bg-img-1.png") }}" alt="">
                        </figure>
                        <div class="_textCard2__content">
                            <p class="_textCard2__heading">{{$home->fourth_title_card_one ?? ''}}</p>
                            <p>{{ $home->fourth_description_card_one ?? '' }}</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#signupModal" class="btn _btn2">Join Now</a>
                        </div>
                    </div>
                </div>
                <!-- Begin : End  -->
                <!-- Begin : col -->
                 <div class="col-md-6">
                    <div class="_textCard2 _greenGradient">
                        <figure class="_textCard2__fig">
                            <img src="{{ asset("public/storage/images/card-bg-img-2.png") }}" alt="">
                        </figure>
                        <div class="_textCard2__content">
                            <p class="_textCard2__heading">{{ $home->fourth_title_card_two ?? '' }}</p>
                            <p>{{ $home->fourth_description_card_two ?? '' }}</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#signupModal" class="btn _btn2">Join Now</a>
                        </div>
                    </div>
                </div>
                <!-- Begin : End  -->
            </div>
            
        </div>
    </section>
    <!-- End:   Buy and Make section  -->
    <!-- Begin: Populor Service section  -->
    <section class="_populorSerSec _commonPadding">
        <div class="container ">
            <!-- Begin: Heading -->
            <div class="_headingDiv text-center">
                <h2 class="_headingTxt">{{ $home->fifth_title ?? '' }}</h2>
                <p class="_headingTag">{{ $home->fifth_sub_title ?? '' }}</p>
            </div>
            <!-- End : Heading  -->  
            <div class="_galDiv">
                <div class="row">
                    <div class="col-md-5 _col">
                         <a href="{{ url("programming-tech/wordpress") }}">
                        <figure class="_figBox _figType1">
                            <img src="{{ asset("public/storage/images/populor-img-1.jpg") }}" alt="">
                            <figcaption>
                                <div class="_figCont">
                                      <a href="{{ url("programming-tech/wordpress") }}">
                                    <p class="_figHeading">Wordpress</p></a>
                                    <p>Customize Your Site</p>
                                </div>                            
                            </figcaption>
                        </figure>
                    </a>
                    </div>
                    <div class="col-md-7 _col">
                        <div class="row">
                            <div class="col-md-6 _col">
                                <a href="{{ url("graphic-design/logo-design") }}">
                                <figure class="_figBox _figType2">
                                    <img src="{{ asset("public/storage/images/populor-img-2.jpg") }}" alt="">
                                    <figcaption>
                                        <div class="_figCont">
                                           <a href="{{ url("graphic-design/logo-design") }}">
                                            <p class="_figHeading">Logo Design</p>
                                            </a>
                                            <p>Build Your Brand</p>
                                        </div>                            
                                    </figcaption>
                                </figure>
                            </a>
                                <!-- Fig div end   -->
                                <!-- Fig div begin  -->
                                  <a href="{{ url("digital-market/seo") }}">
                                <figure class="_figBox _figType3">
                                    <img src="{{ asset("public/storage/images/populor-img-3.jpg") }}" alt="">
                                    <figcaption>
                                        <div class="_figCont">
                                             <a href="{{ url("digital-market/seo") }}">
                                            <p class="_figHeading">SEO Service</p>
                                            </a>
                                            <p>Build Your Brand</p>
                                        </div>                            
                                    </figcaption>
                                </figure>
                            </a>
                                <!-- Fig div end   -->
                            </div>
                            <div class="col-md-6 _col">
                                    <!-- Fig div begin  -->
                                       <a href="{{ url("music-audio/voice-over") }}">
                                    <figure class="_figBox _figType3">
                                    <img src="{{ asset("public/storage/images/populor-img-4.jpg") }}" alt="">
                                    <figcaption>
                                        <div class="_figCont">
                                              <a href="{{ url("music-audio/voice-over") }}">
                                            <p class="_figHeading">Voice Over</p>
                                            </a>
                                            <p>Share Your Message</p>
                                        </div>                            
                                    </figcaption>
                                </figure>
                            </a>
                                <!-- Fig div end   -->
                                <!-- Fig div begin  -->
                                    <a href="{{ url("graphic-design/book-album-covers") }}">
                                <figure class="_figBox _figType2">
                                    <img src="{{ asset("public/storage/images/populor-img-5.jpg") }}" alt="">
                                    <figcaption>
                                        <div class="_figCont">
                                               <a href="{{ url("graphic-design/book-album-covers") }}">   
                                            <p class="_figHeading">Book Covers</p>
                                            </a>
                                            <p>Showcase Your Story</p>
                                        </div>                            
                                    </figcaption>
                                </figure>
                            </a>
                                <!-- Fig div end   -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:  Populor  Service section  -->

    <!-- Begin: Why us section  -->
    <section class="_whyUs _commonPadding" style="background:url('{{ asset("public/storage/{$home->section_image}") }}')  #f3f4f7 no-repeat left">
        <div class="container ">
            <div class="row">
                <div class="col-md-8 ml-auto">
                    <!-- Begin: Heading -->
                    <div class="_headingDiv">
                        <h2 class="_headingTxt">{!! $home->sixth_header ?? '' !!}</h2>                
                    </div>
                    <!-- End : Heading  -->
                    
                    <ul class="_infoList">
                        <li class="wow fadeIn">
                            <p class="_infoListHead">{!! $home->sixth_first_title ?? '' !!}</p> 
                            <p class="_infoListTxt">{!! $home->sixth_first_subtitle ?? '' !!}</p>       
                        </li>
                        <li class="wow fadeIn">
                            <p class="_infoListHead">{!! $home->sixth_second_title ?? '' !!}</p> 
                            <p class="_infoListTxt">{!! $home->sixth_second_subtitle ?? '' !!}</p>       
                        </li>
                        <li class="wow fadeIn">
                            <p class="_infoListHead">{{ $home->sixth_third_title ?? '' }}</p> 
                            <p class="_infoListTxt">{{ $home->sixth_third_subtitle }}</p>       
                        </li>
                    </ul>                     
                    
                </div>
            </div>
            
        </div>
    </section>
    <!-- End: Why us section  -->
    <!-- Begin: Service section  -->
    <section class="_serviceSec _commonPadding">
        <div class="container">            
            <!-- Begin: Heading -->
            <div class="_headingDiv">
                <h2 class="_headingTxt">{{ $home->seven_title ?? '' }}</h2>
                <p class="_headingTag">{{ $home->seven_sub_title ?? '' }}</p>
            </div>
            <!-- End : Heading  -->                
            
            <!-- Begin:  Slider2  -->
            <div class="_sliderDiv2">
                <div class="owl-carousel owl-theme" id="sellerSlider">
                    <!-- item begin-->
                     @foreach ($weekly as $gig)

                    @php 
                         $avatar = $gig->user->userDetail->avatar;
                    @endphp
                    <!-- item begin-->
                    <div class="item ">
                        <!-- Begin: Info Box -->
                        <div class="_infoBox__outter">
                            <div class="_infoBox__inner">    
                                <figure class="_infoBox__img">
                                    <img src="{{ asset("public/storage/$gig->gig_photo_one") }}" alt="">
                                </figure> 
                                <div class="_infoBox__desc">
                                    <div class="_infoBox__desc1">
                                        <div class="_about">
                                            <div class="_aboutSeller">
                                                <figure class="_proImg"><img src="{{ url("public/storage/$avatar") }}" alt=""></figure>
                                                <div class="_proInfo">
                                                    <span class="_proName">{{ $gig->user->name }}</span>
                                                    <span class="_proCat">4 Star Seller</span>
                                                </div>
                                            </div>
                                            <div class="_feedSec">
                                                <span class="_likeBtn _liked" data-toggle="modal" data-target="#signupModal"><i class="far fa-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_infoBox__desc2">
                                        <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" >
                                        <p>{{ title_case($gig->gig_title) }}</p>
                                    </a>
                                    </div>
                                </div>
                                <div class="_extraInfo">
                                    <div class="_ratingInfo"><span><i class="fas fa-star"></i> 4.0</span>Rating 4.0 (251)</div>
                                    <div class="_startInfo">Starting at <span>${{ $gig->price }}</span></div>
                                </div>       
                            </div>
                            <!-- Begin:  overlay -->
                            <div class="_infoBox__overlay">
                                <div class="_content">
                                    <p class="_cHeading">   {{ $gig->menu->name ?? ""}}</p>
                                    <p class="_cInfo">{{ $gig->describe_detail_offer }}</p>
                                 <a href="{{ url($gig->menu->slug."/".$gig->submenu->slug."/".$gig->id) }}" style="color: white">   <div class="btn _lineBtn">Find Out More</div></a>
                                </div>
                            </div>
                            <!-- End: overlay -->
                        </div>
                        <!-- End: Info Box -->
                    </div>
                    <!-- item end-->   

                    @endforeach
                    <!-- item end-->    
                     
                              
                </div>
            </div>
            <!-- End:    Slider2 -->
            
            
        </div>
    </section>
    <!-- End:   Service section  -->
    <!-- Begin: Testimonial section  -->
    <section class="_testimonial _commonPadding">
        <div class="container ">
            <!-- Begin: Heading -->
            <div class="_headingDiv text-center">
                <h2 class="_headingTxt">What people Say About Us</h2>                
            </div>
            <!-- End : Heading  -->
            <div class="_sliderDiv">
                <div class="owl-carousel owl-theme" id="testSlider">
                    <!-- item begin-->
                    @foreach($testimonial as $testimon)
                    <div class="item ">
                        <div class="_testCard wow fadeIn">
                            <div class="_testHdr">
                                <p class="_name">{{ title_case($testimon->name) }}</p>
                                <p class="_desg">{{ title_case($testimon->designation) }}</p>
                            </div>
                            <div class="_testBody">
                               <p>{{ $testimon->description }}</p>
                            </div>
                            <div class="_ratingInfo"><span><i class="fas fa-star"></i> {{ $testimon->rate }}.0</span>Rating {{ $testimon->rate }}.0 ({{$testimon->times}})</div>
                        </div>
                    </div>
                    @endforeach
                    <!-- item end-->      
                
                                  
                </div>
            </div>           
        </div>
    </section>
    <!-- End: Testimonial section  -->    
    </main>
    <!-- End: Main  -->
@stop