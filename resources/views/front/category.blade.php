@extends('layouts.app')

@section("content")

<main class="main_body _dBody">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv text-center">
                <h2 class="_headingTxt">{{ $title }}</h2>
                <p class="_headingTag">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi</p>
            </div>
            <!-- End : Heading  --> 
            <div class="row">
                <div class="col-md-3">
                    <section class="_category-list-div">
                    <h4>{{ $title }}</h4>
                    <ul class="_category-list">
                    @foreach($sidebar as $subMenu)
	                    @foreach($subMenu->subMenu as $sub)
	                    	<li><a href="{{ url($subMenu->slug."/".$sub->slug) }}">{{ $sub->name }}</a></li>
	                    @endforeach
                    @endforeach
                    </ul>

                    </section>                    
                </div>
                <div class="col-md-9">
                    <div class="row">

            @foreach($sidebar as $subMenu)
		        @foreach($subMenu->subMenu as $sub)
		            
		            <div class="col-md-4">
                        <a href="{{ url($subMenu->slug."/".$sub->slug) }}" class="_category-box">
                            <figure class="_cat-figure">
                                <img src="{{ asset("public/storage/images/populor-img-".rand(1,5).".jpg") }}" alt="img-fluid">
                            </figure>
                           	<span class="_cat-name">{{ $sub->name }}</span>
                        </a>
                    </div>
		        @endforeach
            @endforeach
                      
                        
                       
                    </div>
                </div>
            </div>	

        </div>        
    </main>

@endsection