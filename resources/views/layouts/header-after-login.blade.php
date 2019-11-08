<!-- Begin : Header  -->
<header class="_header">
        <!-- Begin: Header Top -->
        <section class="_topHeader">
            <div class="container _topHeadeCont _aj-center">
                <!-- Begin : Div --->
                <div class="_topHeader-left">
                    <!-- logo -->
                    <div class="logo"><a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url("public/storage/images/logo.png") }}" alt=""></a></div>
                    <ul  class="_hdrInfo _inlineList">                                            
                        <li><a href="{{ url('/') }}">Hire a Nerd Pro</a></li>
                        <li><a href="{{ route("become.seller") }}">Become a Seller</a></li>
                        <li><a href="{{ route('seller.message.index') }}">Messages</a></li>
                        <li><a href="{{ route('wishlist.index') }}">Saved</a></li>
                        <li><a href="{{ route('orders.index') }}">Orders</a></li>                        
                    </ul>
                </div>
                <!-- End : Div --->
                <!-- Begin : Div --->
                <div class="_topHeader-right">
                    <div class="_searchDiv">
                        <form action="">
                            <input type="text" class="form-control" placeholder="Find Service">
                            <button class="_subBtn btn">Search</button>
                        </form>
                    </div>
                      <ul class="_hdrUserLink _inlineList">
                        <li style='cursor:pointer' id='switch_dashboard'>
                             <div class="">
                                <a ><strong> {{ Auth::user()->mode==1?'Switch to Selling':'Switch to Buying' }}</strong></a>
                             </div>
                          
                        </li>
                        <li class="_user _active"><a href="{{ route("front.account") }}" class="_icon" >{{ Auth::user()->name[0] }}</a></li>
                     <li class="_login"><a href="#" onclick="document.getElementById('logout').submit()">Logout</a></li>    

                        <form action="{{ route("logout") }}" method="post" id="logout">
                            @csrf    
                        </form>                                       
                    </ul>
                <!-- End : Div --->
            </div>            
        </section>
        <!-- End: Header Top -->
        <!-- Begin: Header Bottom -->
        <section class="_btmHeader _blueGradient">
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
  