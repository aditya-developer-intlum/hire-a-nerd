@extends('admin.layouts.app')
  @section('title','Qualification')
@section('contents')
<style>
	a{
		cursor: pointer;
	}
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
										 <i class="la la-file-text"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Manage Service
										</h3>
									</div>
									
								</div>
	<div class="kt-portlet__body">
		<div class="row" style="padding-bottom: 20px">
				<div class="col-md-2 offset-md-8">
														
					<div class="input-group">
					<select name="status" id="status_action" class="form-control">
						<option value="" {{ Session::get('status_action')==null?'selected':'' }}>Status</option>
						<option value="pending" {{ Session::get('status_action_view')=='pending'?'selected':'' }}>Pending Approval</option>
						<option value="approved" {{ Session::get('status_action_view')=='approved'?'selected':'' }}>Approved</option>
						<option value="blocked" {{ Session::get('status_action_view')=='blocked'?'selected':'' }}>Blocked</option>
						<option value="suspend" {{ Session::get('status_action_view')=='suspend'?'selected':'' }}>Suspend</option>
					</select>
													
					</div>
				
			</div>
			<div class="col-md-2">
				<form action="{{ route('admin.manage.gig.index') }}">										
					<div class="input-group">
					<div class="input-group-prepend">
						<button class="btn btn-secondary" type="submit">Go!</button>
					</div>
					<input type="text" name='search' class="form-control" placeholder="Search for..."
					 value="{{ Session::get('search_gigs')??'' }}" autocomplete="off">
													
					</div>
				</form>
			</div>	

		</div>

									<!--begin: Datatable -->
		<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
			<div class="row">
				<div class="col-sm-12">
					<table class="table table-striped- table-bordered table-hover table-checkable  no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 1471px;">
										<thead>
	<tr role="row">
		 <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" >
        	Category
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" >
        	Sub Category
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" >
        	Title
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Seller
        </th>
         <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Basic Price
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Standard Price
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Premium Price
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Created At
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Status
        </th>
    @canany(['accept','view','block','delete','suspend'],App\Models\Gig::class)
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" >
        	Action
        </th>
    @endcanany
    
	</tr>
	</thead>
		<tbody>
		@empty(!$gigs)
			@foreach($gigs as $gig)
				<tr>
					<td> {{ $gig->menu->name ?? '' }} </td>
					<td> {{ $gig->submenu->name ?? '' }} </td>
					<td> {{ $gig->gig_title }} </td>
					<td> {{ $gig->user->name ?? '' }} </td>
					<td> {{ $gig->gigprice->basic_price }}
							
						@can('earning',App\Models\Gig::class)
							<span class="dropdown">
		<a href="#" onclick="setEarning('{{ $gig->user->id }}','{{ $gig->menu->id }}','{{ $gig->submenu->id }}',this,'{{ $gig->gigprice->basic_price }}')" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
	                              <i class="la la-info-circle"></i>
	                            </a>
	                            <div class="dropdown-menu dropdown-menu-right">
			
	                              
	                            </div>
	                            
	                        </span>
	                   	@endcan


					 </td>
					<td> {{ $gig->gigprice->standard_price }} 
							@can('earning',App\Models\Gig::class)
							<span class="dropdown">
	                            <a href="#" onclick="setEarning('{{ $gig->user->id }}','{{ $gig->menu->id }}','{{ $gig->submenu->id }}',this,'{{ $gig->gigprice->standard_price }}')" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
	                              <i class="la la-info-circle"></i>
	                            </a>
	                            <div class="dropdown-menu dropdown-menu-right">
	                              
	                            </div>
	                            
	                        </span>
	                        @endcan
					</td>
					<td> {{ $gig->gigprice->premium_price }} 
							
							@can('earning',App\Models\Gig::class)
								<span class="dropdown">
		                            <a href="#" onclick="setEarning('{{ $gig->user->id }}','{{ $gig->menu->id }}','{{ $gig->submenu->id }}',this,'{{ $gig->gigprice->premium_price }}')" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
		                              <i class="la la-info-circle"></i>
		                            </a>
		                            <div class="dropdown-menu dropdown-menu-right">
		                            
		                            </div>
		                            
		                        </span>
	                       @endcan
					</td>
					<td> {{ $gig->created_at }} </td>
					<td> 

						@switch($gig->is_status)
							@case(0)
								<span class="kt-badge kt-badge--primary kt-badge--dot"></span>
								&nbsp;
								<span class="kt-font-bold kt-font-primary">Pending Approval</span>
							@break
							@case(1)
								<span class="kt-badge kt-badge--success kt-badge--dot"></span>
								&nbsp;
								<span class="kt-font-bold kt-font-success">Approved</span>
							@break
							@case(2)
								<span class="kt-badge kt-badge--danger kt-badge--dot"></span>
								&nbsp;
								<span class="kt-font-bold kt-font-danger">Blocked</span>
							@break
							@case(3)
								<span class="kt-badge kt-badge--dark kt-badge--dot"></span>
								&nbsp;
								<span class="kt-font-bold kt-font-dark">Suspended</span>
								<span class="dropdown">
	                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
	                              <i class="la la-info-circle"></i>
	                            </a>
	                            <div class="dropdown-menu dropdown-menu-right">
	                              <center>
	                              	<div class="container">
	                              	<span>
	                              		Service Suspended till <br>{{ date('d M Y',strtotime($gig->suspended_till)) }}
	                              	</span>
	                              		
	                              	</div>
	                              </center> 
	                            </div>
	                            
	                        </span>
								
							@break
						@endswitch

					</td>

				@canany(['accept','view','block','delete','suspend'],App\Models\Gig::class)
					<td nowrap="">
	                        <span class="dropdown">
	                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
	                              <i class="la la-ellipsis-v"></i>
	                            </a>
	                            <div class="dropdown-menu dropdown-menu-right">

								

	                            @can('accept',App\Models\Gig::class)
	                                <a href="{{ route('admin.manage.gig.accept',[$gig->id]) }}" class="dropdown-item" ><i class="la la-check"></i> Approve</a>
	                            @endcan
	                            @can('view',App\Models\Gig::class)
	                                <a onclick="return window.open('{{ url(sprintf('%s/%s/%d',$gig->menu->slug,$gig->submenu->slug,$gig->id)) }}','_blank')" class="dropdown-item" ><i class="la la-expand"></i> View</a>
	                            @endcan
	                            @can('block',App\Models\Gig::class)
	                                <a onclick='block("{{ $gig->id }}")' class="dropdown-item" ><i class="la la-ban"></i> Block</a>
	                            @endcan
	                            @can('delete',App\Models\Gig::class)
	                                <a onclick='deleteGig("{{ $gig->id }}")' class="dropdown-item" ><i class="la la-trash"></i> Delete</a>
	                            @endcan
	                            @can('suspend',App\Models\Gig::class)
	                                <a onclick='suspend("{{ $gig->id }}")' class="dropdown-item" ><i class="la la-leaf"></i> Suspend</a>
	                            @endcan

	                             <a href="{{ route('admin.manage.gig.sellerDetail',[$gig->id]) }}" class="dropdown-item" target="_blank"><i class="la la-user"></i> Seller Detail</a>
	                            </div>
	                            
	                        </span>
	                </td>
	           	@endcanany

				</tr>
			@endforeach
		@endempty

	

	</tbody>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-5" >
									<div class="dataTables_info" id="kt_table_1_info" role="status" aria-live="polite">Showing 
										{{($gigs->currentpage()-1)*$gigs->perpage()+1}} to {{$gigs->currentpage()*$gigs->perpage()}}
    of  {{$gigs->total()}} entries 
									</div>
								</div>
								<div class="col-sm-12 col-md-7 dataTables_pager" >
									<div class="dataTables_length" id="kt_table_1_length">
										<label>
											<select name="kt_table_1_length" aria-controls="kt_table_1" class="custom-select custom-select-sm form-control form-control-sm" id="pagination_size"> 
												
												<option value="10" {{ Session::get('gigs_table_size')==10?'selected':'' }}>10</option>
												<option value="25" {{ Session::get('gigs_table_size')==25?'selected':'' }}>25</option>
												<option value="50" {{ Session::get('gigs_table_size')==50?'selected':'' }}>50</option>
												<option value="100" {{ Session::get('gigs_table_size')==100?'selected':'' }}>100</option>
											</select>
										</label>
									</div>
									<div class="dataTables_paginate paging_simple_numbers" id="kt_table_1_paginate">
									{{ $gigs->render() }}
										
									</div>
						</div></div></div>

									<!--end: Datatable -->
								</div>
							</div>
						</div>

