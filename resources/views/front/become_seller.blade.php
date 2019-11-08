@extends('layouts.app')


@section("content")
    <!-- Main Begin here -->
    <main class="main_body">
    <!-- Begin : Banner --->
    <section class="_innerBanner _becomeSellerBanner">
        <img src="{{ asset("public/storage/images/become-seller-banner.jpg") }}" alt="" class="img-fluid _bannerImg">  
        <div class="_bannerContent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="_bannerTxtDiv text-center">
                            <h2 class="_bHeading wow _fadeInLeft" data-wow-delay="0.3s">Work Your <span class="_themeBlue">Way</span></h2>
                            <p class="_bTag wow _fadeInLeft" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br> do eiusmod tempor incid</p>                              
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
    <!-- End   : Banner --->

    <!-- Begin: Team section  -->
    <section class="_teamSection _commonPadding _grayBg">
        <div class="container">            
            <!-- Begin: Heading -->
            <div class="_headingDiv text-center">
                <h2 class="_headingTxt">Join Our Growing Freelance Community</h2>                   
            </div>
            <!-- End : Heading  -->
            <div class="row">
                <!-- Begin : col -->
                <div class="_cusCol">
                    <figure class="_memFig">
                        <img src="{{ asset("public/storage/images/team-mem-1.jpg") }}" alt="">                        
                        <figcaption>Lorem Ipsum</figcaption>
                    </figure>
                </div>
                <!-- End : col -->
                <!-- Begin : col -->
                <div class="_cusCol">
                    <figure class="_memFig">
                        <img src="{{ asset("public/storage/images/team-mem-2.jpg") }}" alt="">                        
                        <figcaption>Lorem Ipsum</figcaption>
                    </figure>
                </div>
                <!-- End : col -->
                <!-- Begin : col -->
                <div class="_cusCol">
                    <figure class="_memFig">
                        <img src="{{ asset("public/storage/images/team-mem-3.jpg") }}" alt="">                        
                        <figcaption>Lorem Ipsum</figcaption>
                    </figure>
                </div>
                <!-- End : col -->
                <!-- Begin : col -->
                <div class="_cusCol">
                    <figure class="_memFig">
                        <img src="{{ asset("public/storage/images/team-mem-4.jpg") }}" alt="">                        
                        <figcaption>Lorem Ipsum</figcaption>
                    </figure>
                </div>
                <!-- End : col -->
                <!-- Begin : col -->
                <div class="_cusCol">
                    <figure class="_joinDiv">
                        <span><i class="fas fa-heart"></i></span>                     
                        <h5>Love to Work ?</h5>                        
                        <p>Join us Today and</p>
                        <a href="#" class="btn _whiteBtn">Become a Seller</a>
                    </figure>
                </div>
                <!-- End : col -->
            </div>
               
        </div>
    </section>
    <!-- End:   Team section  -->

    <!-- Begin: How it work  -->
    <section class="_howWeWork _commonPadding">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv text-center">
                <h2 class="_headingTxt">How It Works</h2>    
                <p class="_headingTag">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi</p>               
            </div>
            <!-- End : Heading  -->
            <div class="row _borderCardRow">               
                <!-- Begin : Col -->
                <div class="col-md-4">
                    <div class="_borderCardDiv wow fadeIn">
                        <figure class="_borderCardFig"><img src="{{ asset("public/storage/images/work-step-1.png") }}" alt="Marketing"></figure>
                        <div class="_borderCardBody">
                            <p class="_borderCardTxt">1. Create A Gig</p>
                            <p>Sign up for free, set up your Gig, and offer your work to our global audience.</p>
                        </div>
                    </div>
                </div>
                <!-- End : Col -->
                <!-- Begin : Col -->
                <div class="col-md-4">
                    <div class="_borderCardDiv wow fadeIn">
                        <figure class="_borderCardFig"><img src="{{ asset("public/storage/images/work-step-2.png") }}" alt="Marketing"></figure>
                        <div class="_borderCardBody">
                            <p class="_borderCardTxt">2. Deliver Great Work</p>
                            <p>Get notified when you get an order and use our system to discuss details with customers.</p>
                        </div>
                    </div>
                </div>
                <!-- End : Col -->
                <!-- Begin : Col -->
                <div class="col-md-4">
                    <div class="_borderCardDiv wow fadeIn">
                        <figure class="_borderCardFig"><img src="{{ asset("public/storage/images/work-step-3.png") }}" alt="Marketing"></figure>
                        <div class="_borderCardBody">
                            <p class="_borderCardTxt">3. Get Paid</p>
                            <p>Get paid on time, every time. Payment is transferred to you upon order completion.</p>
                        </div>
                    </div>
                </div>
                <!-- End : Col -->
            </div>            
        </div>
    </section>
    <!-- End:   How it work  -->

    <!-- Begin: Post a request  -->
    <section class="_blueBg _subsSection">
        <div class="container">
            <div class="_subsDiv">
                <p>Sign up and create your first Gig today</p>
                @if(Auth::check())
                    <a href="{{ route("gig.index") }}" class="btn _whiteBtn">Get Started</a>
                @else
                     <a href="javascript:;" class="btn _whiteBtn" data-toggle="modal" data-target="#loginModal">Get Started</a>
                      
                @endif
                
            </div>           
        </div>
    </section>
    <!-- End:   Post a request  -->
    <!-- Begin: Testimonial section  -->
    <section class="_testimonial _commonPadding">
        <div class="container ">
            <!-- Begin: Heading -->
            <div class="_headingDiv text-center">
                <h2 class="_headingTxt">Buyer Stories</h2>                
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

@endsection