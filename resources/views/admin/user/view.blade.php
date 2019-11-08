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
											<i class="kt-font-brand flaticon-user"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											User
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
											@can('download',App\User::class)
												<div class="dropdown dropdown-inline">

													 <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="la la-download"></i> Export
													</button>

													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Choose an option</span>
															</li>
														<!-- 	<li class="kt-nav__item">
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
														</li> -->
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
															<!-- <li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																	<span class="kt-nav__link-text">PDF</span>
																</a>
															</li> -->
														</ul>
													</div>
												</div>
											@endcan
												&nbsp;
											@can('create',App\User::class)
												<a href="{{ route('admin.user.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="flaticon-user-add"></i>
													New User
												</a>
											@endcan
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
									<div class="row">
										<div class="col-md-2 offset-md-10">
											<form action="{{ route('admin.user.index') }}">
												
											
											<div class="input-group">
													<div class="input-group-prepend">
															<button class="btn btn-secondary" type="submit">Go!</button>
													</div>
														<input type="text" name='search' class="form-control" placeholder="Search for..." value="{{ Session::get('search_user')??'' }}">
											</div>
											</form>
										</div>	

									</div>

									<!--begin: Datatable -->
									<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 1471px;">
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
        	Country
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Total Gigs
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Rejected Gigs
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Active Gigs
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Status
        </th>
    @canany(['view', 'update','delete','status','reset','loginAs','suspend'],App\User::class)
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Action
        </th>
    @endcanany

										</thead>
										<tbody>

				@foreach($user as $index => $_user)
					<tr role="row">
						<td>{{ $index + $user->firstItem() }}</td>
						<td>{{ ucfirst($_user->name) ?? ''}}</td>
						<td>{{ $_user->email ?? '' }}</td>
						<td>{{ $_user->mobile_number ?? '' }}</td>
						
						<td>{{ $_user->userBillingAaddresses->country_id ?? '' }}</td>
						<td></td>
						<td></td>
						<td></td>
						
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
						        @case(2)
						       		<a href='{{ url("admin/user/$_user->id/status/$_user->status") }}' class="kt-badge  kt-badge--warning kt-badge--inline kt-badge--pill">
										Suspended
									</a>
						        @break
							@endswitch
							
						</td>
					@canany(['view', 'update','delete','status','reset','loginAs','suspend'],App\User::class)
						<td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                            @can('update',App\User::class)
                                <a href="{{ route('admin.user.edit',$_user->id) }}" class="dropdown-item" ><i class="la la-edit"></i> Edit</a>
                            @endcan
							@can('view',App\User::class)
                                <a  class="dropdown-item" href="{{ route('admin.user.show',$_user->id) }}" ><i class="la la-expand"></i> View</a>
                            @endcan
                           	@can('suspend',App\User::class)
                                <a class="dropdown-item" onclick="suspendUser('{{ $_user->id }}','{{ $_user->name }}')"><i class="la la-leaf"></i>
                                 Account Suspend</a>
                            @endcan
                            @can('status',App\User::class)
                                <a class="dropdown-item" href="{{ url("admin/user/$_user->id/status/1") }}" ><i class="la la-ban"></i>
                                 Deactive</a>
                            @endcan
							@can('reset',App\User::class)
                                 <a class="dropdown-item" onclick="resetPassword('{{ $_user->email }}')"><i class="la la-refresh"></i>
                                Reset Password</a>
                            @endcan
                            @can('loginAs',App\User::class)
                                 <a class="dropdown-item" onclick="loginAsUser('{{ $_user->id }}')"><i class="la la-key"></i>
                               Login as User</a>
                            @endcan
                            @can('delete',App\User::class)
                                <a class="dropdown-item" onclick="deleteUser('{{ $_user->id }}')"><i class="la la-trash"></i> 
                                Delete</a>
                            @endcan
                            </div>
                            
                        </span>
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
									<div class="dataTables_info" id="kt_table_1_info" role="status" aria-live="polite">Showing {{($user->currentpage()-1)*$user->perpage()+1}} to {{$user->currentpage()*$user->perpage()}}
    of  {{$user->total()}} entries
									</div>
								</div>
								<div class="col-sm-12 col-md-7 dataTables_pager" >
									<div class="dataTables_length" id="kt_table_1_length">
										<label>
											<select name="kt_table_1_length" aria-controls="kt_table_1" class="custom-select custom-select-sm form-control form-control-sm" id="pagination_size"> 
												
												<option value="10" {{ Session::get('user_table_size')==10?'selected':'' }}>10</option>
												<option value="25" {{ Session::get('user_table_size')==25?'selected':'' }}>25</option>
												<option value="50" {{ Session::get('user_table_size')==50?'selected':'' }}>50</option>
												<option value="100" {{ Session::get('user_table_size')==100?'selected':'' }}>100</option>
											</select>
										</label>
									</div>
									<div class="dataTables_paginate paging_simple_numbers" id="kt_table_1_paginate">

										{{ $user->render() }}
									</div>
						</div></div></div>

									<!--end: Datatable -->
								</div>
							</div>
						</div>