@push('scripts')
	<script>
		const url = '{{ url('admin') }}';



	function setEarning(userId,category,subCategory,node,price) {
		
		var data = { 
			_token: '{{ csrf_token() }}',
			user_id:userId,
			menu:category,
			submenu:subCategory
		};

		$.post('{{ route('admin.commision.search') }}',data, function(data, textStatus, xhr) {
			
			$(node).parent().find('div').html(`<center>
	                              	<strong>
									Earnning 	<br>
	                              	</strong>
	                              	
	                              	<span style='border-bottom:1px solid'>${price} * ${data.value} </span>
	                              	&nbsp;
	                              	<div style='margin: -5% 1% 1% 62%;'>= ${price*data.value/100}</div>
	                              	<div style='margin-top: -5%'>
	                              	100
	                              	</div>
	                              	
	                              
	                              </center> `);
		});
		
	}

	function block(id) {
		Swal.fire({
			title: 'Are you sure?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, Block it!'
		}).then((result) => {

			if (result.value) {

				$.ajax({
					url: `${url}/manage/gig/${id}/block`,
					type: 'get',
				});
						  	
				Swal.fire({
				 	type: 'success',
				   	title: 'Gig is blocked',
				   	onClose: () => {
			   		window.location.reload();
				   	} 
				});		  
			}

		});
	}
	function suspend(id) {
		Swal.fire({
	  	title: `Suspend Gig`,
	   	html:
	    `<input id="swal-input1" class="swal2-input"  type="text"  placeholder="Enter Suspend Days" autocomplete='off' required>
	    <textarea  id="region_of_suspension" class="swal2-input" rows="10" placeholder='
	    Enter Suspend Region' style='height:200px'></textarea>`,
		inputAttributes: {
		    autocapitalize: 'off'
		},
		showCancelButton: true,
		confirmButtonText: 'Suspend',
		showLoaderOnConfirm: true,
		cancelButtonColor: '#d33',
		preConfirm: (login) => {

  	  $.ajax({
  	  	headers: {
        'X-CSRF-Token': '{{ csrf_token() }}'
    	},
  	  	url: `{{ url('admin') }}/manage/gig/${id}/suspend`,
  	  	type: 'PUT',
  	  	dataType: 'json',
  	  	data: {
  	  		number_of_days: $("#swal-input1").val(),
    		region: $("#region_of_suspension").val()}
  	  })
  	  .always(function(e) {
  	  	if(!e.errors){
  	  		
			Swal.fire({
			  title: `Service is suspended till ${e.suspended_till} `,
			  onClose: () => {
			    window.location.reload();
			  }
			});
  	  	}else{

  	  		Swal.fire({
			  html: `${e.errors.number_of_days?e.errors.number_of_days:''}<br>${e.errors.region?e.errors.region:''}`,
			  onClose: () => {
			    suspendUser(id);
			  }
			});
  	  	}

  	  });
  }
});

	}

	function deleteGig(id) {
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
				  		url: `{{ url('admin/manage/gig/') }}/${id}/delete`,
				  		type: 'DELETE',
				  		data: {_token: '{{ csrf_token() }}'},
				  	});
				  	
				  	
				    Swal.fire({
				    	type: 'success',
				    	title: 'Service has been deleted.',
				    	onClose: () => {
			    			window.location.reload();
			  			}

				    });
				  }
		});
	}


$("#pagination_size").change(function(){

			$.get('{{route('admin.manage.gig.index')}}',{display:this.value}, function(data) {
				window.location.reload();
			});

		});
$("#status_action").change(function(e){

	e.preventDefault();
		$.get('{{route('admin.manage.gig.index')}}',{status_action:this.value}, function(data) {
				window.location.reload();
			});

})

	</script>
@endpush	

						<!-- end:: Content -->
					
@endsection