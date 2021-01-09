@extends('admin.layouts.app')
  @section('title','User')
@section('contents')
<style>
	.kt-portlet .kt-portlet__head{
		border-bottom: 0px !important;
	}
</style>
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="row">
								<div class="col-lg-12">
										

									<!--begin::Portlet-->
									<div class="kt-portlet">
										
										
									

										<!--begin::Form-->
<form class="kt-form kt-form--label-right" autocomplete="off" method="post" action="{{ route('admin.cms.sign.update') }}" enctype="multipart/form-data">
@csrf
<div class="kt-portlet__body">
	
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='first_name'>Title:</label>
			<input type="text" class="form-control" name="title1"  autocomplete="off"
			 maxlength="125" value="{{ $cmsSignup->title1 }}">
		</div>
		<div class="col-lg-6">
			<label for='first_name'>Description:</label>
			<input type="text" class="form-control" name="desc1"  autocomplete="off"
			 maxlength="125" value="{{ $cmsSignup->desc1 }}">
		</div>
		
	</div>
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='first_name'>Title:</label>
			<input type="text" class="form-control" name="title2"  autocomplete="off"
			 maxlength="125" value="{{ $cmsSignup->title2 }}">
		</div>
		<div class="col-lg-6">
			<label for='first_name'>Description:</label>
			<input type="text" class="form-control" name="desc2"  autocomplete="off"
			 maxlength="125" value="{{ $cmsSignup->desc2 }}">
		</div>
		
	</div>
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='first_name'>Title:</label>
			<input type="text" class="form-control" name="title3"  autocomplete="off"
			 maxlength="125" value="{{ $cmsSignup->title3 }}">
		</div>
		<div class="col-lg-6">
			<label for='first_name'>Description:</label>
			<input type="text" class="form-control" name="desc3"  autocomplete="off"
			 maxlength="125" value="{{ $cmsSignup->desc3 }}">
		</div>
		
	</div>
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='first_name'>Title:</label>
			<input type="text" class="form-control" name="title4"  autocomplete="off"
			 maxlength="125" value="{{ $cmsSignup->title4 }}">
		</div>
		<div class="col-lg-6">
			<label for='first_name'>Description:</label>
			<input type="text" class="form-control" name="desc4"  autocomplete="off"
			 maxlength="125" value="{{ $cmsSignup->desc4 }}">
		</div>
		
	</div>
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='first_name'>Title:</label>
			<input type="text" class="form-control" name="title5"  autocomplete="off"
			 maxlength="125" value="{{ $cmsSignup->title5 }}">
		</div>
		<div class="col-lg-6">
			<label for='first_name'>Description:</label>
			<input type="text" class="form-control" name="desc5"  autocomplete="off"
			 maxlength="125" value="{{ $cmsSignup->desc5 }}">
		</div>
		
	</div>
																									
</div>
	<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary">Save</button>
															<a  href='{{ URL::previous() }}' class="btn btn-danger">Back</a>
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