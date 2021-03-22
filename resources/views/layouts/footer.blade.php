<style type="text/css">
    
    pre{
        display: none;
    }
</style>
@php
    
$signup = App\CmsSignup::first();
@endphp
<!--- Begin:  Footer --->
<footer>
    <!-- Begin: Client Section  -->
    <section class="_clientSec">
        <div class="container ">
            <ul class="_clientList">
                <li>
                    <figure><img src="{{ asset("public/storage/images/client-logo-1.png") }}" alt=""></figure>
                </li>
                <li>
                    <figure><img src="{{ asset("public/storage/images/client-logo-2.png") }}" alt=""></figure>
                </li>
                <li>
                    <figure><img src="{{ asset("public/storage/images/client-logo-3.png") }}" alt=""></figure>
                </li>
                <li>
                    <figure><img src="{{ asset("public/storage/images/client-logo-4.png") }}" alt=""></figure>
                </li>
                <li>
                    <figure><img src="{{ asset("public/storage/images/client-logo-5.png") }}" alt=""></figure>
                </li>
                <li>
                    <figure><img src="{{ asset("public/storage/images/client-logo-6.png") }}" alt=""></figure>
                </li>
                <li>
                    <figure><img src="{{ asset("public/storage/images/client-logo-7.png") }}" alt=""></figure>
                </li>                
            </ul>            
        </div>
    </section>
    <!-- End: Client Section  -->
    <section class="_footerUpr _commonPadding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="" class="_footerLogo"><img src="{{ asset("public/storage/images/footer-logo.png") }}" alt=""></a>
                    <div class="_fDesc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                    </div>
                </div>
                <!-- Col begin  -->
                <div class="col-md-2">
                    <h3 class="_footerHeading">Resources</h3>
                    <ul class="_footerLink">
                        <li><a href="#">Licenses</a></li>
                        <li><a href="#">Blog</a></li>
                        @auth
                        <li><a href="{{ route('become.affiliate') }}" >Become Affiliate</a></li>    
                        @endauth
                        @guest
                        <li><a href="#" data-toggle="modal" data-target="#loginModal">Become Affiliate</a></li>
                        @endguest
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="{{ route('help') }}">Help & Support</a></li>                            
                    </ul>
                </div>
                <!-- Col end    -->
                <!-- Col begin  -->
                <div class="col-md-2">
                    <h3 class="_footerHeading">Company</h3>
                    <ul class="_footerLink">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Brand</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Careers</a></li>                            
                    </ul>
                </div>
                <!-- Col end    -->
                <!-- Col begin  -->
                <div class="col-md-4">
                    <h3 class="_footerHeading">Sign up Our newsletter Now</h3>
                    <form action="" class="_subsForm">
                        <input type="email" class="form-control" placeholder="Your email Address">
                        <button class="_arrBtn"><img src="{{ asset("public/storage/images/right-arrow.png") }}" alt=""></button>
                    </form>
                    <h3 class="_footerHeading">Connect</h3>
                    <ul class="_socialLinks">
                        @foreach(Nerd::Social() as $nerd)
                             <li><a href="{{{ $nerd->links }}}" target="_blanck">{!! $nerd->icon !!}</a></li> 
                        @endforeach                                                 
                    </ul>
                </div>
                <!-- Col end  -->
            </div>
        </div>
    </section>

    <section class="_footerbtm">
        <div class="container">
            <div class="row">
                <div class="col-md-6 _footerbtm__lft">
                    <ul class="_btmLink">
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-md-6 _footerbtm__right">
                    <p>Copyright @ Hire a nerd, 2019</p>
                </div>
            </div>
        </div>            
    </section>

</footer>
<!--- End :  Footer --->

{{-- Begin Foget Password --}}