@push('scripts')
	<script>

		var url = '{{ url('') }}';

		$("#pagination_size").change(function(){

			$.get('{{route('admin.user.index')}}',{display:this.value}, function(data) {
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
				  		url: '{{ url('admin/user') }}/'+id,
				  		type: 'DELETE',
				  		data: {_token: '{{ csrf_token() }}'},
				  	});
				  	
				  	
				    Swal.fire(
				      'Deleted!',
				      'User has been deleted.',
				      'success'
				    );
				    setInterval(function(){ window.location.reload(); }, 2000);
				    
				  }
		});
}

function suspendUser(id,name) {
	Swal.fire({
	  title: `Suspend &nbsp; <strong>${name}</strong>`,
	   html:
    `<input id="swal-input1" class="swal2-input"  type="text"  placeholder="Enter Days" required>
    <textarea  id="region_of_suspension" class="swal2-input" rows="10" placeholder='
    Enter Suspend Region' style='height:200px'></textarea>`,
	  inputAttributes: {
	    autocapitalize: 'off'
	  },
  showCancelButton: true,
  confirmButtonText: 'Suspend',
  showLoaderOnConfirm: true,
  preConfirm: (login) => {

  	  $.ajax({
  	  	headers: {
        'X-CSRF-Token': '{{ csrf_token() }}'
    	},
  	  	url: `{{ url('') }}/admin/user/${id}/suspend`,
  	  	type: 'POST',
  	  	dataType: 'json',
  	  	data: {
  	  		number_of_days: $("#swal-input1").val(),
    		region: $("#region_of_suspension").val()}
  	  })
  	  .always(function(e) {
  	  	if(!e.errors){

			Swal.fire({
			  title: `${name} is suspended for ${$("#swal-input1").val()} days`,
			  timer: 3000,
			  onClose: () => {
			    window.location.reload();
			  }
			});
  	  	}else{
  	  		Swal.fire({
			  html: `${e.errors.number_of_days?e.errors.number_of_days:''}<br>${e.errors.region?e.errors.region:''}`,
			  onClose: () => {
			    suspendUser(id,name);
			  }
			});
  	  	}

  	  });
  	 
    
  }
});
}
		
	
		
	function resetPassword(email){

		$.post('{{ route('admin.user.resetPassword') }}', {email: email,_token:'{{ csrf_token() }}'}, function(data, textStatus, xhr) {

			Swal.fire({
			  type: `${data.success?'success':'error'}`,
			  title: `${data.message?data.message:data.errors.email}`,
			});

		});
		
	}
	function loginAsUser(id) {
		
		$.get(url+`/admin/user/${id}/login`, {}, function(data) {
			
			window.open(data.url);

		});
	}
		
	</script>
@endpush	

						<!-- end:: Content -->
					
@endsection