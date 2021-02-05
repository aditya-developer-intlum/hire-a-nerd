@extends('layouts.app')
@section('content')
<div class="row">
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
                </div>
@endsection