@extends('admin.layouts.app')

@push('css')
<link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<style>
	span.select2-container.select2-container--default.select2-container--open {
    z-index: 1111;
}
</style>
@endpush
@section('title','Service Mapping')
@section('contents')

	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Service Mapping
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												
												&nbsp;
												<a href="#" id="addService" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													Add
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">


	
									<!--begin: Datatable -->
										<form action="">
									<div class="row">
										<div class="col-md-2 offset-md-2">
											<select name="category"  class="form-control" id="category">
												<option value="">-- Category --</option>
												@foreach($category as $_category)
													<option value="{{ $_category->id }}" {{ request()->has('category')?request()->category==$_category->id?'selected':'':'' }}>{{ $_category->name }}</option>
												@endforeach
											</select>
										</div>
										<div class="col-md-2">
											<select name="subcategory"  class="form-control" id="subcategory">
												<option value="">-- Sub Category --</option>
												
											</select>
										</div>
										<div class="col-md-2">
											<input class="btn btn-dark" type="submit" value="Submit">
										</div>
									</div>
										</form>
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
												<th width="8%">Record ID</th>
												<th>Service Name</th>
											
											
												
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
										@forelse($scopelist as $key => $scope)
											<tr>
												<td>{{ $key+1 }}</td>
												<td>{{ $scope->scope->name ?? ''}}</td>
												<td>
													<a title="Edit"  class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
						<i class="la la-edit"></i> 
					</a>
													<a title="Delete"  class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
						<i class="la la-trash"></i> 
					</a>
												</td>
											</tr>
										@empty
											<tr>
												<td colspan="3" style="text-align: center">No Data Found</td>
											</tr>

										@endforelse
										</tbody>
									</table>

									<!--end: Datatable -->
								</div>
							</div>
						</div>

@endsection
@push('scripts')
<script src="{{ asset('public/storage/admin/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/storage/admin/assets/js/demo1/pages/crud/datatables/basic/paginations.js')}}" type="text/javascript"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <script>

    	const url = '{{ url('admin') }}';
    	function setService(title,value,button,url,method,message) {
			Swal.fire({
				  title: `${title}`,
				  html: `
					<select name="category_pop"  class="swal2-input" id="category_pop">
												<option value="">-- Category --</option>
												@foreach($category as $_category)
													<option value="{{ $_category->id }}" >{{ $_category->name }}</option>
												@endforeach
					</select><br>
					<select name="subcategory_pop"  class="swal2-input" id="subcategory_pop">
												<option value="">-- Sub Category --</option>
												
					</select>

					<select name="service[]"  class="swal2-input" id="service" multiple>
							<option value="">-- Select Service --</option>
							@foreach($scopes as $_scope)
								<option value="{{ $_scope->id }}">{{ $_scope->name }}</option>
							@endforeach

					</select>


				  `,
				  showCancelButton: true,
				  confirmButtonText: `${button}`,
				  showLoaderOnConfirm: true,
				  preConfirm: (login) => {

				  	const data = {
				  		category: $("#category_pop").val(),
				  		sub_category: $("#subcategory_pop").val(),
				  		service_type: $("#service").val(),
				  		_token: '{{ csrf_token() }}'
				  	};

				  $.ajax({
				   	url: `${url}`,
				   	type: `${method}`,
				   	dataType: 'json',
				   	data: data,
				   })
				   .done(function(e) {
					   	Swal.fire({
					   	 	type: 'success',
						   	title: `${message}`,
						   	onClose: () => {

						   		window.location.reload();
						   	} 
						});
				   })
				   .fail(function(e) {
					   	 Swal.fire({
					      html:`${e.responseJSON.errors.category?e.responseJSON.errors.category:''}<br>
					      ${e.responseJSON.errors.sub_category?e.responseJSON.errors.sub_category:''}<br>
					      ${e.responseJSON.errors.service_type?e.responseJSON.errors.service_type:''}`,
					      onClose: () => {
						   		setService(title,value,button,url,method,message);
						   	} 
					    });
				   });
				  },
			});

			$("#category_pop").change(function(e){
				e.preventDefault();
			$.get('{{ route('admin.option-map.getSubCategory') }}',{category_id:this.value}, function(data) {
				
				$("#subcategory_pop").empty();
					$.each(data, function(index, val) {
						
						$("#subcategory_pop").append(`<option value='${val.id}'>${val.name}</option>`);
					});
				});
			});

			$("#service").select2();
		}

		$("#addService").click(function(e){
			e.preventDefault();
			setService(
				'Add Service',
				'',
				'Submit',
				'{{ route('admin.option-map.store') }}',
				'POST',
				'Service is saved'
				);
		});

		function editService(id,name) {
		
			$.get(`${url}/option-type/${id}/edit`, function(data) {

			setService(
				'Update Service',
				`${name}`,
				'Update',
				`${url}/option-type/${id}`,
				'PUT',
				'Service is updated'
				);
			});
		}

		function deleteService(id) {
			Swal.fire({
					  title: 'Are you sure?',
					  text: "You want to delete ?",
					  type: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: 'Yes, delete it!'
						}).then((result) => {

						  if (result.value) {

						  	$.ajax({
						  		url: `${url}/option-type/`+id,
						  		type: 'DELETE',
						  		data: {_token: '{{ csrf_token() }}'},
						  	});
						  	
						  	
						  Swal.fire({
					   	 	type: 'success',
						   	title: 'Service has been Deleted',
						   	onClose: () => {

						   		window.location.reload();
						   	} 
						});
							  
						  }
			});
		}

		$("#category").change(function(){
			$.get('{{ route('admin.option-map.getSubCategory') }}',{category_id:this.value}, function(data) {
				
				$("#subcategory").empty();
				$.each(data, function(index, val) {
					selected = val.id == '{{ request()->has('subcategory')?request()->subcategory:'' }}'?'selected':'';
					$("#subcategory").append(`<option value='${val.id}' ${selected}>${val.name}</option>`);
				});
			});
		}).change();

		

    </script>
@endpush
