@extends('layouts.app')

@section("content")

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
                                                        <div class="_chatHeader">
                                                            <!-- conv : begin -->
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
                                                            <!-- conv : end  -->
                                                            <div class="_msg__srch">
                                                                <form class="_srcForm _flexDiv">
                                                                    <div class="_src-input-div hide" >
                                                                        <input type="text"  placeholder="Search">
                                                                        <div class="_s-close"><i class="fas fa-times"></i></div>
                                                                    </div>                                                                    
                                                                    <span class="_srchIcon"><img src="images/search.svg" alt=""></span>
                                                                </form>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- Chat header end  -->
                                                        <!-- Chat list begin  -->
                                                        <div class="_chatListsBox">
                                                            <ul class="_chatLists nav nav-tabs">

    @foreach ($emails as $email)
                                                                <li class="_chatList   ">
                                                                    <div class="_chatCont" data-toggle="tab" href="#home">
                                                                        <div class="_chatCont-in _flexDiv">
                                                                            <div class="_proImg-cont">
                                                                              <!--   <span class="_userImg"><img src="http://intlum.in/hire-a-nerd/public/storage/images/team-mem-2.jpg" alt=""></span>   -->                                                                                  
                                                                            </div>
    
<div class="_proTxt-cont">

      <div class="_chatInfo _flexDiv">
      <span class="_name">{{ $email->email ?? '' }}</span>

     </div>                                                                                    
                                                                                
</div>
                                                                        </div>                                                                                           
                                                                    </div>
                                                                </li>
    @endforeach
                                                            </ul>
                                                        </div>
                                                        <!-- Chat list end    -->
                                                        
                                                    </div>
                                                    <!-- Chatlist outer end  -->
                                                </div>
                                                <div class="_msgInnerWarp__right">
                                                    <div class="_chatBoxOuter">
                                                        <!-- Chat content begin  -->
                                                        <div class="tab-content">
                                                            <!-- chat box begin -->
                                                            <div id="home" class="tab-pane fade in active show">
                                                                <div class="_chatBoxInner">
                                                                    <!-- Header begin  -->
                                                                    <div class="_chatBox__hdr">
                                                                        <div class="row">
                                                                            <!-- Col begin  -->
                                                                            <div class="col-6">
                                                                                <div class="_chatBox__profile _chatInfo">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <!-- Col end  -->
                                                                            <!-- Col begin  -->
                                                                            <div class="col-6">
                                                                                <div class="_chatOptions  _flexDiv">
                                                                                    <!-- Begin  -->
                                                                                    <div class=" _chatOptions_elem">
    <a hter="#" >                                                                                                                                               
        <span class="_dHdr__icon">
            <i class="fas fa-upload" id="file_button"></i>
        <form action="{{ route('seller.email.store') }}" method="post" id="file_submit" enctype="multipart/form-data">
            @csrf
            
            <input type="file" name="file"  id="file" style="display: none">
        </form>
        </span>

    </a>                         
                                                                                                              
                                                                                    </div>
                                                                                    <!-- end  -->
                                                                                    
                                                                                    <!-- <a href="#" class="_chatOptions_elem">
                                                                                        <span ><i class="fas fa-times"></i></span>
                                                                                    </a>                                        -->
                                                                                </div>
                                                                            </div>
                                                                            <!-- Col end   -->
                                                                        </div>          
                                                                    </div>
                                                                    <!-- Header end  -->
<div class="_chatBox__bdy">
    <div class="_chatInnerBody">
            
    @foreach ($messages as $mess)
        {{-- expr --}}                                                         <!-- Message Box Begin  -->
        <div class="_msgBox-outer">
            <div class="_msgBox-inner">
                <div class="_msgDiv">
       
            <div class="_msgTextBox">
                <div class="_msgContent">
                 {{ $mess->message ?? '' }}                                                   
                </div>                      
            </div>
                </div>
                                                                        
            </div>
        </div>
    @endforeach   

                                                                         

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- chat box end -->
                                                               
                                                                
                                                            <!-- chat box end -->
                                                        </div> 
                                                            <!-- Chat content begin  --> 
                                                            
                                                        <!-- Reply section begin  -->
                                                        <div class="_replyOuter">

                                                            <div class="_replyBox">
                                                                <form action="{{ route('seller.email.send') }}" class="_flexDiv" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    
                                                                    <input type="text" class="form-control" name="message">
                                                                    <input type="file" name="attached_file" id="attached_file" style="display: none">
                                                                    <button class="btn _submitBtn2" type="submit">Reply</button>
                                                                </form>
                                                            </div>

                                                            <div class="_replyActionBox">
                                                                <ul class="_replyAction__lists">                                                                    
                                                                 <!--    <li><a href="#"><i class="fas fa-paperclip" id="paperClip"></i></a></li>
                                                                  -->
          
                                                                        
                                                                    </div>
                                                                  
                                                                </ul> 
                                                                                                                                                 
                                                            </div>

                                                        </div>
                                                        <!-- Reply section end  -->
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

    <script>
        $(function(){
            $("#file_button").click(function(){
                $("#file").trigger('click');
            });
            $("#file").change(function(){
                $("#file_submit").submit();
            });
            $("#paperClip").click(function(){
                $("#attached_file").trigger('click');
            });

        });
    </script>

    @push('scripts')
    <script >
@if(Session::has('success'))
            Swal.fire({
              type: 'success',
              title: '{{ Session::get('success') }}',
            });
@endif
    </script>
@endpush
@endsection