@extends('layouts.app')

@section("content")

  {{--   @if(!empty($gig->widget_five))

        $("#publish").attr('href','#gPublish').trigger('click');

    @elseif(!empty($gig->widget_four))

        $("#gallery").attr('href','#gGallery').trigger('click');

    @elseif(!empty($gig->widget_three))

        $("#Requirment").attr('href','#gRequirment').trigger('click');

    @elseif(!empty($gig->widget_two))

        $("#Desc").attr('href','#gDesc').trigger('click');

    @elseif(!empty($gig->widget_one))

        $("#Pricing").attr('href','#gPricing').trigger('click');

    @endif --}}
<script type="text/javascript">

$(function(){



    @if(!empty($gig->widget_one))
        $("#overview_tick").html("&#10004;").css("background-color","#45c327");
        $("#overview_tick").parent().parent().addClass('active _completed');
         $("#Pricing").attr('href','#gPricing');
    @endif

    @if(!empty($gig->widget_two))
        $("#pricing_tick").html("&#10004;").css("background-color","#45c327");
        $("#pricing_tick").parent().parent().addClass('active _completed');
        $("#Desc").attr('href','#gDesc');
    @endif

    @if(!empty($gig->widget_three))
        $("#deck_tick").html("&#10004;").css("background-color","#45c327");
        $("#deck_tick").parent().parent().addClass('active _completed');
           $("#Requirment").attr('href','#gRequirment');
    @endif

    @if(!empty($gig->widget_four))
        $("#requirement_tick").html("&#10004;").css("background-color","#45c327");
        $("#requirement_tick").parent().parent().addClass('active _completed');
          $("#gallery").attr('href','#gGallery');
    @endif

    @if(!empty($gig->widget_five))
        $("#gallery_tick").html("&#10004;").css("background-color","#45c327");
        $("#gallery_tick").parent().parent().addClass('active _completed');
         $("#publish").attr('href','#gPublish');
    @endif

});

</script>

<style>
    .left-border{
        border-left: 1px solid;
    }
    .right-border{
        border-right: 1px solid;
    }
    .top-border{
        border-top: 1px solid;
    }
    .bottom-border{
        border-bottom: 1px solid;
    }
    .lrb{
        border-right: 1px solid;
        border-left: 1px solid;
    }
    .ltb{
        border-left: 1px solid;
    }
    .lbb{
        border-left: 1px solid;
        border-bottom: 1px solid;
    }
    .rtb{
        border-top: 1px solid;
        border-right: 1px solid;
    }
    .rbb{
        border-bottom: 1px solid;
        border-right: 1px solid;
    }
    .tbb{
        border-top: 1px solid;
        border-bottom: 1px solid;
    }
    .trblb{
        border-right: 1px solid;
        border-top: 1px solid;
        border-left: 1px solid;
        border-bottom: 1px solid;
    }
    .errDanger{
        border: 1px solid red;
    }

