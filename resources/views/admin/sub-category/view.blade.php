@extends('admin.layouts.app')
  @section('title','Qualification')
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
										 <i class="la la-list-alt"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Sub Category
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">

												
												&nbsp;
											@can('create',App\Models\SubMenu::class)
												<a href="#" id="addSubCategory" class="btn btn-brand btn-elevate btn-icon-sm">
												 <i class="la la-list-alt"></i>
													New Sub Category
												</a>
											@endcan
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
									<div class="row">
										<div class="col-md-2 offset-md-10">
											<form action="{{ route('admin.sub-category.index') }}">
												
											
											<div class="input-group">
													<div class="input-group-prepend">
															<button class="btn btn-secondary" type="submit">Go!</button>
													</div>
														<input type="text" name='search' class="form-control" placeholder="Search for..." value="{{ Session::get('search_sub_category')??'' }}" autocomplete="off">
													
											</div>
											</form>
										</div>	

									</div>

									<!--begin: Datatable -->
									<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 1471px;">
										<thead>
	<tr role="row">
		 <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" width="10%">
        	Serial No.
        </th>
         <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	@sortablelink('menu.name','Menu')
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	@sortablelink('name')
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	@sortablelink('slug')
        </th>
         <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	@sortablelink('sort_id','Sort Id')
        </th>
         <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	@sortablelink('is_active','Status')
        </th>
    @canany(['update','delete'],App\Models\SubMenu::class)
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" width="10%">
        	Action
        </th>
    @endcanany

	</thead>
		<tbody>
	
		@foreach($subCategory as $index => $_subCategory)
			<tr>
				<td>{{ $index + $subCategory->firstItem() }}</td>
				<td>{{ $_subCategory->menu->name ?? ''}}</td>
				<td>{{ $_subCategory->name ?? ''}}</td>
				<td>{{ $_subCategory->slug ?? ''}}</td>
				<td>{{ $_subCategory->sort_id ?? ''}}</td>
				<td>
					<a href="{{ route('admin.sub-category.status',[$_subCategory->id,$_subCategory->is_active]) }}" class="kt-badge  kt-badge--{{ $_subCategory->is_active == 1 ? 'success':'danger' }} kt-badge--inline kt-badge--pill">
										{{ $_subCategory->is_active == 1 ? 'Active':'Deactive' }}
					</a>
				</td>
	@canany(['update','delete'],App\Models\SubMenu::class)
				<td>
			@can('update',App\Models\SubMenu::class)
					<a title="Edit" onclick="editSubCategory('{{ $_subCategory->id }}')" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
						<i class="la la-edit"></i> 
					</a>
			@endcan
			@can('delete',App\Models\SubMenu::class)
					<a title="Delete" onclick="deleteSubCategory('{{ $_subCategory->id }}')" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
						<i class="la la-trash"></i> 
					</a>
			@endcan	
			<a title="commision" onclick="commision('{{ $_subCategory->id }}','{{ $_subCategory->name }}')" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
						<i class="la la-money"></i> 
					</a>		
				</td>
	@endcanany
			</tr>
		@endforeach

	</tbody>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-5" >
									<div class="dataTables_info" id="kt_table_1_info" role="status" aria-live="polite">Showing 
		{{ ($subCategory->firstItem()) }} to {{ $subCategory->lastItem() }}

    of  {{$subCategory->total()}} entries
									</div>
								</div>
								<div class="col-sm-12 col-md-7 dataTables_pager" >
									<div class="dataTables_length" id="kt_table_1_length">
										<label>
											<select name="kt_table_1_length" aria-controls="kt_table_1" class="custom-select custom-select-sm form-control form-control-sm" id="pagination_size"> 
												
												<option value="10" {{ Session::get('sub_category_table_size')==10?'selected':'' }}>10</option>
												<option value="25" {{ Session::get('sub_category_table_size')==25?'selected':'' }}>25</option>
												<option value="50" {{ Session::get('sub_category_table_size')==50?'selected':'' }}>50</option>
												<option value="100" {{ Session::get('sub_category_table_size')==100?'selected':'' }}>100</option>
											</select>
										</label>
									</div>
									<div class="dataTables_paginate paging_simple_numbers" id="kt_table_1_paginate">
									{{ $subCategory->appends($_GET)->links() }}
										
									</div>
						</div></div></div>

									<!--end: Datatable -->
								</div>
							</div>
						</div>



