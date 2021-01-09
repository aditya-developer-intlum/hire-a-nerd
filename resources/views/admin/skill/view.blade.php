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
											Skills
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">

												
												&nbsp;
											@can('create',App\Models\Skill::class)
												<a href="#" id="addSkill" class="btn btn-brand btn-elevate btn-icon-sm">
													 <i class="la la-bullseye"></i>
													New Skill
												</a>
											@endcan
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
									{{-- <div class="row">
										<div class="col-md-2 offset-md-10">
											<form action="{{ route('admin.skill.index') }}">
												
											
											<div class="input-group">
													<div class="input-group-prepend">
															<button class="btn btn-secondary" type="submit">Go!</button>
													</div>
														<input type="text" name='search' class="form-control" placeholder="Search for..." value="{{ Session::get('search_skill')??'' }}" autocomplete="off">
													
											</div>
											</form>
										</div>	

									</div> --}}

									<!--begin: Datatable -->
									<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12">
	<table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="skill" role="grid" aria-describedby="kt_table_1_info" style="width: 1471px;">
										<thead>
	<tr role="row">
		 <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" width="20%">
        	Serial No.
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Name
        </th>
   @canany(['update','delete'],App\Skill::class)
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" width="20%">
        	Action
        </th>
    @endcanany

	</thead>
		<tbody>
	
		@foreach($skill as $index => $_skill)
			<tr>
				<td>{{ ++$index  }}</td>
				<td>{{ $_skill->name }}</td>
			@canany(['update','delete'],App\Models\Skill::class)
				<td>
				@can('update',App\Models\Skill::class)
					<a title="Edit" onclick="editSkill('{{ $_skill->id }}')" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
						<i class="la la-edit"></i> 
					</a>
				@endcan
				@can('delete',App\Models\Skill::class)
					<a title="Delete" onclick="deleteSkill('{{ $_skill->id }}')" class="btn btn-sm btn-clean btn-icon btn-icon-sm"> 
						<i class="la la-trash"></i> 
					</a>
				@endcan		
				</td>
			@endcanany
			</tr>
		@endforeach

	</tbody>
									</table>
								</div>
							</div>
							{{-- <div class="row">
								<div class="col-sm-12 col-md-5" >
									@if ($skill->firstItem())
									
									
									<div class="dataTables_info" id="kt_table_1_info" role="status" aria-live="polite">Showing 
										{{ $skill->firstItem() }} to {{$skill->lastItem() }}
    of  {{$skill->total()}} entries
									</div>
									@endif
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
									{{ $skill->links() }}
										
									</div>
						</div></div> --}}</div>

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
$(document).ready(function(){
	$("#skill").dataTable();
});
	</script>
@endpush	

						<!-- end:: Content -->
					
@endsection