</style>
<main class="main_body _dBody _grayBg _pT0">
        <div class="container">
            <div class="row _gRow">
                <!-- Begin: Top Nav  -->
                <div class="col-md-12">
                    <div class="_gigProsessBar">
                        <ul class="nav nav-tabs">
                            <li>

                                <a data-toggle="tab" href="#gOverview" id="overview">
                                 <span class="_num" id="overview_tick" >1</span>
                                    Overview
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" id="Pricing">
                                    <span class="_num" id="pricing_tick">2</span>
                                    Pricing
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" id="Desc">
                                    <span class="_num" id="deck_tick">3</span>
                                    Description & FAQ
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab"  id="Requirment">
                                    <span class="_num" id="requirement_tick">4</span>
                                    Requirements
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab"  id="gallery">
                                    <span class="_num" id="gallery_tick">5</span>
                                    Gallery
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" id="publish">
                                    <span class="_num" id="publish_tick">6</span>
                                    Publish
                                    <span class="_pArr"><i class="fas fa-forward"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End: Top Nav  -->
                <!-- Begin :  Section -->
                <div class="col-lg-12 col-md-12">
                    <div class="tab-content">
                        <!-- Begin : Overview  -->
                        <div id="gOverview" class="tab-pane fade in active show">
                            <div class="row">
                                 <!-- Begin : Left Section   -->
                                <div class="col-lg-8 col-md-12">
                                    <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">Overview</span>
                                        </div>
                                      {{--   <form action="" class="_dForm"> --}}
                                            <div class="_dBorText">
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="" for="" id="gig_title_label">Gig Title</label></div>
                                                    <div class="col-md-8">
                         <textarea class="form-control2" placeholder="I’m Realy good At" id="gig_title_input">{{ $gig->gig_title ?? "" }}</textarea>

                                    <p class="_emTxt _mT0 text-right">
                                        <gigTitle>0</gigTitle> / 80 max</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="_label" for="" id="gig_category_label">Categorie :</label></div>
                                                    <div class="col-md-6">
                                                        <select name="" id="gig_category_input" class="form-control2">
                                                            <option value="">Select</option>
                                                    @foreach($category as $cat)
                                                        <option value="{{ $cat->id }}" {{ empty($gig->category)?"":$gig->category == $cat->id?"selected":'' }}>{{ $cat->name }}</option>
                                                    @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4"><label class="_label" for="" id="gig_sub_category_label">Sub Categorie :</label></div>
                                                    <div class="col-md-6">
                                                        <select name="" id="gig_sub_category_input" class="form-control2">
                                                            <option value="">Select</option>

                                                        </select>
                                                    </div>
                                                </div>
                    <div class="form-group row">
                    <div class="col-md-4"><label class="" for="" id="tag_label">Search Tags :</label></div>
                    <div class="col-md-8">
                     <input type="text" placeholder="" class="form-control2" id="tags" value="{{ $gig->tags ??"" }}">
                                                        <p class="_emTxt  text-right">Up to 5 terms</p>
                                                        <p class="_emTxt"><strong>Please note:</strong> Some categories require that sellers verify their skills.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_dBtnGroup">
                                                <a href="javascript:;" class="btn _btn2 _btnSuccess " id="gig_overview">Save Changes</a>
                                                <a href="{{ url("api/gig-cancel/".Auth::id()) }}" class="btn _btn2 _btnDanger "  onclick="return confirm('Are You Sure ? ')">Cancel</a>
                                            </div>
                                      {{--   </form> --}}
                                    </div>
                                    <!-- End : Card -->
                                </div>
                                <!-- End : Left Section   -->
                                <!-- Begin : Right Section -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="_gigDefBox">
                                        <figure>
                                            <img src="{{ url("public/storage/images/gig-img.png") }}" alt="">
                                        </figure>
                                        <p class="_gigDefHead">Start Defining Your Gig</p>
                                        <p class="_gigDefTxt">
                                            Create a catchy title.<br>
                                            Choose a category that fits your Gig.<br>
                                            Add meta data to help buyers find more information regarding your Gig.<br>
                                            Add tags to help buyers find your Gig while searching.
                                        </p>
                                        <a href="#" class="btn _dBorBtn">General Gig Policy</a>
                                    </div>
                                </div>
                                <!-- End : Right Section   -->
                            </div>
                        </div>
                        <!-- End  : Overview  -->

                        <!-- Begin:  Pricing -->

                        <div id="gPricing" class="tab-pane fade">
                            <div class="row">
                                <!-- Begin : Left Section   -->
                                <div class="col-lg-8 col-md-12">
                                    <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading" >Pricing</span>


                                            <!-- <label class="switch">
                                                                                                                      <input type="checkbox" checked>
                                                                                                                      <span class="slider round"></span>
                                                                                                                    </label>  -->
                                        </div>

                        <div class="alert alert-danger" role="alert" id="price_validation_error" style="display: none">
                            <ul></ul>

                        </div>



                    <form action="{{ url("api/gig-price/create/$gig->id") }}" class="_dForm" method="post" id="price_form">

                                <table class="table">
                                                <tr>
                                                   <td class="left-border">&nbsp;</td>
                                                    <td class="lrb">Basic</td>
                                                    <td class="right-border optional">Standard</td>
                                                    <td class="lrb optional">Premium</td>
                                                </tr>
                                                <tr>
                                                   <td class="left-border" style="border-top: 0px !important ">&nbsp;</td>
                                                    <td class="trblb">
                        <label>
                <textarea name="basic_package_name" maxlength="35" type="text" placeholder="Name your package">{{ $gigPricing->basic_package_name ?? ""}}</textarea>

                        </label>
                                                    </td>
                                                    <td class="right-border tbb optional">
                                                    <label>
                <textarea name="standard_package_name" maxlength="35" type="text" placeholder="Name your package">{{ $gigPricing->standard_package_name ?? ""}}</textarea>

                        </label>
                    </td>
                                                    <td class="right-border tbb optional">
                                                    <label>
                <textarea name="premium_package_name" maxlength="35" type="text" placeholder="Name your package">{{ $gigPricing->premium_package_name ?? "" }}</textarea>

                        </label>
                    </td>
                                                </tr>

                    <tr>
                        <td class="left-border optional" style="border-top: 0px !important ">&nbsp;</td>
                                                    <td class="trblb">
                        <label>
    <textarea name="basic_description" maxlength="100" type="text" placeholder="Describe the details of your offering">{{ $gigPricing->basic_description ?? ""}}</textarea>

                        </label>
                                                    </td>
                                                    <td class="right-border tbb optional">
                                                    <label>
    <textarea name="standard_description" maxlength="100" type="text" placeholder="Describe the details of your offering">{{ $gigPricing->standard_description ?? ""}}</textarea>

                        </label>
                    </td>
                                                    <td class="right-border tbb optional">
                                                    <label>
    <textarea name="premium_description" maxlength="100" type="text" placeholder="Describe the details of your offering">{{ $gigPricing->premium_description ?? "" }}</textarea>

                        </label>
                    </td>
                                                </tr>

                                                <tr>
                   <td class="left-border" style="border-top: 0px !important "> &nbsp;</td>
                    <td class="lrb bottom-border" data-package="1">
                          <select name="basic_delivery_day"  class="form-control2">
                                <option value="">Delivery Time</option>
                                @for($i=1; $i<=30; $i++)
                            <option value="{{ $i }}" {{ !empty($gigPricing->basic_delivery_time)?$gigPricing->basic_delivery_time==$i?'selected':'':'' }}>{{ $i }} Day Delivery</option>

                                @endfor
                            </select>
                    </td>
                    <td class="rbb optional" data-package="2">
                            <select name="standard_delivery_day"  class="form-control2">
                                <option value="">Delivery Time</option>
                                @for($i=1; $i<=30; $i++)
                            <option value="{{ $i }}" {{ !empty($gigPricing->standard_delivery_time)?$gigPricing->standard_delivery_time==$i?'selected':'':'' }}>{{ $i }} Day Delivery</option>

                                @endfor
                            </select>
                    </td>
                    <td class="rbb optional" data-package="3" disabled>
                        <select name="premium_delivery_day"  class="form-control2">
                                <option value="">Delivery Time</option>
                                @for($i=1; $i<=30; $i++)
                            <option value="{{ $i }}" {{ !empty($gigPricing->premium_delivery_time)?$gigPricing->premium_delivery_time==$i?'selected':'':'' }}>{{ $i }} Day Delivery</option>

                                @endfor
                            </select>
                    </td>
                </tr>

            @foreach($priceScope as $key => $scope)

                  <tr>

                    <td class="lrb bottom-border " data-package="1">
                        <label>
                          {{ $scope->scope->name ??"" }}

                        </label>
                    </td>
                      <td class="lrb bottom-border " data-package="1">
                        <label class="_mCheckbox">

                        <input type="checkbox" name="basic[]" value="{{ $scope->scope->id }}"
                        {{ !empty($checkbox['basic'])?in_array($scope->scope->id,$checkbox['basic'])?'checked':'':'' }}>
                        <span></span>
                        </label>
                    </td>
                    <td class="rbb optional" data-package="2">
                     <label class="_mCheckbox">

                        <input type="checkbox" name="standard[]" value="{{ $scope->scope->id }}"
                        {{ !empty($checkbox['standard'])?in_array($scope->scope->id,$checkbox['standard'])?'checked':'':'' }}>
                        <span></span>
                        </label>
                    </td>
                    <td class="rbb optional" data-package="3">
                       <label class="_mCheckbox">

                        <input type="checkbox" name="premium[]" value="{{ $scope->scope->id }}"  {{ !empty($checkbox['premium'])?in_array($scope->scope->id,$checkbox['premium'])?'checked':'':'' }}>
                        <span></span>
                        </label>
                    </td>
                </tr>

            @endforeach

                <tr>

                    <td class="lrb bottom-border" data-package="1">
                        <label>
                          Price

                        </label>
                    </td>
                      <td class="lrb bottom-border" data-package="1">
                        <label>

                       <select name="basic_price" class="form-control2">
                        @for($i=5; $i<=1000; $i+=5)
                            <option value="{{ $i }}" {{ !empty($gigPricing->basic_price)?$gigPricing->basic_price==$i?'selected':'':'' }}>${{ $i }}</option>
                        @endfor

                       </select>

                        </label>
                    </td>
                    <td class="rbb optional" data-package="2">
                     <label>

                         <select name="standard_price" class="form-control2">
                        @for($i=5; $i<=1000; $i+=5)
                            <option value="{{ $i }}" {{ !empty($gigPricing->standard_price)?$gigPricing->standard_price==$i?'selected':'':'' }}>${{ $i }}</option>
                        @endfor

                       </select>
                        </label>
                    </td>
                    <td class="rbb optional" data-package="3">
                       <label >

                         <select name="premium_price" class="form-control2">
                        @for($i=5; $i<=1000; $i+=5)
                            <option value="{{ $i }}" {{ !empty($gigPricing->premium_price)?$gigPricing->premium_price==$i?'selected':'':'' }}>${{ $i }}</option>
                        @endfor

                       </select>
                        </label>
                    </td>
                </tr>

                                            </table>


                                    </div>
                                    <!-- End : Card -->
                                    <!-- Begin: Card -->
                                    <div class="_dCard">



                                            <div class="_dBtnGroup">
                                                <button type="submit" class="btn _btn2 _btnSuccess ">Save Changes</button>

                                                <a href="{{ url("api/gig-cancel/".Auth::id()) }}" class="btn _btn2 _btnDanger "  onclick="return confirm('Are You Sure ? ')">Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End : Card -->
                                </div>
                                <!-- End : Left Section   -->
                                <!-- Begin : Right Section -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="_gigDefBox">
                                        <figure>
                                            <img src="{{ url("public/storage/images/gig-img.png") }}" alt="">
                                        </figure>
                                        <p class="_gigDefHead">Set your packages</p>
                                        <p class="_gigDefTxt">
                                            Set the prices for your 3 packages. Select the elements you want to include in each offer.<br>
                                            Add Extras to increase your order value.
                                        </p>
                                        <a href="#" class="btn _dBorBtn">See examples</a>
                                    </div>
                                </div>
                                <!-- End : Right Section   -->
                            </div>

                        </div>
                        <!-- End:  Pricing -->

                        <!-- Begin : Description -->
                        <div id="gDesc" class="tab-pane fade">
                                            <form action="" class="_dForm" id="description_and_faq">
                            <div class="row">
                                <!-- Begin : Left Section   -->
                                <div class="col-lg-8 col-md-12">
                                     <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">Description & FAQ</span>
                                        </div>
                                        <div class="_dsBody">
                                                @csrf
                                                <div class="form-group row">
                                                    <div class="col-md-2">
                                                        <label class="" for="" id="describe_your_gig_label">
                                                        Describe Your Gig :
                                                        </label>
                                                    </div>
                                                    <div class="col-md-10">
  <textarea name="describe_your_gig" class="form-control2" style="min-height: 125px" id="describe_your_gig">{{ $gig->describe_your_gig ?? "" }} </textarea>
                                                        <div>
                                                            <p class="_emTxt float-left min_description">min. 120</p>
                                                            <p class="_emTxt  float-right text-right">

                                <BrieflyDescribeYourGig></BrieflyDescribeYourGig>/1200 Characters</p>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                    <!-- End : Card -->
                                    <!-- Begin: Card -->
                                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">Frequently Asked Questions</span>
                                            <a  class="btn _dBorBtn" id="add_faq">Add FAQ<span class="_iconRight"><i class="fas fa-plus"></i></span></a>
                                        </div>
                                        <div class="_dsBody">

                                                <div class="_dBorText" style="display: none" id="_dBorText">
                                                    <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" class="false" placeholder="Add a Question ?" id="faq_question">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea class="false" placeholder="Add an Answer" maxlength="300" id="faq_answer"></textarea>
                                                    </div>
                                                </div>

                                                        <p>Add Questions & Answers for Your Buyers. </p>
                                                        <a class="btn _dBorBtn _dsucces" id="add_faq_submit">Add FAQ<span class="_iconRight"><i class="fas fa-plus"></i></span></a>

                                                           <a id="cancel_faq" class="btn _dBorBtn _dsucces">Cancel <span class="_iconLeft"><i class="fas fa-minus"></i></span></a>
                                                    </div>
                                                </div>

                                                  <!-- ADD FAQ : Begin -->
                                                        <div id="addFaq" class="accordion _addFaq-acc">


                                                        </div>
                                                        <!-- ADD FAQ: End -->
                                                <div class="form-group ">
                                                    <div class="_dBtnGroup">
                                        <button class="btn _btn2 _btnSuccess">Save Changes</button>
                    <!-- <a href="javascript:;"   id="describe_your_gig_save"></a> -->
                                                         <a href="{{ url("api/gig-cancel/".Auth::id()) }}" class="btn _btn2 _btnDanger "  onclick="return confirm('Are You Sure ? ')">Cancel</a>
                                                    </div>
                                                </div>


                                        </div>
                                    </div>
                                    <!-- End : Card -->
                                </div>
                                <!-- End : Left Section   -->
                                <!-- Begin : Right Section -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="_gigDefBox">
                                        <figure>
                                            <img src="{{ url("public/storage/images/gig-img.png") }}" alt="">
                                        </figure>
                                        <p class="_gigDefHead">Write Your Description & FAQ</p>
                                        <p class="_gigDefTxt">
                                            Include the most important information for your Gig.<br>
                                            Add frequently asked questions and answers to the most commonly asked questions.
                                        </p>
                                        <a href="#" class="btn _dBorBtn">See examples</a>
                                    </div>
                                </div>
                                <!-- End : Right Section   -->
                            </div>

                                            </form>
                        </div>
                        <!-- End  : Description  -->

                        <!-- Begin : Requirment -->
                        <div id="gRequirment" class="tab-pane fade">
                            <div class="row">
                                <!-- Begin : Left Section   -->
                                <div class="col-lg-8 col-md-12">
                                    <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">Requirements</span>
                                        </div>
                                        <div class="_dsBody">

                                                <div class="_dBorText">
                                                    <div class="form-group" style="margin-bottom: 35px;">
                                                        <p class="_lText">Tell your buyer what you need to get started.</p>
                                                        <p>Structure your Buyer Instructions as free text, a multiple choice question or file upload.</p>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-4"><label class="" for="" id="requirement_label">Requirement #1 :</label></div>
                                                        <div class="col-md-8">
 <textarea placeholder="For example: specifications, dimensions, brand guidelines, or background materials." class="form-control2" style="min-height: 125px" id="requirement">{{ $gig->requirement ?? "" }} </textarea>
                                                            <p class="_emTxt text-right">

                                                                <requirement></requirement> / 450 Characters</p>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-group row">
                                                        <div class="col-md-4"><label class="" for="" id="answer_type_label">Answer Type :</label></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select id="answer_type" class="form-control2">
                                                                    <option value="">Select</option>
