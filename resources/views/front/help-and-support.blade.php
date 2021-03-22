@extends('layouts.app')
@section('content')
<main class="main_body">
    <!-- Begin : Banner --->
    <section class="_banner service_inner_banner">
        <img src="{{ url('public/storage/images/banner-1.png') }}" alt="" class="img-fluid _bannerImg">  
        <div class="_bannerContent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 center_content">
                        <div class="_bannerTxtDiv">
                            <h2 class="_bHeading center_perfect_service wow _fadeInRight" data-wow-delay="0.3s">Find The Perfect Services <br> For Your Business</h2>
                            <div class="_searchDiv _searchDiv2 _searchDiv3 wow _fadeInRight" data-wow-delay="1.0s">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
    <!-- End   : Banner --->
    
    <!-- Start Buyer Tab sec -->
        
        <div class="buyer_tab_sec">
            <div class="buyer_center">
                <div class="container">
                    <ul class="buy_sell">
                        <li class="buy_active">
                            <a href="#BUY">Buyers</a>
                        </li>
                        <li>
                            <a href="#SELL">Sellers</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="popular_tropic">
                <div class="container">
                    <h5>Popular Topics</h5>
                    <!-- Begin four_popular_tropic -->
                    <div class="four_popular_tropic">
                        <!-- Begin BUYER Tab -->
                        <div id="BUY" class="buyer_seller_active">
                            <!-- Begin Row -->
                            <div class="row">
                        @foreach ($helpCategory->whereType(2)->get() as $topic)
                            
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="innerbox">
                                    <div class="icon">
                                        <img src="{{ url("public/{$topic->icon}") }}" alt="">
                                    </div>
                                    <a href="{{ route('help.detail',[$topic->id,]) }}">{{ $topic->title ?? '' }}</a>
                                </div>
                            </div>
                        @endforeach
                        
                        </div>
                            <!-- End Row -->
                        </div>
                        <!-- End BUYER Tab -->
                         <!-- Begin SELLER Tab -->
                        <div id="SELL" class="buyer_seller_active">
                            <!-- Begin Row -->
                            <div class="row">
                            
                            @foreach ($helpCategory->whereType(1)->get() as $topic)
                            
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <div class="innerbox">
                                        <div class="icon">
                                            <img src="{{ url("public/{$topic->icon}") }}" alt="">
                                        </div>
                                        <a href="{{ route('help.detail',[$topic->id]) }}">{{ $topic->title ?? '' }}</a>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                            <!-- End Row -->
                        </div>
                        <!-- End SELLER Tab -->
                    </div>
                    <!-- End four_popular_tropic -->
                </div>
            </div>
        </div>
        
    <!-- end Buyer Tab sec -->
    
    </main>
{{-- <div class="row">
                    <div class="col-lg-10 col-md-12 mx-auto">
                        <div class="_faqContainer">
                            
                        
                            <div class="row _faq-row">
                                <div class="col-md-3 _faq-col">
                                    <ul class="nav nav-tabs _faqTabs">
                                    	@foreach ($helpCategories as $category)
                                    		@if ($loop->first)
                                    			<li class="active"><a data-toggle="tab" href="#faq-sec-{{ $category->id }}" class="active">{{ $category->title ?? '' }}</a></li>
                                    		@else
                                    			<li><a data-toggle="tab" href="#faq-sec-{{ $category->id }}">{{ $category->title ?? '' }}</a></li>
                                    		@endif
                                    	@endforeach
                                        
                                        
                                    </ul>
                                </div>
                                <div class="col-md-9 _faq-col">
                                    <div class="tab-content">
                                    	@foreach ($helpCategories as $category)
                                    		
                                        <div id="faq-sec-{{ $category->id }}" class="tab-pane fade in active show">
                                            <div class="faq-box">
                                                <div id="_faq{{ $category->id }}-acc" class="mt-40">
                                                	@foreach ($category->helps as $help)
                                                		
                                                    <div class="_card">
                                                        <div class="_card-header" id="_faq1-head-{{ $category->id }}">
                                                            <h5 class="mb-0">
                                                                <a href="#" class="btn-link" data-toggle="collapse" data-target="#_faq1-collapse-{{ $category->id }}" aria-expanded="true" aria-controls="_faq1-collapse-{{ $category->id }}">
                                                                {{ $help->title ?? '' }}
                                                                </a>
                                                            </h5>
                                                        </div>

                                                        <div id="_faq1-collapse-{{ $category->id }}" class="collapse show" aria-labelledby="_faq1-head-{{ $category->id }}" data-parent="#_faq1-acc">
                                                            <div class="_card-body">
                                                                <p>{{ $help->description ?? '' }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                	@endforeach
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    	@endforeach
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
@endsection