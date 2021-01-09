@extends('admin.layouts.app')
  @section('title','User')
@section('contents')
<style>
	.dropdown-menu a{
		cursor: pointer;
		color:inherit !important;
	}
</style>
<!-- begin:: Content -->
				<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							
											

							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand la la-user-secret"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Sub Admin
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">

												<div class="dropdown dropdown-inline">

													<!--  <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																											<i class="la la-download"></i> Export
																										</button> -->

													<!-- <div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Choose an option</span>
															</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon la la-print"></i>
																<span class="kt-nav__link-text">Print</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon la la-copy"></i>
																<span class="kt-nav__link-text">Copy</span>
															</a>
														</li>
															<li class="kt-nav__item">
																<a href="{{ route('admin.user.download','xlsx') }}" class="kt-nav__link" target="_blank">
																	<i class="kt-nav__link-icon la la-file-excel-o"></i>
																	<span class="kt-nav__link-text">Excel</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="{{ route('admin.user.download','csv') }}" class="kt-nav__link" target="_blank">
																	<i class="kt-nav__link-icon la la-file-text-o"></i>
																	<span class="kt-nav__link-text" >CSV</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																	<span class="kt-nav__link-text">PDF</span>
																</a>
															</li>
														</ul>
													</div> -->
												</div>
												&nbsp;
								@if(Auth::user()->permissions()->whereSlug('can_create_sub_admin')->exists())
												<a href="{{ route('admin.sub-admin.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-user-secret"></i>
													New Sub Admin
												</a>
								@endif
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
									{{-- <div class="row">
										<div class="col-md-2 offset-md-10">
											<form action="{{ route('admin.sub-admin.index') }}">
												
											
											<div class="input-group">
													<div class="input-group-prepend">
															<button class="btn btn-secondary" type="submit">Go!</button>
													</div>
														<input type="text" name='search' class="form-control" placeholder="Search for..." value="{{ Session::get('search_sub_admin')??'' }}">
											</div>
											</form>
										</div>	

									</div> --}}

									<!--begin: Datatable -->
									<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12">
			<table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 1471px;">
										<thead>
	<tr role="row">
		 <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Serial No.
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Full Name
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1"  rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Email
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Phone
        </th>
       
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Status
        </th>
    @if(Auth::user()->permissions()->whereSlug('can_edit_sub_admin')->exists() || Auth::user()->permissions()->whereSlug('can_delete_sub_admin')->exists() || Auth::user()->permissions()->whereSlug('can_permission_sub_admin')->exists())

        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Action
        </th>
    @endif

										</thead>
										<tbody>

				@foreach($user as $index => $_user)
					<tr role="row">
						<td>{{ ++$index  }}</td>
						<td>{{ ucfirst($_user->name) ?? ''}}</td>
						<td>{{ $_user->email ?? '' }}</td>
						<td>{{ $_user->mobile_number ?? '' }}</td>
						
						
						
						<td style="cursor: pointer;">

							@switch($_user->status)
						        @case(0)
						       		<a href='{{ url("admin/user/$_user->id/status/$_user->status") }}' class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">
										Deactive
									</a>
						        @break	
								@case(1)
						       		<a href='{{ url("admin/user/$_user->id/status/$_user->status") }}' class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">
										Active
									</a>
						        @break
							@endswitch
							
						</td>
		@if(Auth::user()->permissions()->whereSlug('can_edit_sub_admin')->exists() || Auth::user()->permissions()->whereSlug('can_delete_sub_admin')->exists() || Auth::user()->permissions()->whereSlug('can_permission_sub_admin')->exists())
						<td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
							
							@if(Auth::user()->permissions()->whereSlug('can_permission_sub_admin')->exists())
                            	<a class="dropdown-item" href="{{ route('admin.sub-admin.permission',[$_user->id]) }}" ><i class="la la-lock"></i> Permission</a>
                            @endif
							@if(Auth::user()->permissions()->whereSlug('can_edit_sub_admin')->exists())
                                <a href="{{ route('admin.sub-admin.edit',$_user->id) }}" class="dropdown-item" ><i class="la la-edit"></i> Edit</a>
                            @endif

                            @if(Auth::user()->permissions()->whereSlug('can_delete_sub_admin')->exists())
                                <a class="dropdown-item" onclick="deleteUser('{{ $_user->id }}')"><i class="la la-trash"></i> 
                                Delete</a>
                            @endif
                            </div>
                            
                        </span>
                       </td>
        @endif
					</tr>
				@endforeach	

						</tbody>
									</table>
								</div>
							</div>
							{{-- <div class="row">
								<div class="col-sm-12 col-md-5" >
									<div class="dataTables_info" id="kt_table_1_info" role="status" aria-live="polite">Showing {{$user->firstItem()}} to {{$user->lastItem()}}
    of  {{$user->total()}} entries
									</div>
								</div>
								<div class="col-sm-12 col-md-7 dataTables_pager" >
									<div class="dataTables_length" id="kt_table_1_length">
										<label>
											<select name="kt_table_1_length" aria-controls="kt_table_1" class="custom-select custom-select-sm form-control form-control-sm" id="pagination_size"> 
												
												<option value="10" {{ Session::get('sub_admin_table_size')==10?'selected':'' }}>10</option>
												<option value="25" {{ Session::get('sub_admin_table_size')==25?'selected':'' }}>25</option>
												<option value="50" {{ Session::get('sub_admin_table_size')==50?'selected':'' }}>50</option>
												<option value="100" {{ Session::get('sub_admin_table_size')==100?'selected':'' }}>100</option>
											</select>
										</label>
									</div>
									<div class="dataTables_paginate paging_simple_numbers" id="kt_table_1_paginate">

										{{ $user->links() }}
									</div>
						</div></div> --}}</div>

									<!--end: Datatable -->
								</div>
							</div>
						</div>