<option value="1" {{ !empty($gig->answer_type)?$gig->answer_type==1?"selected":"":"" }}>Go offline1 For</option>
<option value="2" {{ !empty($gig->answer_type)?$gig->answer_type==2?"selected":"":"" }}>Go offline2 For</option>
<option value="3" {{ !empty($gig->answer_type)?$gig->answer_type==3?"selected":"":"" }}>Go offline3 For</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="_mCheckbox">
<input type="checkbox" value="1" id="is_mandatory" {{ !empty($gig->is_mandatory)?"checked":"" }}> Answer is mandatory
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                                <div class="form-group">
                                                                <div class="_dBtnGroup2">
                                                                    <a href="#" class="btn _btn2 _btnSuccess ">Add</a>
                                                                    <a href="#" class="btn _btn2 _btnDanger">Cancel</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>

                                                <div class="_dBtnGroup">
                                             <a href="javascript:;" id="requirement_submit" class="btn _btn2 _btnSuccess ">
                                             Save & Continue
                                         </a>
                                                  <!--   <button type="submit" class="btn _btn2 _btnSuccess ">Save & Continue</button> -->
                                                    <a href="{{ url("api/gig-cancel/".Auth::id()) }}" class="btn _btn2 _btnDanger "  onclick="return confirm('Are You Sure ? ')">Cancel</a>
                                                </div>


                                        </div>
                                    </div>
                                    <!-- End : Card -->
                                </div>
                                <!-- End : Left Section   -->
                                <!-- Begin : Right Section -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="_gigDefBox">
                                        <figure>
                                            <img src="{{ url("public/storage/images/gig-img.png") }}" alt="">
                                        </figure>
                                        <p class="_gigDefHead">Provide Your Requirements</p>
                                        <p class="_gigDefTxt">
                                        Indicate what you need before you can start working.
                                        </p>
                                        <a href="#" class="btn _dBorBtn">See examples</a>
                                    </div>
                                </div>
                                <!-- End : Right Section   -->
                            </div>

                        </div>
                        <!-- End : Requirment -->

                        <!-- Begin : Gallery -->
                        <div id="gGallery" class="tab-pane fade">
                            <div class="row">
                                <!-- Begin : Left Section   -->
                                <div class="col-lg-8 col-md-12">
                                     <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dCardHeader _borderBtm">
                                            <span class="_dHeading">Build Your Gig Gallery</span>
                                        </div>
     <div class="_dsBody">
    <form action="{{ url("api/gig-gallery/create/".Auth::id()) }}"
    class="_dForm" method="post" id="gallery_form" enctype="multipart/form-data">

             <input type="hidden" name="widget_five" value="1">
             <input type="hidden" name="gig_id" value = "{{ $gig->id ??"" }}">
        <div class="_dBorText">
                                                    <!-- Begin : row  -->
        <div class="form-group row">
            <div class="col-md-4">
                <label class="" >
                    <p class="_lText">Gig Photos</p>
                    <p>Upload photos that describe or are related to your Gig.</p>
                </label>
            </div>

                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">
    <input type="file" id="_agntFile-1" class="inputfile" name="gig_photo_one">

                                            <label for="_agntFile-1">
                                                                            <span id="_agntFile1_label">
                    <img src="{{ url("public/storage/images/img-icon.png") }}" alt="" class="_attIcon" id="show_first_image">
                                                                                Drag a Photo or <br>
                                                                                <a href="javascript:;">Browse</a>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">
 <input type="file" id="_agntFile-2" class="inputfile inputfile-2" name="gig_photo_two">
                                                                        <label for="_agntFile-2">
                                                                            <span id="_agntFile2_label">
                                                                                <img src="{{ url("public/storage/images/img-icon.png") }}" alt="" class="_attIcon">
                                                                                Drag a Photo or <br>
                                                                                <a href="#">Browse</a>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">
