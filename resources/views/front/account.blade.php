@extends('layouts.app')

@section("content")

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <main class="main_body _dBody _grayBg">
        <div class="container">
            <div class="row _dRow">
                <div class="col-md-5 _dLeft">
                    <!-- Begin: Card -->
                    <form  id="avatar_form" enctype="multipart/form-data" method="post" action="{{ url("user/avatar") }}">
                        @csrf
                        
                     <div class="_dCard _p0">
                        <div class="row">
                            <div class="col-md-4">
                              <div class="_dUserPro">
                                @php 
                                $image = !empty($user->userDetail->avatar)?$user->userDetail->avatar:"uploads/user/avatar/icon.svg";
                                @endphp
                                  <img src="{!! url("public/storage/$image")!!}" alt="">
                                  <label for="avatar" class="_editPic"><i class="fas fa-camera"></i></label>
                                  <input type="file" name="avatar" style="display: none" id="avatar">
                                 
                               
                              </div>
                            </div>

                            <div class="col-md-8">
                                <div class="_dUserProDesc">
                                    <h3 class="_dUHead user_name">{{ $user->name ?? "" }}</h3>
                                   <div class="_edit-op-cont"></div> 
                                    
                                <div class="_edit-op-cont">
                                 <p class="_edit-options" id="short_dept_edit_button">
        <img src="http://localhost/hire-a-nerd/public/storage/images/edit.png" alt="" onclick="return changeSortDes()">
                                    </p>

                                      <p id="short_dept">{{ $user->short_desc ?? "What's your story in one line?" }}</p>
                                </div>
                              
                                    <ul class="_DabtUl">
                                        <li><span class="_iconLft"><i class="fas fa-map-marker-alt"></i></span>From :  
                                    {{ $user->location->country_name ?? 'USA' }}

                                        </li>
                                        <li><span class="_iconLft"><i class="fas fa-user"></i></span>Member since : {{ Carbon\Carbon::parse($user->created_at)->format('d/m/Y')  }}</li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>

                    
                    <!-- End : Card -->
                    <!-- Begin: Card -->
                    <div class="_dCard">
                        <div class="_dCardHeader">
                            <span class="_dHeading">Description</span>
                            <a href="javascript:;" class="btn _dBorBtn" id="edit_description">Edit Description</a>
                        </div>
                        <div id="descriptionText">
                            
                            <p>{{ $user->userDetail->description ?? ""}}</p>
                        </div>
                        <div class="_dBorText" id="description">
                            <div class="descrip_box" style="display: none">
                            <div class="row" style="padding-bottom: 11px;">
                                <div class="col-md-12"> 
                                    <textarea name="newDescription" class="form-control" style="height: 160px">
                                        {{ $user->userDetail->description ?? ""}}
                                    </textarea>
                                </div>
                            </div>
                               
                           <button type="button" class="btn btn-success" id="cancelDescription">Cancel</button>      
                            <button type="button" class="btn btn-success" id="updateDescription">Add</button>
                        </div>
                          

                        <div></div></div>
                        <div class="_dCardHeader">
                            <span class="_dHeading">Languages</span>
                            <a href="javascript:;" class="btn _dBorBtn" id="addLanguage">Add Language<span class="_iconRight">
                            	<i class="fas fa-plus"></i></span></a>
                        </div>

                        <div class="_editable-box" style="display: none" id="add_language_fields">
                            <div class="row" style="padding-bottom: 11px;">
                                <div class="col-md-10">
                                    <input type="text" placeholder="Add Language" id="add_language" class="form-control2">
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 11px;">
                                <div class="col-md-10">
                                    <select  id="language_level" class="form-control2">
                                    <option value="0" class="hidden">Language Level</option>
                                    <option value="basic">Basic</option>
                                    <option value="conversational">Conversational</option>
                                    <option value="fluent">Fluent</option>
                                    <option value="native_or_bilingual">Native/Bilingual</option>
                                    </select>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success" id="language_cancel">Cancel</button>      
                            <button type="button" class="btn btn-success" id="submit_language">Add</button>
                        </div>

                        <div class="_editable-box" style="display: none;padding-bottom: 40px" id="edit_language_fields">
                            <div class="row" style="padding-bottom: 11px;">
                                <div class="col-md-10">
                                    <input type="text" placeholder="Add Language" id="edit_language" class="form-control2">
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 11px;">
                                <div class="col-md-10">
                                    <select  id="edit_language_level" class="form-control2">
                                        <option value="0" class="hidden">Language Level</option>
                                        <option value="Basic">Basic</option>
                                        <option value="Conversational">Conversational</option>
                                        <option value="Fluent">Fluent</option>
                                        <option value="Native/Bilingual">Native/Bilingual</option>
                                    </select>
                                </div>
                                <input type="hidden" id="language_id">
                                <input type="hidden" id="langs">
                            </div>
                            <button type="button" class="btn btn-success" id="edit_language_cancel">Cancel</button>      
                            <button type="button" class="btn btn-success" id="update_language">Update</button>
                        </div>

                       
                        <div class="_dsBody">
                            <ul id="lang_list">
                            	@foreach($user->userLang as $key => $lang)
                                <li class="_edit-op-cont" id="langs{{ $lang->id ?? ""}}">
                                     <p class="_edit-options">
    <a onclick='editLanguage("{{ $lang->Language->name ?? ''}}","{{ $lang->language_level ?? ''}}","{{ $lang->id ?? ""}}")' >
        <img src="{{ asset('public/storage/images/edit.png') }}" alt="">
    </a>
    <a onclick='deleteLanguage("{{ $lang->id ?? ""}}")'><img src="{{ asset('public/storage/images/delete.png') }}" alt=""></a>
                                    </p>
                                    {{ $lang->Language->name ?? "" }} - {{ ucfirst($lang->language_level ?? "") }}
                                </li>
                   				@endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End : Card -->
                    <!-- Begin: Card -->
                    <div class="_dCard">
                        <div class="_dCardHeader">
                            <span class="_dHeading">Linked Accounts</span>                            
                        </div>  

                        <div class="_dsBody">
                            <ul>
                                <li>
                                   {{ !empty($facebook)?'':'+' }}<a href="{{ !empty($facebook)?'javascript:;':route("facebook.social.login") }}" class="{{ !empty($facebook)?'_highLighed':'' }}">Facebook </a>

                                </li>

                                <li>
                                    <a href="{{ !empty($google)?'javascript:;':route("google.social.login") }}" class="{{ !empty($google)?'_highLighed':'' }}"> {{ !empty($google)?'':'+' }} Google Linked </a>
                                </li>

                                <li>
                                    <a href="{{ !empty($dribble)?'javascript:;':route("dribbble.login") }}" class="{{ !empty($dribble)?'_highLighed':'' }}">{{ !empty($dribble)?'':'+' }} Dribbble </a>
                                </li>

                                <li>
                                    <a href="{{ !empty($stack)?'javascript:;':route("stack-exchange.login") }}" class="{{ !empty($stack)?'_highLighed':'' }}"> {{ !empty($stack)?'':'+' }} Stack Overflow </a>
                                </li>

                                <li>
                                    <a href="{{ route('linkedin.login') }}">+ Linkedin </a>
                                </li>
                                <li>
                                    <a href="#">+ Behance</a>
                                </li>

                                <li>
                                    <a href="{{ !empty($github)?'javascript:;':route("github.social.login") }}" class="{{ !empty($github)?'_highLighed':'' }}">{{ !empty($github)?'':'+' }} GitHub </a>
                                </li>

                                <li>
                                    <a href="{{ !empty($vimeo)?'javascript:;':route("vimeo.social.login") }}" class="{{ !empty($vimeo)?'_highLighed':'' }}"> {{ !empty($vimeo)?'':'+' }} Vimeo </a>
                                </li>
                                 <li>
                                    <a href="{{ !empty($vimeo)?'javascript:;':route("twitter.social.login") }}" class="{{ !empty($vimeo)?'_highLighed':'' }}"> {{ !empty($vimeo)?'':'+' }} Twitter </a>
                                </li>
                                 <li>
                                    <a href="{{ !empty($vimeo)?'javascript:;':route("instagram.social.login") }}" class="{{ !empty($vimeo)?'_highLighed':'' }}"> {{ !empty($vimeo)?'':'+' }} Instagram </a>
                                </li>
  
                            </ul>
                        </div>
                    </div>  
                    <!-- End : Card -->
                    <!-- Begin: Card -->
                    <div class="_dCard">
                        <div class="_dCardHeader">
                            <span class="_dHeading">Skills</span> 
                            <a href="javascript:;" class="btn _dBorBtn" id="skill_button">Add Skills <span class="_iconRight"><i class="fas fa-plus"></i></span></a>  
                        </div> 
                        <div class="_editable-box" style="display: none" id="add_skill_fields">
                            <div class="row" style="padding-bottom: 11px;padding-top: 11px">
                                <div class="col-md-10">
                                    <input type="text" placeholder="Add Skill (e.g. Voice Talent)" id="add_skill" class="form-control2">
                                    <span class="text-danger" id="skill_error">
                                        
                                    </span>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 11px;">
                                <div class="col-md-10">
                                <select  id="skill_level" class="form-control2">                                    
                                    <option value="0" class="hidden">Experience Level</option>
                                    <option value="beginner">Beginner</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="pro">Expert</option>
                                </select>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success" id="skill_cancel">Cancel</button>
                            <button type="button" class="btn btn-success" id="skill_submit">Add</button>  
                        </div>
                        <div class="_dBorText">
                            <ul class="" id="skill_list">
                          @unless(empty($user->skill))
                              @foreach($user->skill as $skill)
                              	<li class="_edit-op-cont" id="skillLi{{ $skill->id }}"> 
                                      <p class="_edit-options">
   
    <a onclick="deleteSkill('{{ $skill->id }}')">
        <img src="{{ asset('public/storage/images/delete.png') }}" alt=""></a>
                                    </p>
                                    {{ $skill->skill_name ?? ""}} - {{ $skill->skill_level ?? ""}}
                                </li>
                             
                                   
                                   
                               
                              @endforeach
                          @endunless
                            </ul>
                        </div>    
    <div class="_dCardHeader">
        <span class="_dHeading">Education</span> 
            <a href="javascript:;" id="university_add_button" class="btn _dBorBtn">
                Add Education 
                <span class="_iconRight">
                    <i class="fas fa-plus"></i>
                </span>
            </a>                            
    </div>  
    <div class="_editable-box" style="display:none" id="add_education_fields">
        <div class="row" style="padding-bottom: 11px;padding-top: 10px">
            <div class="col-md-10">
                <input type="text"  class="form-control2" id="university_country_name" placeholder="Country of College/University">
                <span class="text-danger" id="country_errro"></span>              		
            </div>
        </div>
        <div class="row" style="padding-bottom: 11px;">
            <div class="col-md-10">
                <input type="text"  class="form-control2" id="university_name" placeholder="College/University">
                    <span class="text-danger" id="university_errro"></span>                  		
            </div>
        </div>
        <div class="row" style="padding-bottom: 11px;">
            <div class="col-md-3">	
                <select class="degree-title" id="education_title">
                    <option value="0" class="hidden">Title</option>
                    <option value="associate">Associate</option>
                    <option value="certificate">Certificate</option>
                    <option value="ba">B.A.</option>
                    <option value="barch">BArch</option>
                    <option value="bm">BM</option>
                    <option value="bfa">BFA</option>
                    <option value="bsc">B.Sc.</option>
                    <option value="ma">M.A.</option>
                    <option value="mba">M.B.A.</option>
                    <option value="mfa">MFA</option>
                    <option value="msc">M.Sc.</option>
                    <option value="jd">J.D.</option>
                    <option value="md">M.D.</option>
                    <option value="phd">Ph.D</option>
                    <option value="llb">LLB</option>
                    <option value="llm">LLM</option>
                </select>
                    <span class="text-danger" id="title_errro"></span> 
            </div>
            <div class="col-md-7">
                <input type="text" class="form-control2" placeholder="Major" id="branch_id">
                    <span class="text-danger" id="brach_errro"></span> 
            </div>
        </div>
        <div class="row" style="padding-bottom: 11px;">
            <div class="col-md-10">
                <select class="form-control2" id="education_year">
                    @for($i = date('Y'); $i>= 1960; $i--)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <span class="text-danger" id="edu_year_errro"></span> 
            </div>
        </div>
            <button type="button" class="btn btn-success" id="education_cancel">Cancel</button>
            <button type="button" class="btn btn-success" id="submit_education">Add</button>                        
    </div> 
    <div class="_dBorText">
        <ul id="user_education_list" >
            @foreach($user->userEducation as $education)
                <li class="_edit-op-cont" id="userEducationLi{{ $education->id }}">
                     <p class="_edit-options">
