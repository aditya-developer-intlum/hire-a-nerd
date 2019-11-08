@extends('admin.layouts.app')
@section('contents')

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="row">
								<div class="col-lg-12">
										

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													 FAQ
												</h3>
											</div>
										</div>
										
									

										<!--begin::Form-->
	<form class="kt-form kt-form--label-right" autocomplete="off" 
		method="post" action="{{ route('admin.pages.faq.store') }}" enctype="multipart/form-data">
	@csrf
	<div class="kt-portlet__body">
		<div class="form-group row">
			<div class="col-lg-6">
				<label for='first_name'>Title:</label>
				<input type="text" class="form-control" placeholder="Enter title" 
				name="title" value="{{ old('title') }}" autocomplete="off"
				 maxlength="191">
				@error('title')
					<span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
			<div class="col-lg-6">
				<label for='type'>Type:</label>
				<select name="type" id="" class="form-control">
					<option value="seller">Seller</option>
					<option value="buyer">Buyer</option>
				</select>
				
				@error('type')
					<span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<div class="col-lg-12">
				<label for='description'>Description:</label>
				<textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
				@error('description')
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
															<a  href='{{ route('admin.pages.faq.index') }}' class="btn btn-danger">Back</a>
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
	<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
    <script>
        $(function(){

        $('#description').ckeditor();
        })
        // $('.textarea').ckeditor(); // if class is prefered.
        @if(Session::has('success'))
			Swal.fire({
			  type: 'success',
			  title: '{{ Session::get('success') }}',
			});
		@endif
    </script>
@endpush
@endsection