<input type="file" id="_agntFile-3" class="inputfile inputfile-2" name="gig_photo_three">
                                                                        <label for="_agntFile-3">
                                                                            <span id="_agntFile3_label">
                                                                                <img src="{{ url("public/storage/images/img-icon.png") }}" alt="" class="_attIcon">
                                                                                Drag a Photo or <br>
                                                                                <a href="#">Browse</a>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End : row  -->
                                                    <!-- Begin : row  -->
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <label class="" >
                                                                <p class="_lText">Gig Video</p>
                                                                <p>Add a relevant, high quality video that best showcases your Gig.</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">
<input type="file" id="_agntFile-4" class="inputfile inputfile-2" name="gig_video">
                                                                        <label for="_agntFile-4">
                                                                            <span>
                                                                                <img src="{{ url("public/storage/images/video-icon.png") }}" alt="" class="_attIcon">
                                                                                Drag a Video or <br>
                                                                                <a href="#">Browse</a>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End : row  -->
                                                    <!-- Begin : row  -->
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <label class="" >
                                                                <p class="_lText">Gig PDFs</p>
                                                                <p>We only recommend adding a PDF file if it further clarifies the service you will be providing</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">
<input type="file" id="_agntFile-5" class="inputfile inputfile-2" name="gig_pdf_one">
                                                                        <label for="_agntFile-5">
                                                                            <span>
                                                                                <img src="{{ url("public/storage/images/pdf-icon.png") }}" alt="" class="_attIcon">
                                                                                Drag a Photo or <br>
                                                                                <a href="#">Browse</a>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group _custom__uploadField _cF2">