<a  onclick="deleteEducation('{{ $education->id }}')">
        <img src="{{ asset('public/storage/images/delete.png') }}" alt="">
</a>
                    </p>

                    {{ $education->country->name  ?? "" }} - {{ $education->university->name ?? "" }} <p> 
                    {{ $education->title ?? "" }}  {{ $education->branch_id ?? "" }} 
                    {{ $education->userEducation ?? "" }}
                </li>
            @endforeach
        </ul>
    </div> 
                        <div class="_dCardHeader">
                            <span class="_dHeading">Certification</span> 
                            <a href="javascript:;" class="btn _dBorBtn" id="add_certication_button">Add Certification <span class="_iconRight"><i class="fas fa-plus"></i></span></a> 
                        </div>  
                        <div class="_editable-box" style="display:none" id="add_certification_fields">
                                <div class="row" style="padding-bottom: 11px;padding-top: 10px">
                                    <div class="col-md-10">
                                        <input type="text" placeholder="Certificate or Award" id="add_certificate_award" class="form-control2">
                                    </div>
                                </div>
                                 <div class="row" style="padding-bottom: 11px;">
                                    <div class="col-md-10">
                                        <input type="text" class="form-control2" placeholder="Certified From (e.g. Adobe)" id="certificate_from">
                                    </div>
                                </div>
                                <div class="row" style="padding-bottom: 11px;">
                                    <div class="col-md-5">
                                        <select class="form-control2" id="certification_year">
                                            @for($i = date('Y'); $i>= 1960; $i--)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success" id="certification_cancel">Cancel</button>
                                <button type="button" class="btn btn-success" id="submit_certification">Add</button>                      
                            </div>
                        <ul id="certification_list">
                        @unless(empty($user->userCertification))
                        	@foreach($user->userCertification as $certification)
                        	<li> {{ $certification->certified ?? "" }} <p>{{ $certification->certified_from ?? "" }} {{  $certification->year ?? ""}}</p>	 
                            <div class="animate">
                              <span class="" data-hint="">
                                <a href="#" class="pencil"></a>
                              </span>
                              <span class="delete" data-hint="">
                                <a href="#" class="trash-can"></a>
                              </span>
                            </div>
                        	</li>
                        	@endforeach
                        @endunless
                        </ul> 
                                 
                    </div>    
                    
                    <!-- End : Card -->
                </div>
                <!-- Right page -->
                <div class="col-md-7 _dRight">
                    <div class="_dTabNav">
                        <ul class="nav nav-tabs">                           
                            <li><a data-toggle="tab" href="#dAcc" class="active">Account</a></li>
                            <li><a data-toggle="tab" href="#dSec">Security</a></li>
                            <li><a data-toggle="tab" href="#dNoti">Notifications</a></li>
                            <li><a data-toggle="tab" href="#dBill">Billing</a></li>
                            <li><a data-toggle="tab" href="#banking">Banking</a></li>
                        </ul>
                    </div>
                    <!-- Tab Cont Begin  -->
                    <div class="tab-content">     
                        <!-- Begin : Account Tab Pannel -->                   
                        <div id="dAcc" class="tab-pane fade in active show">
                             <!-- Begin: Card -->
                             <div class="_dCard">
                                <div class="_dCardHeader _borderBtm">                            
                                    <span class="_dHeading ">My Account</span> 
                                </div>                        
                                <div class="_dsBody">
                                    <form action="" class="_dForm">
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Full Name </label></div>
                                            <div class="col-md-8">
                                          <input type="text" placeholder="Type your Name" class="form-control2" id="full_name">

                                          <span class="text-danger" id="full_name_error"></span>
                                      </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Email Address :</label></div>
                                            <div class="col-md-8">
                                            	<input type="email" placeholder="Enter your Email" class="form-control2" id="email">
                                            	<span class="text-danger" id="email_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Mobile Number :</label></div>
                                            <div class="col-md-8">
                                                <input type="text" maxlength="10" placeholder="Enter Mobile Number" class="form-control2" id="mobile_number">
                                                <span class="text-danger" id="mobile_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Online Status :</label></div>
                                            <div class="col-md-8">
                                                <select name="" id="online_status" class="form-control2">
                                                    <option value="0">Go offline</option>
                                                    <option value="1">Go online</option>
                                                    <option value="2">Go Ideal</option>
                                                    <option value="3">Go hidden</option>
                                                </select>
                                                <p class="_emTxt">When online, your Services are visible under the Online search filter.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="javascript:;" class="btn _btn2 _btnSuccess " id="saveProfile">Save Changes</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End : Card -->
                            <!-- Begin: Card -->
                            <div class="_dCard">
                                <div class="_dCardHeader _borderBtm">                            
                                    <span class="_dHeading ">Account Deactivation</span> 
                                </div>                        
                                <div class="_dsBody">
                                    <form action="" class="_dForm">                                        
                                        <div class="form-group row">
                                            <div class="col-md-8">
                                                <p class="_txtRed"><strong>What happens when you deactivate your account?</strong></p>
                                                <ul class="_listStyle">
                                                    <li>Your profile and Service won't be shown on Hire A Nerd anymore. </li>
                                                    <li>Active orders will be cancelled.</li> 
                                                    <li>You won't be able to re-activate your Service.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">I'm leaving because... </label></div>
                                            <div class="col-md-8">
                                                <select  id="deactive_reasion" class="form-control2">
                                                    <option value="">Reason</option>
                                                    <option value="time wasting" {{ $user->deative_reasion??""== "time wasting" ? "selected":''}}>Time Wasting</option>
                                                    <option value="not usefull for me" {{ $user->deative_reasion??""== "not usefull for me" ? "selected":''}}>Not Usefull for me
                                                    </option>
                                                    <option value="other" {{ $user->deative_reasion??""== "other" ? "selected":''}}>Other</option>
                                                </select>                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="javascript:;" id="deactive_button" class="btn _btn2 _btnDanger">Deactivate Account</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End : Card -->                        
                        </div>
                        <!-- End : Account Tab Pannel -->

                        <!-- Begin : Description Tab Pannel -->
                        <div id="dSec" class="tab-pane fade">
                            <!-- Begin: Card -->
                            <div class="_dCard">
                                <div class="_dCardHeader _borderBtm">                            
                                    <span class="_dHeading ">Security</span> 
                                </div>                        
                                <div class="_dsBody">
                                    <div class="_dBorText">
                                        <form action="" class="_dForm"> 
                                            <div class="form-group row">
                                                <div class="col-md-4"><label class="" for="">Set Password :</label></div>
                                                <div class="col-md-8">
                <input type="password" placeholder="New Password" id="password" class="form-control2 _mB15">
                <span class="text-danger" id="password_error"></span>
                <input type="password" placeholder="Confirm Password" class="form-control2" id="confirm_password">    
                <span class="text-danger" id="password_confirm_error"></span>
                                                    <p class="_emTxt">8 characters or longer. Combine upper and lowercase letters and numbers.</p>                                           
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="javascript:;" id="change_password" class="btn _btn2 _btnSuccess">Save Changes</a>
                                            </div>
                                        </form>
                                    </div>
                                   <!--  <div class="_dBorText">
                                       <div class="_dCardHeader">
                                           <div>
                                               <span class="_dHeading _mB15">Phone Verification</span>
                                               <p>Your phone is not verified with Hire a nerd <br>
                                                  Click Verify Now to complete phone verification</p>
                                           </div>
                                           <a href="#" class="btn _btn2 _btnVerify">Verify Now</a>
                                       </div>
                                   </div> -->
                                    <!-- <div class="_dBorText">
                                        <div class="_dCardHeader">
                                            <div>
                                                <span class="_dHeading _mB15">Security Questions</span>
                                                <p>By creating a security question, you will add an additional layer of <br>protection for your revenue withdrawals and for changing your password.</p>
                                            </div>
                                            <a href="#" class="btn _btn2 _btnVerify">Set</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!-- End : Card -->                        
                        </div>
                        <!-- End : Description Tab Pannel -->

                        <!-- Begin : Notification Tab Pannel -->
                        <div id="dNoti" class="tab-pane fade">
                            <!-- Begin: Card -->
                            <div class="_dCard">
                                <div class="_dCardHeader _borderBtm">                            
                                    <span class="_dHeading">Notification</span> 
                                </div>                        
                                <div class="_dsBody">
                                    <div class="_dBorText">
                                        <p>For important updates regarding your {{ env('APP_NAME') }} activity, certain notifications cannot be disabled.</p>
                                        <form action="" class="_dForm">
                                            <div class="form-group row">
                                                <div class="col-lg-8 col-md-12">
                                                    <div class="table-responsive _dTable">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Type</th>
                                                                    <th>Email</th>
                                                                    <th>Mobile</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Inbox Messages</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Order Messages</td>                                                        
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Order Updates</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Buyer Requests	</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>My Services</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>My Account	</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>To-dos</td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="_mCheckbox">
                                                                            <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>                                               
                                                    </div>
                                                </div>
                                            </div> 
                                           <div class="form-group">
                                                <a href="#" class="btn _btn2 _btnSuccess ">Save Changes</a>
                                            </div>
                                        </form>
                                    </div>  
                                   <!--  <div class="_dCardHeader">                            
                                       <span class="_dHeading">Real Time Notification</span> 
                                   </div>   -->
                                    <!-- <form action="" class="_dForm">
                                                                            <div class="form-group row">
                                                                                <div class="col-lg-8 col-md-12">
                                                                                    <div class="table-responsive _dTable">
                                                                                        <table class="table">                                                           
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>Enable/disable real-time notifications</td>
                                                                                                    <td>
                                                                                                        <span class="_mSwitch ">
                                                                                                            <label>
                                                                                                                <input type="checkbox" checked>
                                                                                                                <span></span>
                                                                                                            </label>
                                                                                                        </span>
                                                                                                    </td>                                                                    
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Enable/disable sound</td>                                                        
                                                                                                    <td>
                                                                                                        <span class="_mSwitch ">
                                                                                                            <label>
                                                                                                                <input type="checkbox">
                                                                                                                <span></span>
                                                                                                            </label>
                                                                                                        </span>
                                                                                                    </td>                                                                    
                                                                                                </tr>                                                               
                                                                                            </tbody>
                                                                                        </table>                                               
                                                                                    </div>
                                                                                </div>
                                                                            </div> 
                                                                           <div class="form-group">
                                                                                <a href="#" class="btn _btn2 _btnSuccess ">Save Changes</a>
                                                                            </div>
                                                                        </form> -->                                
                                </div>
                               
                            </div>
                            <!-- End : Card -->
                        </div>
                        <!-- End  : Notification Tab Pannel -->

                        <!-- Begin : Billing Tab Pannel -->
                        <div id="dBill" class="tab-pane fade">
                             <!-- Begin: Card -->
                             <div class="_dCard">
                                 <div class="_dBorText">
                                    <div class="_dCardHeader _mB10">                            
                                        <span class="_dHeading ">Billing Information</span> 
                                    </div> 
                                    <p>The following information will be displayed on your invoices:</p>                     
                                 </div>
                                                
                                <div class="_dsBody">
                                    <form action="" class="_dForm">
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Company Name :</label></div>
                                            <div class="col-md-8">
            <input type="text" placeholder=""
                class="form-control2"
                id="company_name"
                value="{{ $user->userBillingAaddresses->company_name ?? '' }}"

            >

                                              <span class="text-danger" id="company_name_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Full Name :</label></div>
                                            <div class="col-md-8">
            <input type="email" placeholder="" 
                class="form-control2" 
                id="name"
                value="{{ $user->userBillingAaddresses->full_name ?? '' }}" 
            >
                                              <span class="text-danger" id="name_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Country :</label></div>
                                            <div class="col-md-5">
            <input type="text" 
                id="country" 
                class="form-control2"
                value="{{ $user->userBillingAaddresses->country_id ?? '' }}" 
            >
                                               <span class="text-danger" id="country_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Address :</label></div>
                                            <div class="col-md-8">
            <input type="text" 
                placeholder="" 
                class="form-control2" 
                id="address"
                value="{{ $user->userBillingAaddresses->address ?? '' }}" 
            >
                                              <span class="text-danger" id="address_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">City :</label></div>
                                            <div class="col-md-5">
            <input type="text" 
                placeholder="" 
                class="form-control2" 
                id="city"
                value="{{ $user->userBillingAaddresses->city_id ?? '' }}" 
            >
                                              <span class="text-danger" id="city_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Zip Code :</label></div>
                                            <div class="col-md-5">
            <input type="text" 
                id="zip_code" 
                placeholder="" 
                class="form-control2"
                value="{{ $user->userBillingAaddresses->zip_code ?? '' }}" 
            >
                                              <span class="text-danger" id="zip_code_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" for="">Invoice : </label></div>
                                            <div class="col-md-5">
                                                <label  class="_mCheckbox _mB0">
            <input type="checkbox" {{ $user && $user->userBillingAaddresses && $user->userBillingAaddresses->is_invoice ?'checked':'' }} value="1" id="invoice_email"> Send me invoice via email
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="javascript:;" class="btn _btn2 _btnSuccess " id="billing_info_save">Save Changes</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End : Card -->
                        </div>
                        <!-- End : Billing Tab Pannel -->
                    </div>
                    <!-- Tab cont End    -->
                    
                </div>
                <!-- Right page -->
            </div>
        </div>        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
    	
	$("#avatar").change(function(){

		$("#avatar_form").submit();
	});

    $("#cancelDescription").click(function(){
            
        $("#descriptionText").show();
        $(".descrip_box").hide();
        $("TEXTAREA[name=newDescription]").val($("#descriptionText").text().trim());
            });


	$("#edit_description").click(function(){

        $("TEXTAREA[name=newDescription]").val($("#descriptionText").text().trim());
		$("#descriptionText").hide();
        $(".descrip_box").show();			
		});
            $("#updateDescription").click(function()
            {
                $newDescription = $("TEXTAREA[name=newDescription]").val();


                $.ajax({
                    url: '{{ url('api/user/description') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: {id: '{{ Auth::id() }}','description': $newDescription},
                })
                .done(function(data) {
            
            $("#descriptionText").show();
            $(".descrip_box").hide();
            $("TEXTAREA[name=newDescription]").val($("#descriptionText").text($newDescription).trim());
                   
                })
                .fail(function(e) {
                    Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: `${e.responseJSON.errors.description}`,
                            });
                })
                .always(function(c) {
                    console.log(c);
                });
           });


	$("#addLanguage").click(function(){

		$(this).hide()
		$("#add_language_fields").show();

	});

	$("#language_cancel").click(function(){

		$("#addLanguage").show()
		$("#add_language_fields").hide();
	})
	$("#submit_language").click(function(){

    	$.ajax({
    		url: '{{ url('api/user/language') }}',
    		type: 'POST',
    		dataType: 'json',
    		data: {"language_id": $("#add_language").val() ,"language_level": $("#language_level").val() ,"id": "{{ Auth::id() }}"},
    	})
    	.done(function(data) {
    			$("#addLanguage").show()
				$("#add_language_fields").hide();
				$("#lang_list").append(` <li class="_edit-op-cont" id="langs{{ $lang->id ?? '' }}">
                                     <p class="_edit-options">
    <a onclick='editLanguage("${ data.data.lang.name }","{{ $lang->language_level ?? '' }}","{{ $lang->id ?? '' }}")' >
        <img src="{{ asset('public/storage/images/edit.png') }}" alt="">
    </a>
    <a onclick='deleteLanguage("{{ $lang->id ?? '' }}")'><img src="{{ asset('public/storage/images/delete.png') }}" alt=""></a>
                                    </p>
                            ${ data.data.lang.name } - ${ ucfirst(data.data.userLanguage.language_level) }
                                </li>`);
                $("#add_language").val('');
                $("#language_level").val(0);
    	})
    	.fail(function(e) {
    		Swal.fire({
				type: 'error',
				title: 'Oops...',
				text: `language Not Found`,
			});
    	});
    	


	});


	$("#add_certication_button").click(function(){

		$(this).hide();
		$("#add_certification_fields").show();

	});
	$("#certification_cancel").click(function(){

		$("#add_certication_button").show();
		$("#add_certification_fields").hide();
	})
	$("#submit_certification").click(function(event) {
	
		$.ajax({
			url: '{{ url("api/user/certification") }}',
			type: 'POST',
			dataType: 'json',
			data: {certified: $("#add_certificate_award").val(),certified_from: $("#certificate_from").val(),year: $("#certification_year").val(),id: '{{ Auth::id() }}'},
		})
		.done(function(success) {
			
			$("#certification_list").append(`<li>${$("#add_certificate_award").val()} <p>${$("#certificate_from").val()} ${$("#certification_year").val()}</p></li>`)
			$("#add_certication_button").show();
			$("#add_certification_fields").hide();
		})
		.fail(function(e) {
			Swal.fire({
							  type: 'error',
							  title: 'Oops...',
							  html: `${e.responseJSON.errors.certified} <br> ${e.responseJSON.errors.certified_from}`,
							});
		});
		
	});


	$("#university_add_button").click(function(){

		$(this).hide();
		$("#add_education_fields").show();

	});
	$("#education_cancel").click(function(){

		$("#university_add_button").show();
		$("#add_education_fields").hide();

	});
	$("#submit_education").click(function(){

		$.ajax({
			url: '{{ url("api/user/education") }}',
			type: 'POST',
			dataType: 'json',
			data: {id: '{{ Auth::id() }}',country_id: $("#university_country_name").val(),university_id: $("#university_name").val(),title: $("#education_title").val(),branch_id: $("#branch_id").val(),year: $("#education_year").val()},
		})
		.done(function() {

			$("#user_education_list").append(`<li>${$("#university_country_name").val()} - ${$("#university_name").val()} <p> 
			 ${$("#education_title").val()}  ${$("#branch_id").val()} ${$("#education_year").val()}</li>`)
				
			$("#university_add_button").show();
			$("#add_education_fields").hide();
		})
		.fail(function(e) {

			$("#country_errro").html(e.responseJSON.errors.country_id);
			$("#university_errro").html(e.responseJSON.errors.university_id);
			$("#title_errro").html(e.responseJSON.errors.title);
			$("#brach_errro").html(e.responseJSON.errors.branch_id);
			$("#edu_year_errro").html(e.responseJSON.errors.year);
		});
		

	});

	$("#saveProfile").click(function(){

			$.ajax({
				url: '{{ url("api/user/my-account") }}',
				type: 'POST',
				dataType: 'json',
				data: {
                    name: $("#full_name").val(),
                    email: $("#email").val(),
                    mobile_number: $("#mobile_number").val(),
                    online_status:$("#online_status").val(),
                    id:"{{ Auth::id() }}"},
			})
			.done(function() {

				$(".user_name").html( $("#full_name").val());
				$("#full_name, #email").val("")
				$("#full_name_error, #email_error").html("")
				Swal.fire({
							  type: 'success',
							  text: `Updated`,
							});
			})
			.fail(function(e) {
				
				$("#full_name_error").html(e.responseJSON.errors.name);
				$("#email_error").html(e.responseJSON.errors.email);
			})
			.always(function() {
				console.log("complete");
			});
			

	});

	$("#deactive_button").click(function(){

		$.get('{{ route('deactive.reason') }}', {"deactive_reason": $("#deactive_reasion").val(),id: "{{ Auth::id() }}"}, function(data, textStatus, xhr) {
			if(data.success==true)
			{
				Swal.fire({
							  type: 'success',
							  text: `Deactive`,
							});
			}
		});

	});

	$("#skill_button").click(function(){

		$(this).hide();
		$("#add_skill_fields").show();

	});
	$("#skill_cancel").click(function(){

		$("#skill_button").show();
		$("#add_skill_fields").hide();		
	});

	$("#skill_submit").click(function(){

		$.ajax({
			url: '{{ url("api/user/skills") }}',
			type: 'POST',
			dataType: 'json',
			data: {id: '{{ Auth::id() }}',
			skill_name: $("#add_skill").val(),
			skill_level: $("#skill_level").val(),},
		})
		.done(function(result) {
			console.log(result);
			$("#skill_list").append(`<li>${ucfirst(result.data.skill_name)} - ${ucfirst(result.data.skill_level)}</li> `)
			$("#skill_button").show();
			$("#add_skill_fields").hide();	
            $("#skill_error").html('');	
            $("#add_skill").val('')	;
            $("#skill_level").val(0);
		})
		.fail(function(e) {
			
			$("#skill_error").html(e.responseJSON.errors.skill_name);
		});
		

	});

  $("#change_password").click(function(){

    $.ajax({
      url: '{{ url("api/user/change-password") }}',
      type: 'POST',
      dataType: 'json',
      data: {password: $("#password").val(),
      "password_confirmation": $("#confirm_password").val(),
      id: "{{ Auth::id() }}"
    },
    })
    .done(function(res) {

      $("#password").val("");
      $("#confirm_password").val("");
      Swal.fire({
                type: 'success',
                title: 'Password Updated',
              });
    })
    .fail(function(e) {
      $("#password_error").html(e.responseJSON.errors.password);
     $("#password_confirm_error").html(e.responseJSON.errors.password_confirmation);
    });
    

  });

  $("#billing_info_save").click(function(){


    $.ajax({
        url: '{{ url("api/user/billing-address") }}',
        type: 'POST',
        dataType: 'json',
        data: {id:"{{ Auth::id() }}",
        company_name: $("#company_name").val(),
        full_name: $("#name").val(),
        country_id: $("#country").val(),
        address:$("#address").val(),
        city_id:$("#city").val(),
        zip_code:$("#zip_code").val(),
        is_invoice:$("#invoice_email").val()
    },
    })
    .done(function(res) {

        $("#company_name").val("");
        $("#name").val("");
        $("#country").val("");
        $("#address").val("");
        $("#city").val("");
        $("#zip_code").val("");
        $("#invoice_email").val("")
        $("#company_name_error").html("");
        $("#name_error").html("");
        $("#country_error").html("");
        $("#address_error").html("");
        $("#city_error").html("");
        $("#zip_code_error").html("");

        Swal.fire({
                type: 'success',
                title: 'Billing Info saved',
              });
    })
    .fail(function(e) {
          $("#company_name_error").html(e.responseJSON.errors.company_name);
          $("#name_error").html(e.responseJSON.errors.full_name);
          $("#country_error").html(e.responseJSON.errors.country_id);
          $("#address_error").html(e.responseJSON.errors.address);
          $("#city_error").html(e.responseJSON.errors.city_id);
          $("#zip_code_error").html(e.responseJSON.errors.zip_code);
        //  $("#invoice_email").html(e.responseJSON.company_name);
    });
    

  })


    </script>
  <script>
  	 var availableTags = "{{ url("api/user/language") }}";
  $( function() {

     $( "#add_language,#edit_language" ).autocomplete({
      source: function (request, response) {
         $.ajax({
             url: availableTags,
             type: "GET",
             data: {"name":request.term},
             success: function (data) {
                 response($.map(data, function (el) {
                     return {
                     	 value: el.id,
                         label: el.name
                     };
                 }));
             }
         }).fail(function(e) {
    		Swal.fire({
							  type: 'error',
							  title: 'Oops...',
							  text: `language Not Found`,
							});
    	});
    },select: function (event, ui) {
        // Prevent value from being put in the input:
        this.value = ui.item.label;
        // Set the next input's value to the "value" of the item.
        $(this).next("input").val(ui.item.value);
        event.preventDefault();
    }
    });

    } );

    $( function() {

     $( "#university_name" ).autocomplete({
      source: function (request, response) {
         $.ajax({
             url: "{{ route('search.university') }}",
             type: "GET",
             data: {"name":request.term},
             success: function (data) {
                 response($.map(data, function (el) {
                     return {
                     	 value: el.id,
                         label: el.name
                     };
                 }));
             }
         }).fail(function(e) {
    		Swal.fire({
							  type: 'error',
							  title: 'Oops...',
							  text: `University Not Found`,
							});
    	});
    },select: function (event, ui) {
        // Prevent value from being put in the input:
        this.value = ui.item.label;
        // Set the next input's value to the "value" of the item.
        $(this).next("input").val(ui.item.value);
        event.preventDefault();
    }
    });

      $( "#university_country_name" ).autocomplete({
      source: function (request, response) {
         $.ajax({
             url: "{{ route('search.country') }}",
             type: "GET",
             data: {"name":request.term},
             success: function (data) {
                 response($.map(data, function (el) {
                     return {
                     	 value: el.id,
                         label: el.name
                     };
                 }));
             }
         }).fail(function(e) {
    		Swal.fire({
							  type: 'error',
							  title: 'Oops...',
							  text: `Country Not Found`,
							});
    	});
    },select: function (event, ui) {
        // Prevent value from being put in the input:
        this.value = ui.item.label;
        // Set the next input's value to the "value" of the item.
        $(this).next("input").val(ui.item.value);
        event.preventDefault();
    }
    });

    $( "#add_skill" ).autocomplete({
      source: function (request, response) {
         $.ajax({
             url: "{{ url('api/user/find-skills') }}",
             type: "GET",
             data: {"name":request.term},
             success: function (data) {
                 response($.map(data, function (el) {
                     return {
                     	 value: el.id,
                         label: el.name
                     };
                 }));
             }
         }).fail(function(e) {
    		Swal.fire({
							  type: 'error',
							  title: 'Oops...',
							  text: `Skill Not Found`,
							});
    	});
    },select: function (event, ui) {
        // Prevent value from being put in the input:
        this.value = ui.item.label;
        // Set the next input's value to the "value" of the item.
        $(this).next("input").val(ui.item.value);
        event.preventDefault();
    }
    });

    } );

    function editLanguage(language,level,id){
            
        $(`#langs`).val(id);
        $("#addLanguage").hide();
        $("#edit_language_fields").show('slow');
        $("#edit_language").val(language);
        if(level == 'native_or_bilingual'){
            $("#edit_language_level").val('Native/Bilingual');
        }else{
            $("#edit_language_level").val(ucfirst(level));    
        }
        
        $("#language_id").val(id);
    }
    function deleteLanguage(id) {
      
        $(`#langs${id}`).remove();
        $.post('{{ url('api/user/language/destroy') }}', {id: id});
    }

    $("#edit_language_cancel").click(function(event) {
            event.preventDefault();
            $("#addLanguage").show('slow');
            $("#edit_language_fields").hide('slow');
    });
    $("#update_language").click(function(e){
        e.preventDefault();
        const data = {
            language_id: $("#edit_language").val(),
            language_level: $("#edit_language_level").val(),
            id:$("#language_id").val(),
        };


        $.post('{{ url("api/user/language/update") }}', data, function(data) {
                
                $("#edit_language_fields").hide('slow');
                $(`#langs${$('#langs').val()}`).remove();
                $("#lang_list").append(`<li class="_edit-op-cont" id="langs${ data.id }">
                                     <p class="_edit-options">
    <a onclick='editLanguage("${ data.language.name }","${ data.language_level }","${ data.id }")' >
        <img src="{{ asset('public/storage/images/edit.png') }}" alt="">
    </a>
    <a href="#"><img src="{{ asset('public/storage/images/delete.png') }}" alt=""></a>
                                    </p>
                                    ${ data.language.name } - ${ ucfirst(data.language_level) }
                                </li>`);
        });
        
    });

    function ucfirst(string) 
    {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }
    function changeSortDes(){
        $("#short_dept_edit_button").hide();
        var html = $("#short_dept").text();
        $("#short_dept").html(`<input type="text" onblur="changeSortDesSave()" class="form-control" name="" value="${html}" placeholder="" id="sortDesTextBox" maxlength="40">`);

        $("#sortDesTextBox").focus();
    }
    function changeSortDesSave(html) {
        $("#short_dept_edit_button").show();
        $.post('{{ url('user/short-description') }}', {shortDesc: $("#sortDesTextBox").val(),_token:"{{ csrf_token() }}"}, function(data, textStatus, xhr) {
         $("#short_dept").html(`${data.data}`);
        });
    }
    function deleteSkill(skillId) {
        $(`#skillLi${skillId}`).empty();
        $.post('{{ url('user/user-skill/destroy') }}', {id: skillId,_token:'{{ csrf_token() }}'});
    }
    function deleteEducation(educationId) {
        
        $(`#userEducationLi${educationId}`).empty();
        $.post('{{ url('user/user-education-destroy') }}', {id: educationId,_token:'{{ csrf_token() }}'});
    }

    $("#mobile_number").keypress(function(event) {
            
            if(event.keyCode >= 48 && event.keyCode <= 57){
                return true;
            }else{
                return false;
            }
    });


        @error('avatar')
         Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: '{{ $message }}',
        })
        @enderror
  </script>
@endsection