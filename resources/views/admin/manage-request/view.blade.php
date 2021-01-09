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
											Manage Requests
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">

											
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
									<div class="row" style="padding-bottom: 20px">
										<div class="col-md-2 offset-md-10">
																		
											<div class="input-group">
<form id="status_form">
<select name="status" id="status_action" class="form-control">
	<option value=""  {{ request()->status == null?'selected':'' }}>Status</option>
	<option value="1" {{ request()->status == 1?'selected':'' }}>Paused</option>
	<option value="2" {{ request()->status == 2?'selected':'' }}>Pending</option>
	<option value="3" {{ request()->status == 3?'selected':'' }}>Unapproved</option>
	<option value="4" {{ request()->status == 4?'selected':'' }}>Active</option>
</select>
</form>
																			
											</div>
										
										</div>
				
									</div>

									<!--begin: Datatable -->
									<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 1471px;">
										<thead>
	<tr role="row">
		 <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="" >
        	S No.
        </th>
        <th>
        	@sortablelink('category.name','Category')
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" >
        	@sortablelink('subCategory.name','Sub Category')
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" >
        	@sortablelink('description')
        </th>
         <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" >
        	@sortablelink('deliver_time','Deliver In')
        </th>
         <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" >
        	@sortablelink('budget')
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" >
        	Attachment
        </th>
        <th>@sortablelink('status')</th>
   
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="" width="20%">
        	Action
        </th>
   

	</thead>
		<tbody>
	
		@foreach($postrequests as $index => $request)
			<tr>
				<td>{{ $index + $postrequests->firstItem()}}</td>
				<td>{{ $request->category()->first()->name ?? '' }}</td>
				<td>{{ $request->subCategory()->first()->name ?? '' }}</td>
				<td>{{ $request->description ?? '' }}</td>
				<td>{{ $request->deliver_time>1?sprintf("%s days",$request->deliver_time ?? 1):sprintf("%s day",$request->deliver_time) ?? 1}}</td>
				<td>${{ $request->budget ?? ''}}</td>
				<td>@if ($request->attachment)
						<a href="{{ $request->attachment ?? '' }}" target="_blank">Attachment</a>
					@endif
				</td>
				<td><span class="@switch($request->status)
						    @case(4)
						        text-success
						        @break
						    @case(1)
						        text-primary
						        @break
						    @case(2)
						        text-warning
						        @break
						    @case(3)
						        text-danger
						        @break
						@endswitch">
						@switch($request->status)
						    @case(4)
						        Active
						        @break
						    @case(1)
						        Paused
						        @break
						    @case(2)
						        Pending
						        @break
						    @case(3)
						        Unapproved
						        @break
						@endswitch
						
				
				</span></td>
				<td>
					<select data-id="{{ $request->id }}" class="form-control action">
						<option value=""></option>
						<option value="4">Active</option>
						<option value="1">Paused</option>
						<option value="2">Pending</option>
						<option value="3">Unapproved</option>
					</select>
				</td>
				
			</tr>
		@endforeach

	</tbody>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-5" >
									<div class="dataTables_info" id="kt_table_1_info" role="status" aria-live="polite">Showing 
										{{ $postrequests->firstItem()}} to {{$postrequests->lastItem()}}
    of  {{$postrequests->total()}} entries
									</div>
								</div>
								<div class="col-sm-12 col-md-7 dataTables_pager" >
									<div class="dataTables_length" id="kt_table_1_length">
										<label>
											<select name="kt_table_1_length" aria-controls="kt_table_1" class="custom-select custom-select-sm form-control form-control-sm" id="pagination_size"> 
												
												<option value="10" {{ Session::get('skill_table_size')==10?'selected':'' }}>10</option>
												<option value="25" {{ Session::get('skill_table_size')==25?'selected':'' }}>25</option>
												<option value="50" {{ Session::get('skill_table_size')==50?'selected':'' }}>50</option>
												<option value="100" {{ Session::get('skill_table_size')==100?'selected':'' }}>100</option>
											</select>
										</label>
									</div>
									<div class="dataTables_paginate paging_simple_numbers" id="kt_table_1_paginate">
									{{ $postrequests->links() }}
										
									</div>
						</div></div></div>

									<!--end: Datatable -->
								</div>
							</div>
						</div>

@push('scripts')
	<script>
		const url = '{{ url('admin') }}';

		function setSkill(title,value,button,url,method,message) {
			Swal.fire({
				  title: `${title}`,
				  input: 'text',
				  inputValue: `${value}`,
				  inputAttributes: {
				    autocapitalize: 'off',
				    placeholder:'Enter Skill'
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
						   		setSkill(title,value,button,url,method,message);
						   	} 
					    });
				   });
				  },
			});
		}


		$("#addSkill").click(function(e){
			e.preventDefault();
			setSkill('Add Skill','','Submit','{{ route('admin.skill.store') }}','POST','Skill is saved');
		})
		


		function editSkill(id) {
		
			$.get(`${url}/skill/${id}/edit`, function(data) {

				setSkill('Update Skill',`${data.name}`,'Update',`${url}/skill/${id}`,'PUT','Skill is updated');
			});
		}

		function deleteSkill(id) {
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
						  		url: `${url}/skill/`+id,
						  		type: 'DELETE',
						  		data: {_token: '{{ csrf_token() }}'},
						  	});
						  	
						  	
						  Swal.fire({
					   	 	type: 'success',
						   	title: 'Skill has been Deleted',
						   	onClose: () => {

						   		window.location.reload();
						   	} 
						});
							  
						  }
			});
		}

$("#pagination_size").change(function(){

			$.get('{{route('admin.skill.index')}}',{display:this.value}, function(data) {
				window.location.reload();
			});

		});

	</script>

	<script>
		
		$(document).on('change','.action',function(e){
				e.preventDefault();
				$.post('{{ route('admin.manage.request.action') }}', {status: this.value,id:$(this).data('id')}, function(data, textStatus, xhr) {
					window.location.reload();
				});
		});

		$(document).on('change','#status_action',function(e){
			e.preventDefault();
			$("#status_form").submit();
		});
		
	</script>
@endpush	

						<!-- end:: Content -->
					
@endsection