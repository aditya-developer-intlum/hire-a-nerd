@extends('admin.layouts.app')
  	@section('title','User')
@section('contents')

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="row">
		<div class="col-lg-12">
			<!--begin::Portlet-->
			<div class="kt-portlet">
				<div class="kt-portlet__body">
					<div class="form-group row">
				@if ($seller)
						<div class="col-lg-6">
						<strong>Seller Information</strong>
						<hr>
							<div class="col-lg-12">
								<label>Full Name:</label>
								<strong>{{ $seller->name ?? '' }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Email:</label>
								<strong>{{ $seller->email ?? '' }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Phone:</label>
								<strong>{{ $seller->mobile_number ?? '' }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Status:</label>
								<strong>{{ $seller->status?'Active':'Inactive'  }}</strong>
							</div>
						</div>
				@endif
				@if ($seller)
						<div class="col-lg-6">
							<strong>Buyer Information</strong>
							<hr>
							<div class="col-lg-12">
							<label>Full Name:</label>
							<strong>{{ $buyer->name ?? '' }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Email:</label>
								<strong>{{ $buyer->email ?? '' }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Phone:</label>
								<strong>{{ $buyer->mobile_number ?? '' }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Status:</label>
								<strong>{{ $buyer->status?'Active':'Inactive'  }}</strong>
							</div>
						</div>
				@endif
					</div>
				</div>
				
				<div class="kt-portlet__body">
					<div class="form-group row">
				@if ($payment)
						<div class="col-lg-6">
					<strong>Payment Information</strong>
					<hr>
							<div class="col-lg-12">
								<label>Stripe Id:</label>
								<strong>{{ $payment->stripe_id ?? '' }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Amount:</label>
								<strong>$ {{ $payment->amount ?? '' }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Description:</label>
								<strong>{{ $payment->description ?? '' }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Receipt Url: </label>

								<a href="{{ $payment->receipt_url }}" target="_blank"> Invoice</a>
							</div>
							<div class="col-lg-12">
								<label>Status: </label>
								<strong>{{ ucfirst($payment->status?? '') }}</strong>
							</div>
						</div>
				@endif
				@if ($order)
						<div class="col-lg-6">
							<strong>Order Information</strong>
							<hr>
							<div class="col-lg-12">
							<label>Package:</label>
							<strong>{{ ucfirst($order->package ?? '') }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Total Price:</label>
								<strong>$ {{ $order->total_price ?? '' }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Admin Commission:</label>
								<strong>{{ $order->total_price - $order->price  }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Seller Income: </label>

								<strong>{{ $order->price  }}</strong>
							</div>
							<div class="col-lg-12">
								<label>Delivered At: </label>
								<strong>{{ $order->delivered_at?$order->delivered_at->format('Y-m-d') : 'Not Delivered'}}</strong>
							</div>
						</div>

					</div>
				</div>
				@endif
			
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-lg-6 kt-align-right">
								<a  href='{{ url()->previous() }}' class="btn btn-danger">Back</a>
							</div>
						</div>
					</div>
				</div>
					<!--end::Form-->
			</div>
				<!--end::Portlet-->
		</div>
	</div>
</div>

@push('scripts')
    <script >
@if(Session::has('success'))
			Swal.fire({
			  type: 'success',
			  title: '{{ Session::get('success') }}',
			});
@endif
    </script>
@endpush

@endsection