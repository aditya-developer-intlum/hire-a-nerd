@extends('admin.layouts.app')
  @section('title','User')
@section('contents')

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="row">
								<div class="col-lg-12">
									<!--begin::Portlet-->
									<div class="kt-portlet">

											<div class="kt-portlet__body">
												<div class="form-group row">
													<div class="col-lg-2">
														<label>Full Name:</label>
														<strong>{{ $user->name ?? '' }}</strong>
													</div>
													<div class="col-lg-3">
														<label>Email:</label>
														<strong>{{ $user->email ?? '' }}</strong>
													</div>
													<div class="col-lg-2">
														<label>Phone:</label>
														<strong>{{ $user->mobile_number ?? '' }}</strong>
													</div>
													<div class="col-lg-2">
														<label>Profile:</label>
														@php
														 $img = !empty($user->userDetail)?$user->userDetail->avatar??'':'';
														@endphp
														<img src="{{ asset("public/storage/$img") }}" alt="" width="20%"> 
													</div>
													<div class="col-lg-3">
														<label>Description:</label>
														<strong>{{ !empty($user->userDetail)?Str::limit($user->userDetail->description,150)??'':'' }}</strong>
													</div>
													
													
												</div>
												@empty(!$user->userBillingAaddresses)
												<div class="form-group row">
													<div class="col-lg-2">
														<label>Company Name:</label>
														<strong>{{ $user->userBillingAaddresses->company_name ?? '' }}</strong>
													</div>
													<div class="col-lg-3">
														<label>Address:</label>
															<strong>{{ $user->userBillingAaddresses->address ?? '' }}</strong>
													</div>
													<div class="col-lg-2">
														<label>Country:</label> 
														<strong>{{ $user->userBillingAaddresses->country_id ?? '' }}</strong>
													</div>
													<div class="col-lg-2">
														<label>City:</label>
														<strong>{{ $user->userBillingAaddresses->city_id ?? '' }}</strong>
													</div>
													
													<div class="col-lg-3">
														<label>Zip Code:</label>
															<strong>{{ $user->userBillingAaddresses->zip_code ?? '' }}</strong>
													</div>
													
												</div>
												@endempty
												<div class="form-group row">
													<div class="col-lg-4">
														<table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" >
															<tr>
																<th colspan="2">Skill Detail</th>
															</tr>
															<tr>
																<th>Name</th>
																<th>Level</th>
															</tr>
														@empty(!$user->skill)
														@foreach($user->skill as $skill)
															<tr>
																<td>{{ $skill->skill_name ?? '' }}</td>
																<td>{{ $skill->skill_level }}</td>
															</tr>
														@endforeach
														@endempty
														</table>
													</div>
													<div class="col-lg-4">
														<table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" >
															<tr>
																<th colspan="2">Language Detail</th>
															</tr>
															<tr>
																<th>Name</th>
																<th>Level</th>
															</tr>
														@empty(!$user->userLang)
														@foreach($user->userLang as $lang)
															<tr>
																<td>{{ $lang->language->name ?? '' }}</td>
																<td>{{ $lang->language_level }}</td>
															</tr>
														@endforeach
														@endempty
														</table>
													</div>
													<div class="col-lg-4">
														<table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" >
															<tr>
																<th colspan="3">Certification Detail</th>
															</tr>
															<tr>
																<th>Name</th>
																<th>From</th>
																<th>Year</th>
															</tr>
														@empty(!$user->userCertification)
														@foreach($user->userCertification as $certification)
															<tr>
																<td>{{ $certification->certified ?? '' }}</td>
																<td>{{ $certification->certified_from }}</td>
																<td>{{ $certification->year }}</td>
															</tr>
														@endforeach
														@endempty
														</table>
													</div>
													
												</div>
													<div class="form-group row">
														<div class="col-lg-12">
														<table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" >
															<tr>
																<th colspan="5">Educational Detail</th>
															</tr>
															<tr>
																<th>Country</th>
																<th>University</th>
																<th>Title</th>
																<th>Branch</th>
																<th>Year</th>
															</tr>
														@empty(!$user->userEducation)
														@foreach($user->userEducation as $education)
															<tr>
																<td>{{ $education->country->name ?? '' }}</td>
																<td>{{ $education->university->name }}</td>
																<td>{{ $education->title }}</td>
																<td>{{ $education->branch_id }}</td>
																<td>{{ $education->year }}</td>
															</tr>
														@endforeach
														@endempty
														</table>
													</div>
													</div>

								


											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														
														<div class="col-lg-6 kt-align-right">
															<a  href='{{ url()->previous() }}' class="btn btn-danger">Back</a>
														</div>
													</div>
												</div>
											</div>
										

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