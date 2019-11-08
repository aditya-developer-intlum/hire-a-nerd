@extends('layouts.app')
@section("content")
<main class="main_body _dBody">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv text-center">
                <h2 class="_headingTxt">FAQ</h2>
            </div>
            <!-- End : Heading -->
            <ul class="nav nav-pills _faqNav">
                <li><a data-toggle="pill" href="#buyer" class="active">Buyer</a></li>
                <li><a data-toggle="pill" href="#user">Seller</a></li>                    
            </ul>

            <div class="tab-content _faqTabContent">
                <div id="buyer" class="tab-pane fade in active show">
                    <div id="faqOne" class="accordion accordion-connected">

                   @foreach($faq->whereTypeAndIsActive('buyer',true)->get() as $key => $faq)
                        <div class="card">
                            
                            <div class="card-header" id="headingTwo">
                                <div class="_f-header">
                                    <a data-toggle="collapse" href="#collapse-1-{{ $key }}">
                                        <span class="_icon"></span>
                                        <span class="_f-heading">{{ $faq->title }}</span>
                                    </a>
                                </div>
                            </div>

                            <div id="collapse-1-{{ $key }}" class="collapse" aria-labelledby="headingTwo{{ $key }}" data-parent="#faqOne">
                                <div class="card-body">
                                   {!! $faq->description !!}
                                </div>
                            </div>
                        </div>
                     @endforeach
                        
                        
                        
                    </div>
                </div>



                <div id="user" class="tab-pane fade">
                    <div id="faqTwo" class="accordion accordion-connected">

                @foreach($faq->whereTypeAndIsActive('seller',true)->get() as $key => $faq)
                        <div class="card">
                            

                            <div class="card-header" id="headingTwo">
                                <div class="_f-header">
                                    <a data-toggle="collapse" href="#collapse-2-{{ $key }}">
                                        <span class="_icon"></span>
                                        <span class="_f-heading">{{ $faq->title }}</span>
                                    </a>
                                </div>
                            </div>
                            <div id="collapse-2-{{ $key }}" class="collapse" aria-labelledby="headingTwo{{ $key }}" data-parent="#faqTwo">
                                <div class="card-body">
                                   {!! $faq->description !!}
                                </div>
                            </div>
                        </div>
                @endforeach
                        
                    </div>
                </div>                    
            </div>
        </div>        
    </main>
@endsection