<input type="file" id="_agntFile-6" class="inputfile inputfile-2" name="gig_pdf_two">
                                                                        <label for="_agntFile-6">
                                                                            <span>
                                                                                <img src="{{ url("public/storage/images/pdf-icon.png") }}" alt="" class="_attIcon">
                                                                                Drag a Photo or <br>
                                                                                <a href="#">Browse</a>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End : row  -->
                                                </div>
                                                <div class="_dBtnGroup">
                                                    <button class="btn _btn2 _btnSuccess">Save & Continue</button>

                                                     <a href="{{ url("api/gig-cancel/".Auth::id()) }}" class="btn _btn2 _btnDanger "  onclick="return confirm('Are You Sure ? ')">Cancel</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End : Card -->
                                </div>
                                <!-- End : Left Section   -->
                                <!-- Begin : Right Section -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="_gigDefBox">
                                        <figure>
                                            <img src="{{ url("public/storage/images/gig-img.png") }}" alt="">
                                        </figure>
                                        <p class="_gigDefHead">Showcase Your Talent</p>
                                        <p class="_gigDefTxt">
                                            Add photos, an introduction video, or PDF files that best represent your service.
                                        </p>
                                        <a href="#" class="btn _dBorBtn">See examples</a>
                                    </div>
                                </div>
                                <!-- End : Right Section   -->
                            </div>

                        </div>
                        <!-- End : Gallery -->

                        <!-- Begin : Publish  -->
                        <div id="gPublish" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-8 col-md-12">
                                    <!-- Begin: Card -->
                                    <div class="_dCard">
                                        <div class="_dsBody">
                                            <div class="_publishDiv text-center">
                                                <figure>
                                                    <img src="{{ url("public/storage/images/publish-img.png") }}" alt="">
                                                </figure>
                                                <p class="_boldGreenTxt">Almost There...</p>
                                                <p>Let's publish your Gig and get  some buyers rolling in.</p>
                             <a href="javascript:;" class="btn _btn2 _btnSuccess " id="publish_gig">Publish Gig</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End : Card -->
                                </div>

                            </div>

                        </div>
                        <!-- Begin : Publish  -->

                    </div>
                </div>
                <!-- End :  Section -->

            </div>
        </div>
    </main>

    @component('scripts/gig-script',['id'=>$gig->id])


    @endcomponent

    <script type="text/javascript">



        $("#gig_category_input").change(function(event) {

    $.post('{{ route('get.subcat') }}', {id: this.value,"_token":"{{ csrf_token() }}"}, function(data, textStatus, xhr) {

         $("#gig_sub_category_input").empty().append(` <option value="">Select</option>`);
        $.each(data, function(index, val) {
             $("#gig_sub_category_input").append(`<option value="${val.id}" ${"{{ $gig->sub_category ?? ""}}"==val.id?"selected":''}>${val.name}</option>`);
        });

    });
}).change();

