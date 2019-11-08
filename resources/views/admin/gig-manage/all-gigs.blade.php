<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
												<th>S.NO</th>
												<th>Category</th>
												<th>Sub Category</th>
												<th>Total Earning</th>
												<th>Title</th>
												
												
												<th width="13%">Status</th>
												
												<th width="10%">Actions</th>
											</tr>
										</thead>
										<tbody>
										@foreach($gig->user->gig as $key => $gig)
											<tr>
												<td>{{ $key+1 }}</td>
												<td>{{ $gig->menu->name }}</td>
												<td>{{ $gig->submenu->name }}</td>
												<td>{{ $gig->user->sellerTransaction->where('gig_id',$gig->id)->sum('amount') }}</td>
												<td>{{ $gig->gig_title }}</td>
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
								<span class="kt-font-bold kt-font-dark">Suspend</span>
								<span class="dropdown">
	                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
	                              <i class="la la-info-circle"></i>
	                            </a>
	                            <div class="dropdown-menu dropdown-menu-right">
	                              <center>
	                              	<div class="container">
	                              	<span>
	                              		Gig Suspended till <br>{{ date('d M Y',strtotime($gig->suspended_till)) }}
	                              	</span>
	                              		
	                              	</div>
	                              </center> 
	                            </div>
	                            
	                        </span>
								
							@break
						@endswitch</td>
												<td>
											 <a onclick="return window.open('{{ url(sprintf('%s/%s/%d',$gig->menu->slug,$gig->submenu->slug,$gig->id)) }}','_blank')" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="view">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Bound" points="0 0 24 0 24 24 0 24"/>
        <path d="M10.5857864,12 L5.46446609,6.87867966 C5.0739418,6.48815536 5.0739418,5.85499039 5.46446609,5.46446609 C5.85499039,5.0739418 6.48815536,5.0739418 6.87867966,5.46446609 L12,10.5857864 L18.1923882,4.39339828 C18.5829124,4.00287399 19.2160774,4.00287399 19.6066017,4.39339828 C19.997126,4.78392257 19.997126,5.41708755 19.6066017,5.80761184 L13.4142136,12 L19.6066017,18.1923882 C19.997126,18.5829124 19.997126,19.2160774 19.6066017,19.6066017 C19.2160774,19.997126 18.5829124,19.997126 18.1923882,19.6066017 L12,13.4142136 L6.87867966,18.5355339 C6.48815536,18.9260582 5.85499039,18.9260582 5.46446609,18.5355339 C5.0739418,18.1450096 5.0739418,17.5118446 5.46446609,17.1213203 L10.5857864,12 Z" id="Combined-Shape" fill="#000000" opacity="0.3" transform="translate(12.535534, 12.000000) rotate(-360.000000) translate(-12.535534, -12.000000) "/>
        <path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>


											 



											 </a>

											 <a href="" title="Review & Rating" cclass="btn btn-sm btn-clean btn-icon btn-icon-sm">
											 	
											 	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
        <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" id="Star" fill="#000000"/>
    </g>
</svg>
											 </a>
											 <a href="{{ route('admin.manage.gig.sellerDetail',[$gig->id,'buyers']) }}" title="Buyers" cclass="btn btn-sm btn-clean btn-icon btn-icon-sm">
											 	
											 	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>
											 </a>
												</td>
											</tr>
										@endforeach
										
												
									
										
										
											
										</tbody>
										<tr>
	
										
										
										<th colspan="3">Total Earning</th>
										<th colspan="4">{{ $gig->user->sellerTransaction->where('ledger','cr')->sum('amount')  }}$</th>
										

										</tr>
									<!-- 	<tr>
										
									
									
									<th colspan="3">Total Transaction</th>
									<th colspan="4">100$</th>
									
									
									</tr>
									<tr>
										
									
									
									<th colspan="3">Total Balance</th>
									<th colspan="4">100$</th>
									
									
									</tr> -->
									</table>