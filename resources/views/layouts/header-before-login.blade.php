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
                   
                    <li><a href="{{ route("become.seller") }}">Become a Seller</a></li>
                </ul>
            </div>
            <!-- End : Div --->
            <!-- Begin : Div --->
            <div class="_topHeader-right">
                <div class="_searchDiv">
                    <form action="{{ route('global.search') }}">
                        <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->search }}">
                        <button type="submit" class="_subBtn btn">Search</button>
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
                            
                              @foreach(Nerd::category() as $category)                        

                            <li class="current-menu-item menu-item-has-children">
                                <a href="{{ url($category->slug) }}"> {{ $category->name }} </a>
                                <span class="clickD"></span>
                                <ul class="sub-menu">
                       
                            @empty(!$category->submenu)

                                @foreach($category->submenu as $subcategory)
                                    <li><a href="{{ url($category->slug.'/'.$subcategory->slug) }}">{{ $subcategory->name }}</a></li>
                                @endforeach
                            
                            @endempty      
                                </ul>
                            </li>

                        @endforeach

                        </ul>
                    </div>
            </nav>
        </div>
    </section>
    <!-- End: Header Bottom -->       
</header>
<!-- End : Header --->