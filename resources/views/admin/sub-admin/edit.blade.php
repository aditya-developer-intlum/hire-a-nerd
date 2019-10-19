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
													Edit Sub Admin
												</h3>
											</div>
										</div>
										
									

										<!--begin::Form-->
<form class="kt-form kt-form--label-right" autocomplete="off" method="post" 
action="{{ route('admin.sub-admin.update',[$user->id]) }}">
@method('PUT')
@csrf

<div class="kt-portlet__body">
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='first_name'>First Name:</label>
			<input type="text" class="form-control" placeholder="Enter first name" 
			name="first_name" value="{{ $user->f_name ?? '' }}" autocomplete="off"
			 maxlength="125">
			@error('first_name')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for='last_name'>Last Name:</label>
			<input type="text" class="form-control" placeholder="Enter last name" 
			name="last_name" value="{{ $user->l_name ?? '' }}" autocomplete="off"
			 maxlength="125">
			@error('last_name')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
	</div>
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='email'>Email:</label>
			<input type="text" class="form-control" placeholder="Enter email " 
			name="email" value="{{ $user->email ?? '' }}" autocomplete="off"
			 maxlength="225">
			@error('email')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for='mobile_number'>Mobile Number:</label>
			<input type="text" class="form-control" placeholder="Enter mobile number" 
			name="mobile_number" value="{{ $user->mobile_number }}" autocomplete="off"
			 maxlength="10">
			@error('mobile_number')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
	</div>
	

																								
</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary">Update</button>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
														<div class="col-lg-6 kt-align-right">
															<a  href='{{ route('admin.sub-admin.index') }}' class="btn btn-danger">Back</a>
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