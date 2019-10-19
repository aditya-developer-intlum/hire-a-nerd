@extends('layouts.app')

@section("content")
<div id="app">
<main class="_dashboard__page">
    <!-- Dashboard page inner begin -->
    <div class="_dashboard__wrapper">
        <!-- Row begin  -->
        <div class="_dashboard__row _flexDiv">          

            <!-- Dashboar Left section begin  -->
            <div class="_dashboard__leftSec">
                <div class="_d__body _tmeassage__body">
                    <!-- Dashboard header begin  -->
                    <section class="_d__header">
                    
                    </section>
                    <!-- Dashboard  header end   -->


                    <!-- dashboard body begin  -->
                    <section class="_d__bodyInner">
                        <section class="_d__body__wrapper container">
                            
                            <!-- row begin  -->
                            <div class="row">                                    
                                    <!-- col begin  -->
                                <div class="col-md-12 _mB__30">
                                    <div class="_dCard _msgCard">
                                        <div class="_msgOterWarp">
                                            <div class="_msgInnerWarp _flexDiv">
                                                <div class="_msgInnerWarp__lft">
                                                    <!-- Chatlist outer begin  -->
                                                    <div class="_chatOuter">
                                                        <!-- Chat header begin  -->
                                                        <!-- <div class="_chatHeader">
                                                            conv : begin
                                                            <div class=" _conv-option">
                                                                <a hter="#" class="hoverDropdown_btn _click-btn">All Conversation <i class="fas fa-caret-down"></i></a>                         
                                                                <div class="_click-box">                            
                                                                    <div class="hoverDropdown__inner">
                                                                        <div class="hoverDropdown__header">All Conversation</div> 
                                                                        <div class="hoverDropdown__body">
                                                                            <ul class="hoverDropdown_content">
                                                                                <ul>
                                                                                    <li><a href="#">Uread</a></li>
                                                                                    <li><a href="#">Starred</a></li>
                                                                                </ul>                                                
                                                                                <ul>
                                                                                    <li><a href="#">Uread</a></li>
                                                                                    <li><a href="#">Spam</a></li>
                                                                                </ul>                                                
                                                                                <ul>
                                                                                    <li><a href="#">Uread</a></li>
                                                                                    <li><a href="#">Spam</a></li>
                                                                                </ul>                                                
                                                                            </ul>
                                                                        </div>                                                                                            
                                                                    </div>                            
                                                                </div>                      
                                                            </div>
                                                            conv : end
                                                            <div class="_msg__srch">
                                                                <form class="_srcForm _flexDiv">
                                                                    <div class="_src-input-div hide" >
                                                                        <input type="text"  placeholder="Search">
                                                                        <div class="_s-close"><i class="fas fa-times"></i></div>
                                                                    </div>                                                                    
                                                                   {{--  <span class="_srchIcon"><img src="images/search.svg" alt=""></span> --}}
                                                                </form>
                                                                
                                                            </div>
                                                        </div> -->
                                                        <!-- Chat header end  -->
                                                        <!-- Chat list begin  -->
                                                        <div class="_chatListsBox ">
                                                            {{-- <ul class="_chatLists nav nav-tabs" id="chat_lists">

      	    @foreach ($friends as $friend)
                                                   				
                                                              
                <li class="_chatList _online">
                	<div class="_chatCont" data-toggle="tab" href="#user{{ $friend->user->id }}" onclick="readMessage('{{ $friend->user->id }}','{{ Auth::id() }}')">
                        <div class="_chatCont-in _flexDiv">
                            <div class="_proImg-cont">
                            <span class="_userImg">

                            	<img src="{{ asset("public/storage/{$friend->user->userdetail->avatar}") }}" alt="image">
                            </span>                                                                                    
                            </div>
                            <div class="_proTxt-cont">
                                <div class="_chatInfo _flexDiv">
                                    <span class="_name">{{ $friend->user->name }}</span>
                                    <span class="_time">1:55 PM</span>
                            	    <span class="_star-imp active">
                          
                            	    </span>
                                </div>                                                                                    
                                   <p class="_msgDiv">
                                    <span class="_recentMsg">Lorem ipsum dolor 
                                    	<span>
                                    		
                                    	</span>
                                	</span>
                                    @empty (!count($friend->user->unreadMessage))
                                        
                                    <span class="_msgNum">
                                        {{ count($friend->user->unreadMessage) }}
                                    </span>
                                    @endempty
                                    </p>
                            </div>
                        </div>                                                                                           
                    </div>
                </li>
                                                            
            @endforeach   
                                                     

                                                            </ul> --}}

                <message-component :message-data="{{ json_encode([
                                        'friends' => $friends,
                                        'asset' =>  asset('public/storage'),
                                        'readMessagePath' => route('seller.message.read'),
                                        'user' => Auth::user()
                    ]) }}"></message-component>
                                                        </div>
                                                        <!-- Chat list end    -->
                                                        
                                                    </div>
                                                    <!-- Chatlist outer end  -->
                                                </div>
                                                <div class="_msgInnerWarp__right">
                                                    <div class="_chatBoxOuter">
                                                    		<div class="tab-content">
	
	@foreach ($friends as $friend)

	@php
		$profile = Auth::user()->userdetail->avatar;
	@endphp
         @if ($loop->first)
                <!-- Chat content begin  -->
        <listen-component :user-data="{{ json_encode([
	                                        'id' => Auth::id(),
	                                        'tab' => "{$friend->user->id}",
	                                        'name' => $friend->user->name,
	                                        'avatar' => asset("public/storage/{$friend->user->userdetail->avatar}"),
	                                        'active' => true,
	                                        'image' => asset("public/storage/{$profile}")

                                        ]) 
                                    }}">
        </listen-component>
        @else

        	  <listen-component :user-data="{{ json_encode([
	                                        'id' => Auth::id(),
	                                        'tab' => "{$friend->user->id}",
	                                        'name' => $friend->user->name,
	                                        'avatar' => asset("public/storage/{$friend->user->userdetail->avatar}"),
	                                        'active' => false,
	                                        'image' => asset("public/storage/{$profile}")
                                        ]) 
                                    }}">
        </listen-component>

        @endif

        
    @endforeach 



                                                        	

                                                            <!-- Chat content begin  --> 
                                                            
                                                        
                                                    </div>                                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- col end  -->
                                
                            </div>
                            <!-- row end  -->
                        </section>
                    </section>
                    <!--  dashboard body end   -->
                </div>
            </div>
            <!-- Dashboar left section end  -->
        </div>
        <!-- Row end  -->
    </div>
    <!-- Dashboard page inner end   -->
    </main>
</div>
<script>
	$(function(){

		$("#chat_lists li").click(function(){

			 $('li._chatList').removeClass('_newMsg');
   			 $(this).closest('li._chatList').addClass('_newMsg');
		});


	});

    function readMessage(sender_id,receiver_id) {
        $.post('{{ route('seller.message.read') }}', {_token: '{{ csrf_token() }}',sender_id:sender_id,receiver_id:receiver_id}, function(data, textStatus, xhr) {
            
        });
    }
</script>
@endsection