$(function(){

    $(".optional").attr('disabled', 'disabled');
});

    </script>

    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
    <script>
        $(function(){

        $('#describe_your_gig').ckeditor();




            /*var str = CKEDITOR.instances.editor1.getData();
            console.log(str.length);*/
        })
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
<script>

    $("#add_faq").click(function(event) {
        event.preventDefault();
        $("#_dBorText").show('slow');
    });
    $("#cancel_faq").click(function(event) {
        event.preventDefault();
        $("#_dBorText").hide('slow');
    });
    var count = 1;
    $("#add_faq_submit").click(function(event) {
        event.preventDefault();
        $("#_dBorText").hide('slow');

        let question = $("#faq_question").val();
        let answer = $("#faq_answer").val();

    $("#addFaq").append(`
<div class="card" id="faq_card_${count}">

                <div class="card-header" id="headingOne">
                    <div class="_acc-header">
                        <a data-toggle="collapse" href="#collapse-2-${count}" aria-expanded="true">
                        <span class="_icon-acc"><img src="{{ url('public/storage/images/menu.png') }}" alt=""></span>
                        <span class="_f-heading " id="quetion_title${count}">${question}</span>
                        </a>
                    </div>
                </div>

                <div id="collapse-2-${count}" class="collapse" aria-labelledby="headingOne" data-parent="#addFaq">
                    <div class="card-body">
                        <div class="form-group">
                        <input type="text" placeholder="Write"  id='${count}' class="form-control question" value="${question}" name='question[]'>
                        </div>

                <div class="form-group">
                    <textarea class="form-control answer" style="min-height: 125px" name='answer[]' >${answer}</textarea>
                <div>
                    <p class=" text-right">0/1200 Characters</p>
                </div>
                <div class="_bCard__footer">
                    <a class="_dlt-div delete" href="${count}" ><img src="{{ url('public/storage/images/delete.png') }}" style=""alt="">Delete</a>
                <div>
                  <a href="${count}" class="btn  _badgeDanger cancel" >Cancel</a>
                    <a href="${count}" class="btn  _btnSuccess update">Update</a>
                </div>
         </div>
    </div>

        </div>
            </div>

         </div>

 `);

    count++;

    $("#faq_question").val('');
     $("#faq_answer").val('');

      $(".cancel").click(function(event) {
        event.preventDefault();
        href = this.href.substring(this.href.lastIndexOf('/') + 1);

        $(`a[href='#collapse-2-${href}']`).click();

     });
     $(".delete").click(function(event) {
        event.preventDefault();
        href = this.href.substring(this.href.lastIndexOf('/') + 1);

        $(`#faq_card_${href}`).remove();

        $.post('{{ url('api/gig-description/remove/faq') }}', {faq: this.id});

     });
     $(".update").click(function(event){
        event.preventDefault();
         id = this.href.substring(this.href.lastIndexOf('/') + 1);
         $(`a[href='#collapse-2-${id}']`).click();

         var question = $(`#faq_card_${id} .question`).val();
         var answer = $(`#faq_card_${id} .answer`).val();

         const data = {
            question: question,
            answer: answer,
            id: this.id
         };

         $.post('{{ url('api/gig-description/update/faq') }}', data);

     });

    $(".question").keyup(function(event){
        event.preventDefault();
        $(`#quetion_title${this.id}`).text(this.value);
    })
});

    $(function(){

   @if(!empty($gig->id) && ! empty($gig->gigFaqs()->get()))
   @foreach($gig->gigFaqs()->get() as $faq)
    $("#addFaq").append(`<div class="card" id="faq_card_${count}">

                <div class="card-header" id="headingOne">
                    <div class="_acc-header">
                        <a data-toggle="collapse" href="#collapse-2-${count}" aria-expanded="true">
                        <span class="_icon-acc"><img src="{{ url('public/storage/images/menu.png') }}" alt=""></span>
                        <span class="_f-heading " id="quetion_title${count}">{{ $faq->question}}</span>
                        </a>
                    </div>
                </div>

                <div id="collapse-2-${count}" class="collapse" aria-labelledby="headingOne" data-parent="#addFaq">
                    <div class="card-body">
                        <div class="form-group">
                        <input type="text" placeholder="Write"  id='${count}' class="form-control question" value="{{ $faq->question}}" name='question[]'>
                        </div>

                <div class="form-group">
                    <textarea class="form-control answer" style="min-height: 125px" name='answer[]' >{{ $faq->answer}}</textarea>
                <div>
                    <p class=" text-right">0/1200 Characters</p>
                </div>
                <div class="_bCard__footer">
                    <a class="_dlt-div delete" href="${count}" id='{{ $faq->id }}'><img src="{{ url('public/storage/images/delete.png') }}" style=""alt="">Delete</a>
                <div>
                  <a href="${count}" class="btn  _badgeDanger cancel" >Cancel</a>
                    <a href="${count}" id='{{ $faq->id }}' class="btn  _btnSuccess update">Update</a>
                </div>
         </div>
    </div>

        </div>
            </div>

         </div>`);

    count++;
    @endforeach
    @endif


     $(".cancel").click(function(event) {
        event.preventDefault();
        href = this.href.substring(this.href.lastIndexOf('/') + 1);

        $(`a[href='#collapse-2-${href}']`).click();

     });
     $(".delete").click(function(event) {
        event.preventDefault();
        href = this.href.substring(this.href.lastIndexOf('/') + 1);

        $(`#faq_card_${href}`).remove();

        $.post('{{ url('api/gig-description/remove/faq') }}', {faq: this.id});

     });
     $(".update").click(function(event){
        event.preventDefault();
         id = this.href.substring(this.href.lastIndexOf('/') + 1);
         $(`a[href='#collapse-2-${id}']`).click();

         var question = $(`#faq_card_${id} .question`).val();
         var answer = $(`#faq_card_${id} .answer`).val();

         const data = {
            question: question,
            answer: answer,
            id: this.id
         };

         $.post('{{ url('api/gig-description/update/faq') }}', data);

     });

    $(".question").keyup(function(event){
        event.preventDefault();
        $(`#quetion_title${this.id}`).text(this.value);
    })


    });




</script>
@endsection

