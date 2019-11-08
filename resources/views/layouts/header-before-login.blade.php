<!-- Begin : Header  -->
<header class="_header">
    <!-- Begin: Header Top -->
    <section class="_topHeader">
        <div class="container _topHeadeCont _aj-center">
            <!-- Begin : Div --->
            <div class="_topHeader-left">
                <!-- logo -->
                <div class="logo"><a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset("public/storage/images/logo.png") }}" alt=""></a></div>
                <ul  class="_hdrInfo _inlineList">
                    <li><a href="#">How it Works</a></li>                    
                    <li><a href="#">Hire a Nerd Pro</a></li>
                    <li><a href="{{ route("become.seller") }}">Become a Seller</a></li>
                </ul>
            </div>
            <!-- End : Div --->
            <!-- Begin : Div --->
            <div class="_topHeader-right">
                <div class="_searchDiv">
                    <form action="">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="_subBtn btn">Search</button>
                    </form>
                </div>
              @if(!Auth::check())  
                <ul class="_hdrUserLink _inlineList">
                    <li class="_login"><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>     
                    <li>or</li>               
                    <li class="_signup"><a href="#" data-toggle="modal" data-target="#signupModal">Signup</a></li>                        
                </ul>
                @else 
                  <ul class="_hdrUserLink _inlineList">
                        <li class="_user _active"><a href="{{ route("front.account") }}" class="_icon" >{{ Auth::user()->name[0] }}</a></li>
                     <li class="_login"><a href="javascript:;" onclick="document.getElementById('logout').submit()">Logout</a></li>    

                        <form action="{{ route("logout") }}" method="post" id="logout">
                            @csrf    
                        </form>                                       
                    </ul>
                @endif
            </div>
            <!-- End : Div --->
        </div>            
    </section>
    <!-- End: Header Top -->
    <!-- Begin: Header Bottom -->
    <section class="_btmHeader">
        <div class="container">
            <nav class="navbar navbar-expand-lg">                    
                <!-- nav section -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="navbar-toggler-icon">
                        <div class="bar bar-1"></div>
                        <div class="bar bar-1"></div>
                        <div class="bar bar-1"></div>
                    </div>
                </button>

                
                    <div class="collapse navbar-collapse" id="navbarsExample05">
                        <ul class="navbar-nav">
                            <li class="current-menu-item menu-item-has-children">
                                <a href="{{ url("graphic-design") }}">Graphics & Design</a>
                                <span class="clickD"></span>
                                <ul class="sub-menu">
                            @foreach(Nerd::subMenu("graphic-design") as $subMenu)

                                @foreach($subMenu->subMenu as $sub)

                                    <li><a href="{{ url($subMenu->slug."/".$sub->slug) }}">{{ $sub->name }}</a></li>

                                @endforeach
                                

                            @endforeach
                                  
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url("digital-market") }}">Digital Marketing</a>

                                 <span class="clickD"></span>
                                <ul class="sub-menu">
                            @foreach(Nerd::subMenu("digital-market") as $subMenu)

                                @foreach($subMenu->subMenu as $sub)

                                    <li><a href="{{ url($subMenu->slug."/".$sub->slug) }}">{{ $sub->name }}</a></li>

                                @endforeach
                                

                            @endforeach
                                  
                                </ul>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url("writing-translation") }}">Writing & Translation</a>
                                  <span class="clickD"></span>
                                <ul class="sub-menu">
                            @foreach(Nerd::subMenu("writing-translation") as $subMenu)

                                @foreach($subMenu->subMenu as $sub)

                                    <li><a href="{{ url($subMenu->slug."/".$sub->slug) }}">{{ $sub->name }}</a></li>

                                @endforeach
                                

                            @endforeach
                                  
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url("video-animation") }}">Video & Animation </a>
                                 <ul class="sub-menu">
                            @foreach(Nerd::subMenu("video-animation") as $subMenu)

                                @foreach($subMenu->subMenu as $sub)

                                    <li><a href="{{ url($subMenu->slug."/".$sub->slug) }}">{{ $sub->name }}</a></li>

                                @endforeach
                                

                            @endforeach
                                  
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url("music-audio") }}">Music & Audio  </a>
                                 <ul class="sub-menu">
                            @foreach(Nerd::subMenu("music-audio") as $subMenu)

                                @foreach($subMenu->subMenu as $sub)

                                    <li><a href="{{ url($subMenu->slug."/".$sub->slug) }}">{{ $sub->name }}</a></li>

                                @endforeach
                                

                            @endforeach
                                  
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url("programming-tech") }}">Programming & Tech</a>
                                 <ul class="sub-menu">
                            @foreach(Nerd::subMenu("programming-tech") as $subMenu)

                                @foreach($subMenu->subMenu as $sub)

                                    <li><a href="{{ url($subMenu->slug."/".$sub->slug) }}">{{ $sub->name }}</a></li>

                                @endforeach
                                

                            @endforeach
                                  
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url("business") }}">Business </a>
                                 <ul class="sub-menu">
                            @foreach(Nerd::subMenu("business") as $subMenu)

                                @foreach($subMenu->subMenu as $sub)

                                    <li><a href="{{ url($subMenu->slug."/".$sub->slug) }}">{{ $sub->name }}</a></li>

                                @endforeach
                                

                            @endforeach
                                  
                                </ul>
                            </li>
                            <li class="menu-item-has-children">  
                                <a href="{{ url("lifestyle") }}">Lifestyle</a>
                                 <ul class="sub-menu">
                            @foreach(Nerd::subMenu("lifestyle") as $subMenu)

                                @foreach($subMenu->subMenu as $sub)

                                    <li><a href="{{ url($subMenu->slug."/".$sub->slug) }}">{{ $sub->name }}</a></li>

                                @endforeach
                                

                            @endforeach
                                  
                                </ul>
                            </li>                                                         
                        </ul>
                    </div>
            </nav>
        </div>
    </section>
    <!-- End: Header Bottom -->       
</header>
<!-- End : Header --->