@push('scripts')
	<script>

		var url = '{{ url('') }}';

		$("#pagination_size").change(function(){

			$.get('{{route('admin.sub-admin.index')}}',{display:this.value}, function(data) {
				window.location.reload();
			});

		});

function deleteUser(id) {
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
				  		url: '{{ url('admin/sub-admin') }}/'+id,
				  		type: 'DELETE',
				  		data: {_token: '{{ csrf_token() }}'},
				  	});
				  	
				    Swal.fire({
					   	 	type: 'success',
						   	title: 'Sub Admin has been deleted.',
						   	onClose: () => {

						   		window.location.reload();
						   	} 
						});
				    
				    
				  }
		});
}

	function permission(id,name) {

		
		var checkedValue=[];
			Swal.fire({
			  	width: '80%',
			  	title: `Permission for &nbsp;<strong> ${name}</strong>`,
			  	html:
				    `<div class='row'>
				    	<div class='col-lg-12' style='text-align:left'>
						<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
							<input type="checkbox" id="select_all"> <strong>Select All  </strong>
								<span></span>
						</label>
						</div>
				    </div>
				    <div class='row'>
				    @foreach($permissions as $permission)
						<div class='col-lg-3' style='text-align:left'>
						<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
							<input type="checkbox" value='{{ $permission->id }}' class='permissions'>
							 <strong>{{ $permission->title }}  </strong>
								<span></span>
						</label>
						</div>
					@endforeach
				    </div>`,
				showCloseButton: true,
				showCancelButton: true,
				focusConfirm: false,
				confirmButtonText:'Submit',
				cancelButtonText:'Cancel',
				showLoaderOnConfirm: true,
				preConfirm : () => {

					$(".permissions:checked").each(function(){
					    checkedValue.push($(this).val());
					});

					$.post('{{ route('admin.permission.allot') }}',
					 {
					 	permission: checkedValue,
					 	user_id:  id,
					 	_token: '{{ csrf_token() }}'
					 }, function(data, textStatus, xhr) {
						
							Swal.fire({
								type: 'success',
								html: `Permission Alloted <br> <strong>${name}</strong>`,
								onClose:() => {
									window.location.reload();
								}
							});
					});
					
					
				}
			});

			$.get(`{{ url('admin/permission/user/') }}/${id}`, function(data) {
					

					$.each(data.user_permission, function(index, val) {
							
						$(`input[type=checkbox][value=${val.permission_id}]`).prop("checked",true);

					});
					

					
			});

			$("#select_all").click(function () {

				
   		 		$("INPUT[type=checkbox]").prop('checked', $(this).prop('checked'));

			});
	}
	
$(document).ready(function(){
	$("#kt_table_1").DataTable();
});
	
		
	</script>
@endpush	
					
@endsection