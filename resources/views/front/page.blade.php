@extends('layouts.app')

@section("content")
<section class="_grayBg _commonPadding">
        <div class="container">
            <!-- Begin: Heading -->
            <div class="_headingDiv">
                <h2 class="_headingTxt">    

              {{ $title }}</h2>               
            </div>
            <!-- End : Heading  -->
            <div class="row _infoBoxRow">
                <!-- Begin: Col -->
                @foreach ($gigs as $gig)
                    @php 
                         $avatar = $gig->user->userDetail->avatar;
                    @endphp
                <div class="col-lg-3 col-md-4">
                    <!-- Begin: Info Box -->
                    <div class="_infoBox__outter">
                        <div class="_infoBox__inner"> 
                         <a href="{{ url($gig->menu->slug.'/'.$gig->subMenu->slug.'/'.$gig->id) }}" style="color: white">    
                            <figure class="_infoBox__img">
                              <img src="{{ asset("public/storage/$gig->gig_photo_one") }}" alt="">
                            </figure> 
                        </a>
                            <div class="_infoBox__desc _bgWhite">
                                <div class="_infoBox__desc1">
                                    <div class="_about">
                                        <div class="_aboutSeller">
                                            <figure class="_proImg"><img src="{{ url("public/storage/$avatar") }}" alt=""></figure>
                                            <div class="_proInfo">
                                                <span class="_proName">{{ $gig->user->name }}</span>
                                                <span class="_proCat">4 Star Seller</span>
                                            </div>
                                        </div>
                                        <div class="_feedSec">
                                            <span class="_likeBtn _liked"><i class="far fa-heart" data-service='{{ $gig->id }}'></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="_infoBox__desc2">
                                     <a href="{{ url($gig->menu->slug.'/'.$gig->subMenu->slug.'/'.$gig->id) }}" style="color: white"> 
                                    <p>{{ title_case($gig->gig_title) }}</p>
                                </a>
                                </div>
                            </div>
                            <div class="_extraInfo">
                                <div class="_ratingInfo"><span><i class="fas fa-star"></i> 4.0</span>Rating 4.0 (251)</div>
                                <div class="_startInfo">Starting at <span>${{ $gig->gigPrice->basic_price ?? 0 }}</span></div>
                            </div>       
                        </div>
                        <!-- Begin:  overlay -->
                        <div class="_infoBox__overlay">
                            <div class="_content">
                                <p class="_cHeading">{{ $gig->subMenu->name }}</p>
                                <p class="_cInfo">{{ $gig->describe_detail_offer }}</p>
                                   <a href="{{ url($gig->menu->slug.'/'.$gig->subMenu->slug.'/'.$gig->id) }}" style="color: white"> <div class="btn _lineBtn">Find Out More</div></a>
                            </div>
                        </div>
                        <!-- End: overlay -->
                    </div>
                    <!-- End: Info Box -->
                </div>

                @endforeach
            </div>

            <div class="row">
            	
            	<div class="col-md-2">
            		   &nbsp;
            	</div>
            		<div class="col-md-8" style="padding: 48px 0px 0px 219px;">
            		  <center>{{ $gigs->links() }}</center> 
            	</div>
            		<div class="col-md-2">
            		 &nbsp;	
            	</div>
            </div>
     
        </div>

    </section>

    <script>
    $(document).ready(function(){
        $(".far").click(function(){
            var ele = $(this).data('service');

            $.post('{{ route('wishlist.store') }}', { _token: '{{ csrf_token() }}',service_id:ele });

            if($(`i[data-service = ${ele}]`).attr('class') == 'far fa-heart'){

               $(`i[data-service = ${ele}]`).removeClass('far fa-heart').addClass('fas fa-heart');
            }else{

                $(`i[data-service = ${ele}]`).removeClass('fas fa-heart fa-bounce').addClass('far fa-heart');
            }
        });

        $.each(@json($wish), function(index, val) {

            $(`i[data-service = ${val.gig_id}]`).removeClass('far fa-heart').addClass('fas fa-heart');

        });
    });
</script>
@endsection