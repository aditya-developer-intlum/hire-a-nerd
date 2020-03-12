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
<form class="kt-form kt-form--label-right" autocomplete="off" method="post" action="{{ route('admin.cms.home.update') }}" enctype="multipart/form-data">
@csrf
<div class="kt-portlet__body">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				First Section 
			</h3>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='first_name'>Header:</label>
			<input type="text" class="form-control" placeholder="" 
			name="first_header" value="{{ $cms->first_header ?? "" }}" autocomplete="off"
			 maxlength="125">
			@error('first_header')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for='last_name'>Sub Header:</label>
			<input type="text" class="form-control"  
			name="first_subheader" value="{{ $cms->first_subheader ?? '' }}" autocomplete="off"
			 maxlength="125">
			@error('first_subheader')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
	</div>

	<div class="form-group row">
		
		<div class="col-lg-4">
			<label for='mobile_number'>Professionals:</label>
			<input type="text" class="form-control" 
			name="first_professional" value="{{ $cms->first_professional ?? '' }}" autocomplete="off"
			 maxlength="10">
			@error('first_professional')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-4">
			<label for='mobile_number'>Seller Earnings:</label>
			<input type="text" class="form-control" 
			name="first_seller_earning" value="{{ $cms->first_seller_earning ?? '' }}" autocomplete="off"
			 maxlength="10">
			@error('first_seller_earning')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-4">
			<label for='mobile_number'>Affiliate Earnings:</label>
			<input type="text" class="form-control" 
			name="first_affiliate_earning" value="{{ $cms->first_affiliate_earning ?? '' }}" autocomplete="off"
			 maxlength="10">
			@error('first_affiliate_earning')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
	</div>
		<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Third Section 
			</h3>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='text'>Title:</label>
			<input name="third_title" class="form-control" 
			type="text" value="{{ $cms->third_title ?? '' }}" autocomplete="off"
			 >
			@error('third_title')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for=''>Sub Title:</label>
			<input type="text" class="form-control" 
			name="third_subtitle" value="{{ $cms->third_subtitle ?? '' }}" autocomplete="off"
			 >
			@error('third_subtitle')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
	</div>
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Fourth Section 
			</h3>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='text'>Title card One:</label>
			<input name="fourth_title_card_one" class="form-control" 
			type="text" value="{{ $cms->fourth_title_card_one ?? '' }}" autocomplete="off"
			 >
			@error('fourth_title_card_one')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for=''>Description card One:</label>
			<input type="text" class="form-control" 
			name="fourth_description_card_one" value="{{ $cms->fourth_description_card_one ?? '' }}" autocomplete="off"
			 >
			@error('fourth_description_card_one')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
	</div>
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='text'>Title card Two:</label>
			<input name="fourth_title_card_two" class="form-control" 
			type="text" value="{{ $cms->fourth_title_card_two ?? '' }}" autocomplete="off"
			 >
			@error('fourth_title_card_two')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for=''>Description card two:</label>
			<input type="text" class="form-control" 
			name="fourth_description_card_two" value="{{ $cms->fourth_description_card_two ?? '' }}" autocomplete="off"
			 >
			@error('fourth_description_card_two')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
	</div>
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Fifth Section 
			</h3>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='text'>Title:</label>
			<input name="fifth_title" class="form-control" 
			type="text" value="{{ $cms->fifth_title ?? '' }}" autocomplete="off"
			 >
			@error('fifth_title')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for=''>Sub Title:</label>
			<input type="text" class="form-control" 
			name="fifth_sub_title" value="{{ $cms->fifth_sub_title ?? '' }}" autocomplete="off"
			 >
			@error('fifth_sub_title')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
	</div>
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Sixth Section 
			</h3>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-lg-12">
			<label for='text'>Header:</label>
			<input name="sixth_header" class="form-control" 
			type="text" value="{{ $cms->sixth_header ?? '' }}" autocomplete="off"
			 >
			@error('sixth_header')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for=''>First Title:</label>
			<input type="text" class="form-control" 
			name="sixth_first_title" value=" {{ $cms->sixth_first_title ?? '' }}" autocomplete="off"
			 >
			@error('sixth_first_title')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for=''>First Sub Title:</label>
			<input type="text" class="form-control" 
			name="sixth_first_subtitle" value="{{ $cms->sixth_first_subtitle ?? '' }}" autocomplete="off"
			 >
			@error('sixth_first_subtitle')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for=''>Second Title:</label>
			<input type="text" class="form-control" 
			name="sixth_second_title" value="{{ $cms->sixth_second_title ?? '' }}" autocomplete="off"
			 >
			@error('sixth_second_title')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for=''>Second Sub Title:</label>
			<input type="text" class="form-control" 
			name="sixth_second_subtitle" value="{{ $cms->sixth_second_subtitle ?? '' }}" autocomplete="off"
			 >
			@error('sixth_second_subtitle')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for=''>Third Title:</label>
			<input type="text" class="form-control" 
			name="sixth_third_title" value="{{ $cms->sixth_third_title ?? '' }}" autocomplete="off"
			 >
			@error('sixth_third_title')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for=''>Third Sub Title:</label>
			<input type="text" class="form-control" 
			name="sixth_third_subtitle" value="{{ $cms->sixth_third_subtitle ??' ' }}" autocomplete="off"
			 >
			@error('sixth_third_subtitle')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
	</div>
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Seventh Section 
			</h3>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='text'>Title:</label>
			<input name="seven_title" class="form-control" 
			type="text" value="{{ $cms->seven_title ??'' }}" autocomplete="off"
			 >
			@error('seven_title')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for=''>Sub Title:</label>
			<input type="text" class="form-control" 
			name="seven_sub_title" value="{{ $cms->seven_sub_title ?? '' }}" autocomplete="off"
			 >
			@error('seven_sub_title')
				<span class="text-danger">{{ $message }}</span>
			@enderror
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