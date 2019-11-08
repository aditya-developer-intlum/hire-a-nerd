@extends('layouts.app')

@section("content")
<main class="main_body _dBody _innerpage-2">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv text-center">
                <h2 class="_headingTxt">{{ $page->title }}</h2>
            </div>
            <div class="row _inner-row">
                <div class="col-md-9 _inner-col-left">
                    <div class="_outer-div">
							{!! $page->contents !!}

                    </div>
                </div>
           <!--    <div class="col-md-3 _inner-col-right">
               <ul class="_page-nav">
                   <li><a href="#">Terms And Conditions</a></li>
                   <li><a href="#"  class="active">Privacy Policy</a></li>
               </ul>
           </div>  -->
            </div>
            
        </div>        
    </main>
@endsection