<div class="modal fade _userModal" id="forgetPasswordModel">
    <div class="modal-dialog">            
        <div class="modal-content">
            <!-- Modal Header -->
            <!-- <div class="_closeDiv">                   
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> -->
            <!-- Modal body -->
            <div class="modal-body _userOuterDiv">
                <div class="_userInnerDiv">
                    <div class="row">
                        <div class="col-md-6 _usrDivLft">
                            <img src="{{ asset("public/storage/images/login-lft-img.jpg") }}" alt="">
                            <div class="_userImgCap">
                                <h3>Join Hire <span>a</span> Nerd</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed eget aliquet .</p>
                            </div>
                        </div>
                        <div class="col-md-6 _usrDivRight">
                            <div class="_uFormCont">
                                <div class="_uFormCont__hdr">
                                   
                                    <p class="_tagline">Forget Password</p>
                                </div>

                                <form action="" class="_userForm" id="forgetPassword">
                                    @csrf    
                                    <div class="form-group">
                                        <input type="email" placeholder="Email Address" class="form-control" name="email" placeholder="Enter Email Id" autocomplete="off">
                                         <span class="text-danger" role="alert" id="emailreset">
                                        <strong></strong>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn _submitBtn">Reset Password</button>
                                    </div>
                                </form>     

                                <div class="_socialMeadiaLogin">
                                    <p class="_inputMsg">Login with social media</p>
                                    <div class="_btnGroup">
                                        <a href="{{ route("facebook.login") }}" class="btn _btn3 _fbBtn"><span class="_btnIcon"><img src="{{ asset("public/storage/images/facebook-logo.svg") }}" alt=""></span>Facebook</a>
                                        <a href="{{ route("google.login") }}" class="btn _btn3 _gBtn"><span class="_btnIcon"><img src="{{ asset("public/storage/images/google.svg") }}" alt=""></span>Google</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>               
            <!-- Modal body end -->                
        </div>
    </div>
</div>

{{-- End Forget Password --}}



<!-- Begin: Login Modal -->    
<div class="modal fade _userModal" id="loginModal">
    <div class="modal-dialog">            
        <div class="modal-content">
            <!-- Modal Header -->
            <!-- <div class="_closeDiv">                   
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> -->
            <!-- Modal body -->
            <div class="modal-body _userOuterDiv">
                <div class="_userInnerDiv">
                    <div class="row">
                        <div class="col-md-6 _usrDivLft">
                            <img src="{{ asset("public/storage/images/login-lft-img.jpg") }}" alt="">
                            <div class="_userImgCap">
                                <h3>Join Hire <span>a</span> Nerd</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed eget aliquet .</p>
                            </div>
                        </div>
                        <div class="col-md-6 _usrDivRight">
                            <div class="_uFormCont">
                                <div class="_uFormCont__hdr">
                                    <figure class="_logo"><img src="{{ asset("public/storage/images/logo.png") }}" alt=""></figure>
                                    <p class="_tagline">Dont have an account? <a href="#" id="sign">Create your account</a>, it takes<br> less than a minute</p>
                                </div>

                                <form action="" class="_userForm" id="login">
                                    @csrf    
                                    <div class="form-group">
                                        <input type="email" placeholder="Email Address" class="form-control" name="email">
                                         <span class="text-danger" role="alert" id="email">
                                        <strong></strong>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control" name="password" id="log_password_pop" autocomplete="off">

                 <span toggle="#password-field" class="fas fa-eye-slash field-icon toggle-password" id="showpassword"></span>

                                         <span class="text-danger" role="alert" id="password">
                                        <strong></strong>
                                        </span>
                                        <div class="text-right"><a href="#" id="forgetPasswordButton">Forget Password?</a></div>                                            
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn _submitBtn">Login</button>
                                    </div>
                                </form>     

                                <div class="_socialMeadiaLogin">
                                    <p class="_inputMsg">Login with social media</p>
                                    <div class="_btnGroup">
                                        <a href="{{ route("facebook.login") }}" class="btn _btn3 _fbBtn"><span class="_btnIcon"><img src="{{ asset("public/storage/images/facebook-logo.svg") }}" alt=""></span>Facebook</a>
                                        <a href="{{ route("google.login") }}" class="btn _btn3 _gBtn"><span class="_btnIcon"><img src="{{ asset("public/storage/images/google.svg") }}" alt=""></span>Google</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>               
            <!-- Modal body end -->                
        </div>
    </div>
</div>
<!-- Modal : Login  End   -->

