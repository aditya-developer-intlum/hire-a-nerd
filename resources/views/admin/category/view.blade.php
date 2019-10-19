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
										 <i class="la la-list"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Category
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">

												
												&nbsp;
										@can('create',App\Models\Menu::class)
												<a href="#" id="addCategory" class="btn btn-brand btn-elevate btn-icon-sm">
												 <i class="la la-list"></i>
													New Category
												</a>
										@endcan
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
									<div class="row">
										<div class="col-md-2 offset-md-10">
											<form action="{{ route('admin.category.index') }}">
												
											
											<div class="input-group">
													<div class="input-group-prepend">
															<button class="btn btn-secondary" type="submit">Go!</button>
													</div>
														<input type="text" name='search' class="form-control" placeholder="Search for..." value="{{ Session::get('search_category')??'' }}" autocomplete="off">
													
											</div>
											</form>
										</div>	

									</div>

									<!--begin: Datatable -->
									<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 1471px;">
										<thead>
	<tr role="row">
		 <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" width="20%">
        	Serial No.
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Name
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Slug
        </th>
         <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Status
        </th>
    @canany(['update','delete'],App\Models\Menu::class)
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" width="10%">
        	Action
        </th>
    @endcanany

	</thead>
		<tbody>
	
		@foreach($category as $index => $_category)
			<tr>
				<td>{{ $index + $category->firstItem() }}</td>
				<td>{{ $_category->name }}</td>
				<td>{{ $_category->slug }}</td>
				<td>
					<a href="{{ route('admin.category.status',[$_category->id,$_category->is_active]) }}" class="kt-badge  kt-badge--{{ $_category->is_active == 1 ? 'success':'danger' }} kt-badge--inline kt-badge--pill">
										{{ $_category->is_active == 1 ? 'Active':'Deactive' }}
					</a>
				</td>
		@canany(['update','delete'],App\Models\Menu::class)
				<td>
				@can('update',App\Models\Menu::class)
					<a title="Edit" onclick="editCategory('{{ $_category->id }}')" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
						<i class="la la-edit"></i> 
					</a>
				@endcan
				@can('delete',App\Models\Menu::class)
					<a title="Delete" onclick="deleteCategory('{{ $_category->id }}')" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
						<i class="la la-trash"></i> 
					</a>
				@endcan	
					<a title="commision" onclick="commision('{{ $_category->id }}','{{ $_category->name }}')" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
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
										{{($category->currentpage()-1)*$category->perpage()+1}} to {{$category->currentpage()*$category->perpage()}}
    of  {{$category->total()}} entries
									</div>
								</div>
								<div class="col-sm-12 col-md-7 dataTables_pager" >
									<div class="dataTables_length" id="kt_table_1_length">
										<label>
											<select name="kt_table_1_length" aria-controls="kt_table_1" class="custom-select custom-select-sm form-control form-control-sm" id="pagination_size"> 
												
												<option value="10" {{ Session::get('category_table_size')==10?'selected':'' }}>10</option>
												<option value="25" {{ Session::get('category_table_size')==25?'selected':'' }}>25</option>
												<option value="50" {{ Session::get('category_table_size')==50?'selected':'' }}>50</option>
												<option value="100" {{ Session::get('category_table_size')==100?'selected':'' }}>100</option>
											</select>
										</label>
									</div>
									<div class="dataTables_paginate paging_simple_numbers" id="kt_table_1_paginate">
									{{ $category->links() }}
										
									</div>
						</div></div></div>

									<!--end: Datatable -->
								</div>
							</div>
						</div>

@push('scripts')
	<script>
		const url = '{{ url('admin') }}';

		function setCategory(title,value,button,url,method,message) {
			Swal.fire({
				  title: `${title}`,
				  input: 'text',
				  inputValue: `${value}`,
				  inputAttributes: {
				    autocapitalize: 'off',
				    placeholder:'Enter Category'
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
						   		setCategory(title,value,button,url,method,message);
						   	} 
					    });
				   });
				  },
			});
		}


		$("#addCategory").click(function(e){
			e.preventDefault();
			setCategory(
				'Add Category',
				'',
				'Submit',
				'{{ route('admin.category.store') }}',
				'POST',
				'Category is saved'
				);
		})
		


		function editCategory(id) {
		
			$.get(`${url}/category/${id}/edit`, function(data) {

			setCategory(
				'Update Category',
				`${data.name}`,
				'Update',
				`${url}/category/${id}`,
				'PUT',
				'Category is updated'
				);
			});
		}

		function deleteCategory(id) {
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
						  		url: `${url}/category/`+id,
						  		type: 'DELETE',
						  		data: {_token: '{{ csrf_token() }}'},
						  	});
						  	
						  	
						  Swal.fire({
					   	 	type: 'success',
						   	title: 'Category has been Deleted',
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

				
				$.get(`{{ url('admin/commision/') }}/${id}/menu`, function(data) {
					$("#commision_amount").val(data.amount);	
				});
			}
		}).then((result) => {

						if (result.value) {	  
							var data = {
								_token: '{{ csrf_token() }}' ,
								menu_id: id,
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

			$.get('{{route('admin.category.index')}}',{display:this.value}, function(data) {
				window.location.reload();
			});

		});

	</script>
@endpush	

						<!-- end:: Content -->
					
@endsection