@extends('layouts.app')
@section('content')

<main class="main_body">
    <!-- Begin Outer bg --->
        
        <div class="gig_detail_outer_bg">
            <div class="container">
                <div class="gig_detail_inner">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="outer_pad">
                                <ul class="creating_gig">
                                	@foreach ($helps as $key => $help)
                                		@if ($loop->first)
                                			
	                                    <li class="gig_tab_active">
	                                        <a href="#title{{ $help->id }}">
	                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
	                                            {{ Str::title($help->title ?? '') }}
	                                        </a>
	                                    </li>
	                                    @else
	                                    <li>
	                                        <a href="#title{{ $help->id }}">
	                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
	                                            {{ Str::title($help->title ?? '') }}
	                                        </a>
	                                    </li>

                                		@endif
                                	@endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <!-- Begin Gig Des -->
                            <div class="gig_des">
                            	@foreach ($helps as $key => $help)
                                <div id="title{{ $help->id }}" class="gig_des_active">
                                    <h5>{{ Str::title($help->title) }}</h5>
                                    <p>{!! $help->description !!}</p>
                                    
                                </div>
                            		
                            	@endforeach
                                <!-- Begin Creating_a_Gig -->
                                <!-- End Creating_a_Gig -->
                                
                             
                                <!-- Begin Gig_Images_Do's_and_Don'ts -->
                                
                            </div>
                            <!-- End Gig Des --> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- End Outer bg --->

    

    
    </main>
@endsection