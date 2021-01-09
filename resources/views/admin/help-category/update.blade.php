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
													Update Help Category
												</h3>
											</div>
										</div>
										

										<!--begin::Form-->
<form class="kt-form kt-form--label-right" autocomplete="off" method="post" action="{{ route('admin.help-category.update',[$helpCategory->id]) }}" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="kt-portlet__body">
	<div class="form-group row">
		<div class="col-lg-6">
			<label for='title'>Title:</label>
			<input 
			type="text" 
			class="form-control" 
			placeholder="Enter title" 
			name="title" 
			value="{{ old('title',$helpCategory->title) }}" 
			autocomplete="off"
			maxlength="255">
			@error('title')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="col-lg-6">
			<label for='title'>Type:</label>
			<select class="form-control" name="type">
				<option value="1" {{ $helpCategory->type == 1?'selected':'' }}>Seller</option>
				<option value="2" {{ $helpCategory->type == 2?'selected':'' }}>Buyer</option>
			</select>

			@error('type')
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
															<button type="reset" class="btn btn-secondary">Reset</button>
														</div>
														<div class="col-lg-6 kt-align-right">
															<a  href='{{ route('admin.help-category.index') }}' class="btn btn-danger">Back</a>
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