<!-- Begin: Sign Up Modal -->    
<div class="modal fade _userModal" id="signupModal">
    <div class="modal-dialog">            
        <div class="modal-content">               
            <!-- Modal body -->
            <div class="modal-body _userOuterDiv">
                <div class="_userInnerDiv">
                    <div class="row">
                        <div class="col-md-6 _usrDivLft">
                            <img src="{{ asset("public/storage/images/sign-up-lftimg.jpg") }}" alt="">
                            <div class="_userImgCap">
                                <h3 class="_smallHeading">Make Money Selling <br> and Promoting  <span>Services on Hire a Nerd</span></h3>
                                
                                <ul class="_featureLists">
                                    <!-- Begin : li -->
                                    <li class="_featureList"> 
                                        <span class="_icon">5%</span>
                                        <div>
                                            <span class="_listHeading">{{ $signup->title1 }}</span>
                                            <span class="_listText">{{ $signup->desc1 }}</span>
                                        </div>
                                    </li>
                                    <!-- End : li -->
                                        <!-- Begin : li -->
                                        <li class="_featureList"> 
                                        <span class="_icon">17%</span>
                                        <div>
                                              <span class="_listHeading">{{ $signup->title2 }}</span>
                                            <span class="_listText">{{ $signup->desc2 }}</span>
                                        </div>
                                    </li>
                                    <!-- End : li -->
                                        <!-- Begin : li -->
                                        <li class="_featureList"> 
                                        <span class="_icon">95%</span>
                                        <div>
                                             <span class="_listHeading">{{ $signup->title3 }}</span>
                                            <span class="_listText">{{ $signup->desc3 }}</span>
                                        </div>
                                    </li>
                                    <!-- End : li -->
                                    <!-- Begin : li -->
                                    <li class="_featureList"> 
                                        <span class="_icon"><img src="{{ asset("public/storage/images/sell-icon.png") }}" alt=""></span>
                                        <div>
                                            <span class="_listHeading">{{ $signup->title4 }}</span>
                                            <span class="_listText">{{ $signup->desc4 }}</span>
                                        </div>
                                    </li>
                                    <!-- End : li -->
                                    <!-- Begin : li -->
                                    <li class="_featureList"> 
                                        <span class="_icon"><img src="{{ asset("public/storage/images/no-handcore-icon.png") }}" alt=""></span>
                                        <div>
                                             <span class="_listHeading">{{ $signup->title5 }}</span>
                                            <span class="_listText">{{ $signup->desc5 }}</span>
                                        </div>
                                    </li>
                                    <!-- End : li -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 _usrDivRight">
                            <div class="_uFormCont">
                                <div class="_uFormCont__hdr">
                                    <figure class="_logo"><img src="{{ asset("public/storage/images/logo.png") }}" alt=""></figure>
                                    <p class="_tagline">Have an account? <a href="#" id="log">Sign in</a>,  to enter into the portal</p>
                                </div>

                                <form action="" class="_userForm" id="signup">
                                    @csrf    
                                    <div class="form-group">
                                        <input type="text" placeholder="FULL NAME" class="form-control" name="name">
                                        
                                        <span class="text-danger" role="alert" id="sname">
                                        <strong></strong>
                                        </span>

                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="EMAIL ADDRESS" class="form-control" name="email" autocomplete="off">
                                        <span class="text-danger" role="alert" id="semail">
                                        <strong></strong>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="PASSWORD" class="form-control" name="password" id="sign_pass_pop_eye" autocomplete="off">
                                        <span toggle="#password-field" class="fas fa-eye-slash field-icon toggle-password" id="sign_pop_eye"></span>
                                        <span class="text-danger" role="alert" id="spassword">
                                        <strong></strong>
                                        </span>
                                                                                                                            
                                    </div>
                                     <div class="form-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="CONFIRM PASSWORD">

                                        <span class="text-danger" role="alert" id="confirm_password">
                                        <strong></strong>
                                        </span>
                                         <div class="_checkboxFileld">
                                            <label class="_radio">
                                                <input type="checkbox" name="t_and_c" value="I Accept"> I Accept <a href="#">terms and conditions</a> & <a href="#">privacy policy</a>
                                                <span></span>
                                            </label>  <br>
                                            <span class="text-danger" role="alert" id="term_and_condi">
                                        <strong></strong>
                                        </span>                      
                                            
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                       
                                        <button type="submit" class="btn _submitBtn" id="register">SIGNUP</button>
                                    </div>
                                </form> 
                                 <img src="{{ url('public/loading.gif') }}" alt="" id="loading" style="display:none">    

                                <div class="_socialMeadiaLogin">
                                    <p class="_inputMsg">Signup with social media</p>
                                    <div class="_btnGroup">
                                        <a href="{{ route("facebook.login") }}" class="btn _btn3 _fbBtn"><span class="_btnIcon"><img src="{{ asset("public/storage/images/facebook-logo.svg") }}" alt=""></span>Facebook</a>

                                        <a href="{{ route("google.login") }}" class="btn _btn3 _gBtn"><span class="_btnIcon"><img src="{{ asset("public/storage/images/google.svg") }}" alt=""></span>Google</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>               
            <!-- Modal body end -->                
        </div>
    </div>
</div>
<!-- Modal : Login  End   -->


<!-- End : Main -->
<!-- Jquery-->
<script src="{{ asset('public/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-chat-scroll/dist/vue-chat-scroll.min.js"></script>
<script src="{{ asset("public/storage/js/bootstrap.js") }}"></script>
<script src="{{ asset("public/storage/js/owl.carousel.min.js") }}"></script>
<script src="{{ asset("public/storage/js/wow.js") }}"></script>
<script src="{{ asset("public/storage/js/custom.js") }}"></script>
<script src="{{ asset("public/js/tag.js") }}"></script>
<script src="{{ asset("public/js/bootstrap-datetimepicker.js") }}"></script>
<script src="{{ asset("public/js/locales/bootstrap-datetimepicker.fr.js") }}"></script>
<script src="{{ asset("public/js/notify.js") }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


