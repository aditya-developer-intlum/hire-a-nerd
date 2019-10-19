<header class="_header _seller-header">
        <!-- Begin: Header Top -->
        <section class="_topHeader">
            <div class="container _topHeadeCont _aj-center">
                <!-- Begin : Div --->
                <div class="_topHeader-left">
                    <!-- logo -->
                    <div class="logo"><a class="navbar-brand" href="{{ route('seller.dashboard') }}"><img src="{{ url("public/storage/images/logo.png") }}" alt=""></a></div>
                    <ul  class="_hdrInfo _inlineList">
                        <li><a href="{{ route('seller.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('seller.message.index') }}">Messages</a></li>
                        <li><a href="{{ route('seller.order.index') }}">Orders</a></li>
                        <li><a href="{{ route('seller.gig.index') }}">Service</a></li>
                        <li><a href="{{ route('seller.analytics') }}">Analytics</a></li>
                        <li><a href="{{ route('seller.earning') }}">Earnings</a></li>
                        <li><a href="{{ route('seller.email') }}">Email</a></li>
                    </ul>
                </div>
                <!-- End : Div --->
                <!-- Begin : Div --->
                <div class="_topHeader-right">
                     <div class="" style='cursor:pointer;' id='switch_dashboard'>
                        <a ><strong>{{ Auth::user()->mode==1?'Switch to Selling':'Switch to Buying' }}</strong></a>
                    </div>
                    <ul class="_hdrUserLink _inlineList">
                         <li class="_user _active">
                            <a href="{{ route("front.account") }}" class="_icon" >{{ Auth::user()->name[0] }}</a>
                        </li>
                         <li class="_login"><a href="#" onclick="document.getElementById('logout').submit()">Logout</a></li>

                        <form action="{{ route("logout") }}" method="post" id="logout">
                            @csrf
                        </form>
                    </ul>
                </div>
                <!-- End : Div --->
            </div>
        </section>
        <!-- End: Header Top -->
    </header>