@push('scripts')
	<script>
		const url = '{{ url('admin') }}';

		function setSubCategory(title,value,button,url,method,message,category = "",sorting="") {
			Swal.fire({
				  title: `${title}`,
				  html:
    `<select  id="category" class="swal2-input">
		<option value="">Select Category</option>
		@foreach($category as $_category)
		
		<option value="{{ $_category->id }}" ${category=='{{ $_category->id }}'?'selected':''}>{{ $_category->name }}</option>
		@endforeach
	</select>
	<input id="swal-input1" class="swal2-input"  type="text"  placeholder="Enter Sub Category" value='${value}'>
	<input id="sortId" class="swal2-input"  type="text"  placeholder="Sorting Number" value='${sorting}'>
    `,
				  showCancelButton: true,
				  confirmButtonText: `${button}`,
				  showLoaderOnConfirm: true,
				  preConfirm: (login) => {
				  $.ajax({
				   	url: `${url}`,
				   	type: `${method}`,
				   	dataType: 'json',
				   	data: {
				   		name: $("#swal-input1").val(),
				   		category: $("#category").val(),
				   		sorting: $("#sortId").val(),
				   		_token:'{{ csrf_token() }}'},
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
					      html:`${e.responseJSON.errors.category?e.responseJSON.errors.category:''}
					      <br>
					      ${e.responseJSON.errors.name?e.responseJSON.errors.name:''}`,
					      onClose: () => {
						   		setSubCategory(title,value,button,url,method,message);
						   	} 
					    });
				   });
				  },
			});
		}


		$("#addSubCategory").click(function(e){
			e.preventDefault();
			setSubCategory(
				'Add Sub Category',
				'',
				'Submit',
				'{{ route('admin.sub-category.store') }}',
				'POST',
				'Sub Category is saved'
				);
		})
		


		function editSubCategory(id) {
		
			$.get(`${url}/sub-category/${id}/edit`, function(data) {

			setSubCategory(
				'Update Sub Category',
				`${data.name}`,
				'Update',
				`${url}/sub-category/${id}`,
				'PUT',
				'Sub Category is updated',
				`${data.menu_id}`,
				`${data.sort_id}`
				);
			});
		}

		function deleteSubCategory(id) {
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
						  		url: `${url}/sub-category/`+id,
						  		type: 'DELETE',
						  		data: {_token: '{{ csrf_token() }}'},
						  	});
						  	
						  	
						  Swal.fire({
					   	 	type: 'success',
						   	title: 'Sub Category has been Deleted',
						   	onClose: () => {

						   		window.location.reload();
						   	} 
						});
							  
						  }
			});
		}

		function commision(id,name) {
		Swal.fire({
			title: `Set Commision For ${name}`,
			input:'text',
			inputAttributes: {
    			autocapitalize: 'off',
    			id: 'commision_amount',
    			placeholder: 'Enter Commision Percentage',

  			},
			showCancelButton: true,
			showLoaderOnConfirm: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			onBeforeOpen: () => {

				
				$.get(`{{ url('admin/commision/') }}/${id}/submenu`, function(data) {
					$("#commision_amount").val(data.amount);	
				});
			}
		}).then((result) => {

						if (result.value) {	  
							var data = {
								_token: '{{ csrf_token() }}' ,
								sub_menu_id: id,
								amount: result.value
							};
							$.post('{{ route('admin.commision') }}', data , function(data, textStatus, xhr) {
								Swal.fire({
					   	 			type: 'success',
						   			title: 'Commision Added',
						   			onClose: () => {
						   				window.location.reload();
						   			} 
								});
							
							});
						}
			});

		$('#commision_amount').bind('keyup blur',function(){ 
    		var node = $(this);
   			 node.val(node.val().replace(/[^0-9]/g,'') ); 
   			 	if ($(this).val() > 100){
			    	$(this).val('100');
			  	} else if($(this).val() < 0){
			  		$(this).val('0');
			  	}
   			}
		);
	}

$("#pagination_size").change(function(){

			$.get('{{route('admin.sub-category.index')}}',{display:this.value}, function(data) {
				window.location.reload();
			});

		});

	</script>
@endpush	

						<!-- end:: Content -->
					
@endsection