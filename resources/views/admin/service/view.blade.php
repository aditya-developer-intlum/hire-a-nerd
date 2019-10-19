@extends('admin.layouts.app')

@push('css')
<link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endpush
@section('contents')

	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Option Type
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												
												&nbsp;
												<a href="#" id="addService" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													New Service
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
												<th width="8%">Record ID</th>
												<th>Name</th>
												
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
									@forelse($scope as $key => $_scope)
										<tr>
											<td>{{ $key+1 }}</td>
											<td>{{ $_scope->name }}</td>
											<td>
									<a title="Edit" onclick="editService('{{ $_scope->id }}','{{ $_scope->name }}')" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
												<i class="la la-edit"></i> 
									</a>
									<a title="Delete" onclick="deleteService('{{ $_scope->id }}')" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
												<i class="la la-trash"></i> 
									</a>
						
											</td>
										</tr>
									@empty
										<tr>
											<td></td>
											<td></td>
											<td></td>
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

    <script>
    	const url = '{{ url('admin') }}';
    	function setService(title,value,button,url,method,message) {
			Swal.fire({
				  title: `${title}`,
				  input: 'text',
				  inputValue: `${value}`,
				  inputAttributes: {
				    autocapitalize: 'off',
				    placeholder:'Enter Service'
				  },
				  showCancelButton: true,
				  confirmButtonText: `${button}`,
				  showLoaderOnConfirm: true,
				  preConfirm: (login) => {
				  $.ajax({
				   	url: `${url}`,
				   	type: `${method}`,
				   	dataType: 'json',
				   	data: {name: login,'_token':'{{ csrf_token() }}'},
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
					      title:`${e.responseJSON.errors.name}`,
					      onClose: () => {
						   		setService(title,value,button,url,method,message);
						   	} 
					    });
				   });
				  },
			});
		}

		$("#addService").click(function(e){
			e.preventDefault();
			setService(
				'Add Service',
				'',
				'Submit',
				'{{ route('admin.option-type.store') }}',
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
				'Option is updated'
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
						   	title: 'Option has been Deleted',
						   	onClose: () => {

						   		window.location.reload();
						   	} 
						});
							  
						  }
			});
		}


    </script>
@endpush
