@extends('layouts.app')
@section('content')



<main class="main_body _dBody _grayBg">
    <div class="container">
        <div class="row _dRow">
            <div class="col-md-12">
                <div class="_dCard">
                    <div class="_dCardHeader _borderBtm">                            
                        <span class="_dHeading ">Become Affiliate</span> 
                    </div>                        
                    <div class="_dsBody">
                        <form action="{{ route('become.affiliate.register') }}" method="post" enctype="multipart/form-data" class="_dForm" autocomplete="off">
                            @csrf
                                            
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="_label" >First Name </label>
                                </div>
                                <div class="col-md-4">
                                              
                                    <input 
                                    type="text" 
                                    name="first_name" 
                                    class="form-control2" 
                                    value="{{ old('first_name') }}"
                                    placeholder="enter first name">

                                    <span class="text-danger" >
                                        @error('first_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                           
                                <div class="col-md-2">
                                    <label class="_label" >Last Name </label>
                                </div>
                                <div class="col-md-4">
                                              
                                    <input 
                                    type="text" 
                                    name="last_name" 
                                    class="form-control2" 
                                    value="{{ old("last_name") }}"
                                    placeholder="enter last name">

                                    <span class="text-danger" >
                                        @error('last_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="_label" >Email Id</label>
                                </div>
                                <div class="col-md-4">
                                              
                                     <input 
                                     type="email" 
                                     name="email" 
                                     class="form-control2" 
                                     placeholder="enter email id"  
                                     value="{{ old("email") }}"
                                     autocomplete="false">

                                    <span class="text-danger" >
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            
                                <div class="col-md-2">
                                    <label class="_label" >Password</label>
                                </div>
                                <div class="col-md-4">
                                              
                                    <input 
                                    type="password" 
                                    name="password" 
                                    class="form-control2" 
                                    value="{{ old('password') }}"
                                    placeholder="enter password">

                                    <span class="text-danger" >
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="_label" >Phone Number</label>
                                </div>
                                <div class="col-md-4">
                                              
                                    <input 
                                    type="text" 
                                    name="phone_number" 
                                    class="form-control2" 
                                    value="{{ old('phone_number') }}"
                                    placeholder="enter phone number">

                                    <span class="text-danger" >
                                        @error('phone_number')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                        
                                <div class="col-md-2">
                                    <label class="_label" >Skype Id</label>
                                </div>
                                <div class="col-md-4">
                                              
                                    <input 
                                    type="text" 
                                    name="skype_id" 
                                    class="form-control2" 
                                    value="{{ old('skype_id') }}"
                                    placeholder="enter Skype Id">

                                    <span class="text-danger" >
                                        @error('skype_id')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="_label" >Country</label>
                                </div>
                                <div class="col-md-4">
                                              
                                    <input 
                                    type="text" 
                                    name="country" 
                                    class="form-control2" 
                                    value="{{ old('country') }}"
                                    placeholder="enter country">

                                    <span class="text-danger" >
                                        @error('country')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                          
                                <div class="col-md-2">
                                    <label class="_label" >Company Name Working at</label>
                                </div>
                                <div class="col-md-4">
                                              
                                    <input 
                                    type="text" 
                                    name="company_name" 
                                    class="form-control2" 
                                    value="{{ old("company_name") }}"
                                    placeholder="The company he/she is Currently Working at">

                                    <span class="text-danger" >
                                        @error('company_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="_label" >Website</label>
                                </div>
                                <div class="col-md-8">
                                              
                                    <input 
                                    type="text" 
                                    name="website" 
                                    class="form-control2" 
                                    value="{{ old('website') }}"
                                    placeholder="enter your website link">

                                    <span class="text-danger" >
                                        @error('website')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="_label" >Additional Information </label>

                                </div>
                                <div class="col-md-8">
                                              
                                   <textarea name="additional_info" rows="5" >{{ old('additional_info') }}</textarea>
                                    <small>(max 200 words)</small>

                                    <span class="text-danger" >
                                        @error('additional_info')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>   
                            <div class="form-group row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="_checkboxFileld">
                                        <label class="_radio">
                                            <input 
                                            type="checkbox" 
                                            name="confirmed"
                                            {{ old('confirmed')?'checked':'' }} 
                                            value="1"> 
                                            I Accept <a href="#">terms and conditions</a> &amp; <a href="#">Privacy policy</a>
                                            <span></span>
                                        </label>  <br>
                                        @error('confirmed')
                                        <span class="text-danger" role="alert" id="term_and_condi">
                                                {{ $message }}
                                        </span>                      
                                        @enderror
                                                    
                                    </div>        
                                </div>
                            </div>

                            <div class="form-group">
                                                
                                <button type="submit" class="btn _btn2 _btnSuccess"><strong>Submit</strong></button>
                                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</main>

@endsection

@push('script')
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
    <script>
        
        @if (Session::has('error'))
            
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ Session::get('error') }}'
            })

        @endif

        @if (Session::has('success'))
            
            Swal.fire({
                icon: 'success',
                title: 'Created',
                text: '{{ Session::get('success') }}'
            })
        @endif

    </script>
@endpush