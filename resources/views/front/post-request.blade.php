@extends('layouts.app')
@section('content')


<main class="main_body _dBody _grayBg">
        <div class="container">
            <div class="row _dRow">
               
                <!-- Right page -->
                <div class="col-md-7">
                    
                   <div class="_dCard">
                                <div class="_dCardHeader _borderBtm">                            
                                    <span class="_dHeading ">Post Request</span> 
                                </div>                        
                                <div class="_dsBody">
                                    <form action="{{ route('post-request.store') }}" method="post" enctype="multipart/form-data" class="_dForm">
                                    	@csrf
                                    	
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" style="height:70%" for="">Describe the service you're looking to purchase - please be as detailed as possible: </label></div>
                                            <div class="col-md-8">
                                          
    <textarea name="description" class="form-control2" cols="30" rows="10" placeholder="I'm looking for..." maxlength="2500">{{ old('description') }}</textarea>

                                          <span class="text-danger" >
											 @error('description')
											 	{{ $message }}
											 @enderror
                                          </span><br>
                                          <button class="btn btn-primary" type="button" onclick="document.getElementById('attachFile').click()"><i class="fa fa-paperclip" aria-hidden="true"></i> Attach File</button> <span>Upto 2MB</span>
                                          
                                          <input type="file" name="attachfile" style="display: none" id="attachFile"> 


                                          <span class="text-danger">
                                            <br> 
											 @error('attachfile')
											 	{{ $message }}
											 @enderror
                                          </span>
                                      </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" style="height:70%" for="">Category  :</label></div>
                                            <div class="col-md-8">
                                            	<select name="category" id="category" class="form-control2">
                                            		<option value="">Select Category</option>
                                            		@foreach ($category as $_category)
                                            			<option value="{{ $_category->id }}" {{ old('category') == $_category->id ?'selected':'' }}>{{ $_category->name ?? '' }}</option>
                                            		@endforeach
                                            	</select>
                                            	<span class="text-danger" >
											 @error('category')
											 	{{ $message }}
											 @enderror
                                          </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" style="height:70%" for="">Sub Category :</label></div>
                                            <div class="col-md-8">
                                            	<select name="subcategory" id="subCategory" class="form-control2">
                                            		<option value="">Select Sub Category</option>
                                            		
                                            	</select>
                                            	<span class="text-danger" >
											 @error('subcategory')
											 	{{ $message }}
											 @enderror
                                          </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" style="height:70%" for="">When would you like your service delivered?: </label></div>
                                            <div class="col-md-8" id="timeSlot">
                                            	<select name="serviceDeliverTime" id="serviceDeliverTime" class="form-control2">
                                            		<option value="">Select Time Slot</option>
                                            		<option value="1" {{ old('serviceDeliverTime')=='1'?'selected':'' }}>1 Day</option>
                                            		<option value="3" {{ old('serviceDeliverTime')=='3'?'selected':'' }}>3 Days</option>
                                            		<option value="7" {{ old('serviceDeliverTime')=='7'?'selected':'' }}>7 Days</option>
                                            		<option value="other" {{ old('serviceDeliverTime')=='other'?'selected':'' }}>Other</option>
                                            		
                                            	</select>
                                            	
                                            	<span class="text-danger" >
											 @error('serviceDeliverTime')
											 	{{ $message }}
											 @enderror
                                          </span>
                                            </div>
                                           
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4"><label class="_label" style="height:70%" for="">What is your budget for this service?</label></div>
                                            <div class="col-md-8" >
                                            	<input type="text" id="budget" class="form-control2" placeholder="Enter Budget in USD" name="budget" value="{{ old('budget') }}">
                                            	
                                            	<span class="text-danger" >
											 @error('budget')
											 	{{ $message }}
											 @enderror
                                          </span>
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-group">
                                        	
                                        	<button type="submit" class="btn _btn2 _btnSuccess"><strong>Post</strong></button>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                    
                </div>
                <!-- Right page -->
            </div>
        </div>        
    </main>
    <script>
    	$(document).ready(function(){

    		$("#category").change(function(){
    			var subCategory = @json($subCategory);
    			$("#subCategory").empty().append(`<option value="">Select Sub Category</option>`);

    			$.each(subCategory,(index, val) => {
    				if(val.menu_id == this.value){
    					selected = "{{ old('subcategory') }}" == val.id ?"selected":''
    					$("#subCategory").append(`<option value="${val.id}" ${selected}>${val.name}</option>}
    				 option`);
    				}
    				 
    			});
    		}).change();
    		$("#serviceDeliverTime").change(function(){
    			if(this.value == 'other'){
    				$("#timeSlot")
    				.removeClass('col-md-8')
    				.addClass('col-md-4')
    				.after(` <div class="col-md-4" id="otherBox">
                                                <input type="text" name="serviceDeliverTimeOther" id="otherInput" class="form-control2" placeholder="1-30 days" value="{{ old('serviceDeliverTimeOther') }}">
                                            </div>`);
    			}else{
    				$("#timeSlot")
    				.removeClass('col-md-4')
    				.addClass('col-md-8');
    				$("#otherBox").remove();
    			}
	    		$("#otherInput").on('keypress',function(event) {
	    			var keyCode = event.keyCode;
                
	    			if(keyCode>47 && keyCode<58 && $("#otherInput").val()<=30){
	    				return true;
	    			}else{
	    				return false;
	    			}
	    		});
    		}).change();
    		$("#budget").keypress(function(event) {
	    			var keyCode = event.keyCode;
	    			if(keyCode>47 && keyCode<57){
	    				return true;
	    			}else{
	    				return false;
	    			}
	    		});
    	});
    </script>
@endsection