@extends('admin.layouts.app')
  @section('title','User')
@section('contents')

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="row">
								<div class="col-lg-12">
										

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Edit User
												</h3>
											</div>
										</div>
										
									

										<!--begin::Form-->
<form class="kt-form kt-form--label-right" autocomplete="off" method="post" action="{{ route('admin.user.update',$user->id) }}" enctype="multipart/form-data">
	@method('PUT')
											@csrf
											<div class="kt-portlet__body">
												<div class="form-group row">
													<div class="col-lg-6">
														<label for='first_name'>Full Name:</label>
														<input type="text" class="form-control" placeholder="Enter first name" name="first_name" value="{{ explode(' ',$user->name)[0] }}" autocomplete="off" maxlength="125">
														@error('first_name')
															<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
													<div class="col-lg-6">
														<label for="last_name">Last Name:</label>
														<input type="text" class="form-control" placeholder="Enter last name" name="last_name" value="{{ explode(' ',$user->name)[1] }}" autocomplete="off" maxlength="125">
														@error('last_name')
															<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
												</div>

												<div class="form-group row">
													<div class="col-lg-6">
														<label for='email'>Email Id:</label>
														<input type="email" class="form-control" placeholder="Enter email id" name="email" value="{{ $user->email }}" autocomplete="off" maxlength="255">
														@error('email')
															<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
													<div class="col-lg-6">
														<label for="mobile_number">Contact Number:</label>
														<input type="text" class="form-control" placeholder="Enter contact number" name="mobile_number" value="{{ $user->mobile_number }}" autocomplete="off" maxlength="12">
														@error('mobile_number')
															<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
												</div>

												<div class="form-group row">
													<div class="col-lg-6">
														
												
														<label for='address'>Address:</label>
														<textarea name="address"  class="form-control" rows="3" maxlength="500">{{ $user->userBillingAaddresses->address ?? '' }}</textarea>
											
														@error('address')
															<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
													<div class="col-lg-6">
														<label for="country">Country:</label>
														<select name="country" class="form-control">
															<option value="">Select Country</option>
															@foreach($country->all() as $_country)
															<option value="{{ $_country->name }}" {{ 

																!empty($user->userBillingAaddresses)?
																$_country->name==$user->userBillingAaddresses->country_id?
																'selected':'':''
																}}>{{ $_country->name }}</option>
															@endforeach
														</select>
														@error('country')
															<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
												</div>
												<div class="form-group row">
													<div class="col-lg-6">
														
												
														<label for='customFile'>Avatar:</label>
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="customFile" name="avatar" accept="image/*">
														<label class="custom-file-label" for="customFile">Choose file</label>
													</div>
														
											
														@error('avatar')
															<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
													<div class="col-lg-6">
														
															@if(!empty($user->userDetail()->first()))
																
															
														<img src="{{ asset("public/storage/").'/'.$user->userDetail()->first()->avatar??"" }}" alt="" width="30%">
															@endif
													</div>
												</div>
												
												
											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary">Save</button>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
														<div class="col-lg-6 kt-align-right">
															<a  href='{{ route('admin.user.index') }}' class="btn btn-danger">Back</a>
														</div>
													</div>
												</div>
											</div>
										</form>

										<!--end::Form-->
									</div>

									<!--end::Portlet-->

								</div>
							</div>
						</div>

@push('scripts')
    <script >
@if(Session::has('success'))
			Swal.fire({
			  type: 'success',
			  title: '{{ Session::get('success') }}',
			});
@endif
    </script>
@endpush

@endsection