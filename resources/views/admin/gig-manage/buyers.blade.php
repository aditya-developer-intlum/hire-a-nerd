<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
												<th>S.NO</th>
												<th>Name</th>
												<th>Phone</th>
												<th>Email</th>
												<th>Package</th>
												<th>Price</th>
												<th width="13%">Status</th>
											</tr>
										</thead>
										<tbody>
										@foreach($orders as $key => $order)
											<tr>
												<td>{{ $key+1 }}</td>
												<td>{{ $order->user->name ??'' }}</td>
												<td>{{ $order->user->mobile_number ?? '' }}</td>
												<td>{{ $order->user->email ?? '' }}</td>
												<td>{{ ucfirst($order->package) ?? '' }}</td>
												<td>{{ $order->transaction->amount }}</td>
												<td>
								@if($order->is_accepted == true && $order->is_completed == false)

									<span class="kt-badge kt-badge--success kt-badge--dot"></span>
										&nbsp;
									<span class="kt-font-bold kt-font-success">Working ...</span>
								@elseif($order->is_accepted == true && $order->is_completed == true)

									<span class="kt-badge kt-badge--brand kt-badge--dot"></span>
										&nbsp;
									<span class="kt-font-bold kt-font-brand">Complete</span>

								@elseif($order->is_accepted == false && $order->is_completed == false)

									<span class="kt-badge kt-badge--dark kt-badge--dot"></span>
										&nbsp;
									<span class="kt-font-bold kt-font-dark">Pending</span>

								@endif

												</td>
											</tr>
										@endforeach
										
												
									
										
										
											
										</tbody>
										
									
</table>