@extends('admin.layouts.app')
  @section('title','Skill')
@section('contents')
<style>
	a{
		cursor: pointer;
	}
</style>
<!-- begin:: Content -->
				<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							
											

							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
										 <i class="la la-bullseye"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Help Category
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												&nbsp;
												<a href="{{ route('admin.help-category.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
													 <i class="la la-bullseye"></i>
													New Help Category
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12">
	<table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="skill" role="grid" aria-describedby="kt_table_1_info" style="width: 1471px;">
										<thead>
	<tr role="row">
		 <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" width="20%">
        	Serial No.
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Title
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Type
        </th>
  
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" width="20%">
        	Action
        </th>

	</thead>
		<tbody>
	
		@foreach($helpCategory as $index => $_help)
			<tr>
				<td>{{ ++$index  }}</td>
				<td>{{ $_help->title ?? '' }}</td>
				<td>{{ $_help->type == 1?'Seller':'Buyer' }}</td>
				<td>
					<a title="Edit" href="{{ route('admin.help-category.edit',[$_help->id]) }}" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
						<i class="la la-edit"></i> 
					</a>
				
					<a title="Delete" onclick="destroy('{{ $_help->id }}')" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
						<i class="la la-trash"></i> 
					</a>
				</td>
			</tr>
		@endforeach

	</tbody>
									</table>
								</div>
							</div>

									<!--end: Datatable -->
								</div>
							</div>
						</div>

@push('scripts')
<script>
	const url = '{{ url('admin') }}';
	function destroy(id) {
		Swal.fire({
		 	title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {

			if (result.value) {

			 	$.ajax({
			  		url: `${url}/help-category/`+id,
			  		type: 'DELETE',
			  		data: {_token: '{{ csrf_token() }}'},
			  	});
				Swal.fire({
					type: 'success',
					title: 'Help Category Deleted',
					onClose: () => {
				   		window.location.reload();
					} 
				});
							  
			}
		});
	}
	</script>
@endpush	

						<!-- end:: Content -->
					
@endsection