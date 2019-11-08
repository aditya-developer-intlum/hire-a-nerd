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
											Press And News
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												
												&nbsp;
												<a href="{{ route('admin.pages.press-and-news.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													New Record
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
												<th>Title</th>
												<th>Description</th>
												<th width="13%">Image</th>
												<th width="10%">Created Date</th>
												
												<th>Status</th>
												
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
										@foreach($news as $key => $_news)
											<tr>
												<td>{{ $key+1 }}</td>
												<td>{{ $_news->title ?? '' }}</td>
												<td>{!! Str::limit($_news->description ?? '',200) !!}</td>
												<td>
														<img src="{{ asset("public/storage/$_news->picture") }}" alt="" width="13%">
													</td>
												<td>{{ date('d M Y',strtotime($_news->created_at)) }}</td>
												<td>
													<span class="kt-badge  kt-badge--{{ $_news->is_active==1 ? 'primary':'danger' }} kt-badge--inline kt-badge--pill">
														{{ $_news->is_active==1 ? 'Active':'Deactive' }}</span>
												</td>
												<td>
													<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                           		
                           		<a href="{{ route('admin.pages.press-and-news.status',[$_news->id]) }}" class="dropdown-item" ><i class="fa fa-toggle-{{ $_news->is_active==1 ? 'on':'off' }}"></i> {{ $_news->is_active==1 ? 'Active':'Deactive' }}</a>
                                <a href="{{ route('admin.pages.press-and-news.edit',[$_news->id]) }}" class="dropdown-item" ><i class="la la-edit"></i> Edit</a>
                                <a href="#" onclick="return deleteNews('{{ $_news->id }}')" class="dropdown-item" ><i class="la la-trash"></i> Delete</a>
                            
							
                            </div>
                            
                        </span>
												</td>
											</tr>
										@endforeach
											
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
    	function deleteNews(id) {
    	
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
				  		url: `{{ url('admin/pages/press-and-news/') }}/${id}`,
				  		type: 'DELETE',
				  		data: {_token: '{{ csrf_token() }}'},
				  	});
				  	
				    Swal.fire({
					   	 	type: 'success',
						   	title: 'Deleted',
						   	onClose: () => {
						   		window.location.reload();
						   	} 
					});
				   
				    
				  }
		});

				return false;
    	}
    </script>
@endpush