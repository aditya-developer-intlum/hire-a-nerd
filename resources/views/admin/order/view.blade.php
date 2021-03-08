@extends('admin.layouts.app')
@section('contents')

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
						
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
										 <i class="la la-truck"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Manage Orders
										</h3>
									</div>
									
								</div>
	<div class="kt-portlet__body">
		<div class="row" style="padding-bottom: 20px">
			<div class='col-md-2 offset-md-3'>
				<button type="button" class="btn btn-dark" id="refresh">Refresh</button>
			</div>
			<div class="col-md-3">
														
					<div class="input-group">
				<div id="reportrange" class="form-control">
    <i class="fa fa-calendar"></i>&nbsp;
   
    <span></span> <i class="fa fa-caret-down"></i>

</div>
<input type="hidden" class="reportrange">
    <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon" id="search_date"><i class="fa fa-search"></i></button>
													
					</div>
				
			</div>
				<div class="col-md-2">
														
					<div class="input-group">
					<select name="status" id="status_action" class="form-control">
						<option value="" {{ Session::get('filter')==null?'selected':'' }}>Status</option>
						<option value="pending" {{ Session::get('filter')=='pending'?'selected':'' }}>Pending</option>
						<option value="progress" {{ Session::get('filter')=='progress'?'selected':'' }}>Progress</option>
						<option value="completed" {{ Session::get('filter')=='completed'?'selected':'' }}>Completed</option>
					</select>
													
					</div>
				
			</div>
			<div class="col-md-2">
				<form action="{{ route('admin.orders') }}">										
					<div class="input-group">
					<div class="input-group-prepend">
						<button class="btn btn-secondary" type="submit">Go!</button>
					</div>
					<input type="text" name='search' class="form-control" placeholder="Search for..."
					 value="{{ Session::get('order_search')??'' }}" autocomplete="off">
													
					</div>
				</form>
			</div>	

		</div>

									<!--begin: Datatable -->
		<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
			<div class="row">
				<div class="col-sm-12">
				<table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 1471px;">
										<thead>
	<tr role="row">
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Order Id
        </th>
		 <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" >
        	@sortablelink('gig.gig_title','Category')
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" >
        	@sortablelink('gig.sub_category','Sub Category')
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" >
        	@sortablelink('gig.gig_title','Title')
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Seller
        </th>
         <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Buyer
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Package
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Amount
        </th>
         <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Created At
        </th>
        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">
        	Status
        </th>

        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" >
        	Action
        </th>
	
    
	</tr>
	</thead>
		<tbody>
		@empty(!$orders)
			@foreach($orders as $key => $order)
				<tr>
					<td> {{ $order->id }} </td>
					<td> {{ $order->gig->menu->name }} </td>
					<td> {{ $order->gig->submenu->name }} </td>
					<td> {{ $order->gig->gig_title }}</td>
					<td> {{ $order->gig->user->name ?? '' }}</td>
					<td> {{ $order->user->name  ?? ''}}</td>
					<td> {{ ucfirst($order->package ?? '') }} </td>
					<td> ${{ $order->price ?? 0}}</td>
					<td> {{ date('d M Y',strtotime($order->created_at)) }}</td>
					<td>
								@if($order->is_accepted == true && $order->is_completed == false)

									<span class="kt-badge kt-badge--success kt-badge--dot"></span>
										&nbsp;
									<span class="kt-font-bold kt-font-success">Progress ...</span>
								@elseif($order->is_accepted == true && $order->is_completed == true)

									<span class="kt-badge kt-badge--brand kt-badge--dot"></span>
										&nbsp;
									<span class="kt-font-bold kt-font-brand">Completed</span>

								@elseif($order->is_accepted == false && $order->is_completed == false)

									<span class="kt-badge kt-badge--dark kt-badge--dot"></span>
										&nbsp;
									<span class="kt-font-bold kt-font-dark">Pending</span>

								@endif
					</td>
					<td>
						<a onclick="return window.open('{{ url(sprintf('%s/%s/%d',$order->gig->menu->slug,$order->gig->submenu->slug,$order->gig_id)) }}','_blank')" 
							class="btn btn-sm btn-clean btn-icon btn-icon-sm" 
							title="View">

							<i class="fa fa-expand"></i>
						</a>
						<a href="{{ route('admin.orders.payment',$order->id) }}" class="btn btn-sm btn-clean btn-icon" title="Payment" target="_blank">
							<i class="fa fa-credit-card"></i>
						</a>

					</td>
					
			

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
										{{$orders->firstItem()}} to {{$orders->lastItem()}}
    of  {{$orders->total()}} entries 
									</div>
								</div>
								<div class="col-sm-12 col-md-7 dataTables_pager" >
									<div class="dataTables_length" id="kt_table_1_length">
										<label>
											<select name="kt_table_1_length" aria-controls="kt_table_1" class="custom-select custom-select-sm form-control form-control-sm" id="pagination_size_order"> 
												
												<option value="10" {{ Session::get('pagination_orders')==10?'selected':'' }}>10</option>
												<option value="25" {{ Session::get('pagination_orders')==25?'selected':'' }}>25</option>
												<option value="50" {{ Session::get('pagination_orders')==50?'selected':'' }}>50</option>
												<option value="100" {{ Session::get('pagination_orders')==100?'selected':'' }}>100</option>
											</select>
										</label>
									</div>
									<div class="dataTables_paginate paging_simple_numbers" id="kt_table_1_paginate">
									{{ $orders->render() }}
										
									</div>
						</div></div></div>

									<!--end: Datatable -->
								</div>
							</div>
						</div>
@endsection
@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endpush
@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<script type="text/javascript">
			$("#status_action").change(function(e){
				e.preventDefault();
				$.get('', {search_status: this.value}, function(data, textStatus, xhr) {
					window.location.reload();
				});
			});
			$("#pagination_size_order").change(function(e) {
				e.preventDefault();
					
				$.post('', {pagination: this.value,_token:'{{ csrf_token() }}'}, function(data, textStatus, xhr) {
						window.location.reload();
				});
			});
	</script>
	<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        $('.reportrange').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    },cb);

    cb(start, end);

});
		$("#search_date").click(function(e){
			e.preventDefault();

			$.get('', {order_search_date: $('.reportrange').val()}, function(data, textStatus, xhr) {
				window.location.reload();
			});
		});

	$("#refresh").click(function(e){
		e.preventDefault();
		$.get('',{refresh:true},function(data) {
			window.location.reload();
		});
	});
	
		
</script>
@endpush