<script>
    new WOW().init();
    $('#tags,INPUT[name=price_tag]').tagsInput({  
       'height':'50px',
       'width':'500px',
       'interactive':true,
       'defaultText':'add a tag',
       'removeWithBackspace' : true,
       'minChars' : 0,
       'maxChars' : 0, // if not provided there is no limit
       'placeholderColor' : '#666666',
       onAddTag:function(v){
        
         let count = ($("INPUT[name=price_tag]").val().match(new RegExp(",", "g")) || []).length;

         let count_tag = ($("#tags").val().match(new RegExp(",", "g")) || []).length;

         if(count>4){

            $("INPUT[name=price_tag]").removeTag(v);
         }
         if(count_tag>4){

            $("#tags").removeTag(v);
         }
       },
    });

    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    var end = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        startDate: today,
       // endDate: end,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
</script>


<script type="text/javascript">
    
     $('#signup').on('submit', function(e){
        e.preventDefault();
    var fd = new FormData($('#signup')[0]);   
        
        $("#signup").hide();
        $("#loading").show();

        $.ajax({
          url: '{{ url('register') }}',
          data: fd,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function(data){
          
            if(data.success != true){
                
                $("#loading").hide();
                $("#signup").show();

                $("#sname strong").html(data.errors.name?data.errors.name:"");
                $("#semail strong").html(data.errors.email?data.errors.email:"");
                $("#spassword strong").html(data.errors.password?data.errors.password:"");
                $("#confirm_password strong").html(data.errors.password_confirmation?data.errors.password_confirmation:"");
                $("#term_and_condi strong").html(data.errors.term_and_condition?data.errors.term_and_condition:"");
            }
            else if(data.success == true)
            {
                $("#register").hide('slow');
                
                $("#signupModal").modal("hide");
                Swal.fire(`Thank you for sign up. 
                    Please verify your email to login to your account.
                `).then(() => {
                    window.location.reload();
                });

            }
          }
        });

    });


       $('#login').on('submit', function(e){
        e.preventDefault();
    var fd = new FormData($('#login')[0]);   
      
        $.ajax({
          url: '{{ url('login') }}',
          data: fd,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function(data){
          console.log(data);
          if(data.success==false)
          {
            $("#email strong").html(data.errors.email?data.errors.email:"");
            $("#password strong").html(data.errors.password?data.errors.password:"");
          }
          else if(data.success==true)
            {
                window.location.href="{{ route("home") }}";
            }
          }
        });

    });

    $('#forgetPassword').on('submit', function(e){
        e.preventDefault();
        var fd = new FormData($('#forgetPassword')[0]);   
      
        $.ajax({
          url: '{{ route('password.email') }}',
          data: fd,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function(data){
          
            if(data.success==false)
            {
              $("#emailreset strong").html(data.errors.email?data.errors.email:"");
            }
            else if(data.success==true)
            {
                $("#forgetPasswordModel").modal("hide");
                Swal.fire(data.message?data.message:"");
            }
          }
        });

    });


        $("#forgetPasswordButton").click(function(){

           
             $('#loginModal').modal('toggle');
            $("#forgetPasswordModel").modal("show");

        });

        $("#showpassword").click(function(){

              var x = document.getElementById("log_password_pop");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            
        });
        $("#sign_pop_eye").click(function(){

                
            var x = document.getElementById("sign_pass_pop_eye");
            var y = document.getElementById("password-confirm");
              if (x.type === "password") {
                x.type = "text";
                y.type = "text";
              } else {
                x.type = "password";
                y.type = "password";
              }
            
        });

        @if(Session::has('success'))  
        Swal.fire('{{ Session::get('success') }} ');
        @endif
             
$("#log").click(function(){

    $("#signupModal").modal('hide');
    $("#loginModal").modal('show');
});
$("#sign").click(function(){
     $("#signupModal").modal('show');
    $("#loginModal").modal('hide');
})

            $("#switch_dashboard").click(function(e){
                      e.preventDefault();
            @auth
                $.get('{{ route('user.mode',[Auth::user()->id]) }}',function(data) {
                      if(data == 'updated'){

                        @if(Auth::user()->mode == 2)

                            window.location.href = '{{ route('home') }}';
                        @else

                            window.location.href = '{{ route('seller.dashboard') }}';

                        @endif
                       
                      }
                });  
            @endauth
                
            });
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
</script>

@stack('script')
