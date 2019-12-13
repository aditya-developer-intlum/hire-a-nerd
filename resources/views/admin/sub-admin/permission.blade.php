@extends('admin.layouts.app')
@push('css')
<link href="./assets/css/demo1/pages/general/wizard/wizard-2.css" rel="stylesheet" type="text/css" />
@endpush

@section('title','Permission')
@section('contents')

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-grid  kt-wizard-v2 kt-wizard-v2--white" id="kt_wizard_v2" data-ktwizard-state="first">
										<div class="kt-grid__item kt-wizard-v2__aside">

											<!--begin: Form Wizard Nav -->
											<div class="kt-wizard-v2__nav">
												<div class="kt-wizard-v2__nav-items">
													<a class="kt-wizard-v2__nav-item"  data-ktwizard-type="step" data-ktwizard-state="current">
														<div class="kt-wizard-v2__nav-body">
															<div class="kt-wizard-v2__nav-icon">
																<i class="flaticon-globe"></i>
															</div>
															<div class="kt-wizard-v2__nav-label">
																<div class="kt-wizard-v2__nav-label-title">
																	Manage Service
																</div>
																<div class="kt-wizard-v2__nav-label-desc">
																	Setup Permission For Manage Service
																</div>
															</div>
														</div>
													</a>
													<a class="kt-wizard-v2__nav-item"  data-ktwizard-type="step" data-ktwizard-state="pending">
														<div class="kt-wizard-v2__nav-body">
															<div class="kt-wizard-v2__nav-icon">
																<i class="flaticon2-user"></i>
															</div>
															<div class="kt-wizard-v2__nav-label">
																<div class="kt-wizard-v2__nav-label-title">
																	Sub Admin
																</div>
																<div class="kt-wizard-v2__nav-label-desc">
																	Setup Permission For Sub Admin
																</div>
															</div>
														</div>
													</a>
													<a class="kt-wizard-v2__nav-item"  data-ktwizard-type="step" data-ktwizard-state="pending">
														<div class="kt-wizard-v2__nav-body">
															<div class="kt-wizard-v2__nav-icon">
																<i class="flaticon-user"></i>
															</div>
															<div class="kt-wizard-v2__nav-label">
																<div class="kt-wizard-v2__nav-label-title">
																	User
																</div>
																<div class="kt-wizard-v2__nav-label-desc">
																	Setup Permission For Users
																</div>
															</div>
														</div>
													</a>
													<a class="kt-wizard-v2__nav-item"  data-ktwizard-type="step" data-ktwizard-state="pending">
														<div class="kt-wizard-v2__nav-body">
															<div class="kt-wizard-v2__nav-icon">
																<i class="flaticon-trophy"></i>
															</div>
															<div class="kt-wizard-v2__nav-label">
																<div class="kt-wizard-v2__nav-label-title">
																	Skill
																</div>
																<div class="kt-wizard-v2__nav-label-desc">
																	Setup Pemission For Skill
																</div>
															</div>
														</div>
													</a>
													<a class="kt-wizard-v2__nav-item" data-ktwizard-type="step" data-ktwizard-state="pending">
														<div class="kt-wizard-v2__nav-body">
															<div class="kt-wizard-v2__nav-icon">
																<i class="flaticon-truck"></i>
															</div>
															<div class="kt-wizard-v2__nav-label">
																<div class="kt-wizard-v2__nav-label-title">
																	Qualification
																</div>
																<div class="kt-wizard-v2__nav-label-desc">
																	Setup Permission For Qualification
																</div>
															</div>
														</div>
													</a>
													<a class="kt-wizard-v2__nav-item" data-ktwizard-type="step" data-ktwizard-state="pending">
														<div class="kt-wizard-v2__nav-body">
															<div class="kt-wizard-v2__nav-icon">
																<i class="flaticon-confetti"></i>
															</div>
															<div class="kt-wizard-v2__nav-label">
																<div class="kt-wizard-v2__nav-label-title">
																	Category
																</div>
																<div class="kt-wizard-v2__nav-label-desc">
																	Setup Permission For Category
																</div>
															</div>
														</div>
													</a>
													<a class="kt-wizard-v2__nav-item"  data-ktwizard-type="step" data-ktwizard-state="pending">
														<div class="kt-wizard-v2__nav-body">
															<div class="kt-wizard-v2__nav-icon">
																<i class="flaticon-confetti"></i>
															</div>
															<div class="kt-wizard-v2__nav-label">
																<div class="kt-wizard-v2__nav-label-title">
																	Sub Category
																</div>
																<div class="kt-wizard-v2__nav-label-desc">
																	Setup Permission For Sub Category
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>

											<!--end: Form Wizard Nav -->
										</div>
										<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">

											<!--begin: Form Wizard Form-->
	<form class="kt-form" 
		id="kt_form" 
		novalidate="novalidate" 
		method="post" 
		action="{{ route('admin.permission.allot') }}">
		
		@csrf

			<!--begin: Form Wizard Step 1-->
			<div class="kt-wizard-v2__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
				<div class="kt-heading kt-heading--md">Manage Permission</div>
					<div class="kt-form__section kt-form__section--first">
			<input type="hidden" name="user_id" value="{{ $user->id }}">
			<div class="kt-wizard-v2__form">
				<div class="row">
					<div class="col-xl-6">
			@foreach($permissions->whereIdentify('manage_gig')->get() as $permission)
					<div class="form-group">
						
						<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
							<input type="checkbox" value='{{ $permission->id }}' class='permissions' name='permission[]'>
							 <strong>{{ $permission->title }}  </strong>
								<span></span>
						</label>
					</div>
				@endforeach	
					</div>
				</div>
			</div>
													</div>
												</div>

												<!--end: Form Wizard Step 1-->

												<!--begin: Form Wizard Step 2-->
				<div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
						<div class="kt-heading kt-heading--md">Manage Permission</div>
						<div class="kt-form__section kt-form__section--first">
				
				<div class="kt-wizard-v2__form">
					<div class="row">
						<div class="col-xl-6">
				@foreach($permissions->whereIdentify('sub_admin')->get() as $permission)
						<div class="form-group">
							
							<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
								<input type="checkbox" value='{{ $permission->id }}' class='permissions' name='permission[]'>
								 <strong>{{ $permission->title }}  </strong>
									<span></span>
							</label>
						</div>
					@endforeach	
						</div>
					</div>
				</div>
													</div>
												</div>

												<!--end: Form Wizard Step 2-->

												<!--begin: Form Wizard Step 3-->
												<div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Mange Permission</div>
													<div class="kt-form__section kt-form__section--first">
			<div class="kt-wizard-v2__form">
				<div class="row">
					<div class="col-xl-6">
			@foreach($permissions->whereIdentify('user')->get() as $permission)
					<div class="form-group">
						
						<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
							<input type="checkbox" value='{{ $permission->id }}' class='permissions' name='permission[]'>
							 <strong>{{ $permission->title }}  </strong>
								<span></span>
						</label>
					</div>
				@endforeach	
					</div>
				</div>
			</div>
													</div>
												</div>

												<!--end: Form Wizard Step 3-->

												<!--begin: Form Wizard Step 4-->
												<div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Mange Permission</div>
													<div class="kt-form__section kt-form__section--first">
			<div class="kt-wizard-v2__form">
				<div class="row">
					<div class="col-xl-6">
			@foreach($permissions->whereIdentify('skill')->get() as $permission)
					<div class="form-group">
						
						<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
							<input type="checkbox" value='{{ $permission->id }}' class='permissions' name='permission[]'>
							 <strong>{{ $permission->title }}  </strong>
								<span></span>
						</label>
					</div>
				@endforeach	
					</div>
				</div>
			</div>
													</div>
												</div>

												<!--end: Form Wizard Step 4-->

												<!--begin: Form Wizard Step 5-->
												<div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Manage Permission</div>
													<div class="kt-form__section kt-form__section--first">
			<div class="kt-wizard-v2__form">
				<div class="row">
					<div class="col-xl-6">
			@foreach($permissions->whereIdentify('qualification')->get() as $permission)
					<div class="form-group">
						
						<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
							<input type="checkbox" value='{{ $permission->id }}' class='permissions' name='permission[]'>
							 <strong>{{ $permission->title }}  </strong>
								<span></span>
						</label>
					</div>
				@endforeach	
					</div>
				</div>
			</div>
													</div>
												</div>

			<div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Manage Permission</div>
													<div class="kt-form__section kt-form__section--first">
			<div class="kt-wizard-v2__form">
				<div class="row">
					<div class="col-xl-6">
			@foreach($permissions->whereIdentify('category')->get() as $permission)
					<div class="form-group">
						
						<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
							<input type="checkbox" value='{{ $permission->id }}' class='permissions' name='permission[]'>
							 <strong>{{ $permission->title }}  </strong>
								<span></span>
						</label>
					</div>
				@endforeach	
					</div>
				</div>
			</div>
													</div>
												</div>

												<!--end: Form Wizard Step 5-->

												<!--begin: Form Wizard Step 6-->
												<div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Manage Permission</div>
													<div class="kt-form__section kt-form__section--first">
			<div class="kt-wizard-v2__form">
				<div class="row">
					<div class="col-xl-6">
			@foreach($permissions->whereIdentify('sub_category')->get() as $permission)
					<div class="form-group">
						
						<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
							<input type="checkbox" value='{{ $permission->id }}' class='permissions' name='permission[]'>
							 <strong>{{ $permission->title }}  </strong>
								<span></span>
						</label>
					</div>
				@endforeach	
					</div>
				</div>
			</div>
													</div>
												</div>

												<!--end: Form Wizard Step 6-->

												<!--begin: Form Actions -->
												<div class="kt-form__actions">
													<div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
														Previous
													</div>
													<div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
														Submit
													</div>
													<div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
														Next Step
													</div>
												</div>

												<!--end: Form Actions -->
											</form>

											<!--end: Form Wizard Form-->
										</div>
									</div>
								</div>
							</div>
						</div>



@endsection
@push('scripts')

	<script src="./assets/js/demo1/pages/wizard/wizard-2.js" type="text/javascript"></script>
		<script>

$(function(){
	$.get(`{{ url("admin/permission/user/$user->id") }}`, function(data) {
					
		$.each(data.user_permission, function(index, val) {
							
			$(`input[type=checkbox][value=${val.permission_id}]`).prop("checked",true);

		});
	});
});

	
</script>
@endpush