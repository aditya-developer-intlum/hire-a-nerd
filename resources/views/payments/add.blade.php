@extends('layouts.app')

@section("content")

<main class="_main">  
        
         <!-- Begin:  Section-->
         <section class="sec-2 _commonPadding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                    	@if (session()->has('error'))
                			<div class="text-danger font-italic">{{ session()->get('error') }}</div>
           				@endif
                        <div class="_payCard">
                            <div class="_payHdr">
                                <p class="_title-3">Credit and Debit Card </p>
                            </div>
                             <form action="{{ url('payments') }}" method="post" id="payment-form">
                             	@csrf
                             	<input type="hidden" name="gigId" value="{{ $gigId }}">
                             	<input type="hidden" name="package" value="{{ $package }}">
                                <div class="_payBody">
                                    <div class="_pForm row">
                                        <div class="col-lg-6 col-md-12 form-group">
                                            <label for="">Card Number</label>
                                            <div id="paymentResponse" class="text-danger font-italic"></div>
                        					<div id="card_number" class="field form-control"></div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 form-group">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="">Expiration Date</label>
                                                    <div id="card_expiry" class="field form-control"></div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="">
                                                        Security Code 
                                                        <span class="_infoOnHover"  data-title="3 digit number located on the back of your credit card or debit card.">?</span>
                                                    </label>
                                                    <div id="card_cvc" class="field form-control"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 form-group">
                                            <label for="">Full Name</label>
                                            @error('name')
                        						<div class="text-danger font-italic">{{ $message }}</div>
                        					@enderror
                                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                        </div>
                                        <div class="col-lg-6 col-md-12 form-group">
                                            <label for="">Email</label>
                                            @error('email')
                        						<div class="text-danger font-italic">{{ $message }}</div>
                        					@enderror
                                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>
                            </form>                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="_payConfirmPack">
                            <div class="_pcTop">
                                <div class="_pcTopHdr">
                                    <span class="_image img-thumbnail"><img src="{{ asset("public/storage/$service->gig_photo_one") }}" alt="" width="300px"></span>
                                    {{ $service->gig_title ?? '' }}
                                </div>
                                <div class="_pcTopBtm">
                                    <p class="d-flex justify-content-between"><strong>{{ strtoupper($package ?? '') }} </strong><span>${{ number_format($amount,2) }} </span></p>
                                    <ul class="_list-1-green">  
                                    	@foreach ($scopes as $scope)
                                        	<li> {{ $scope }} </li>
                                        @endforeach                                      
                                    </ul>
                                </div>                                
                            </div>
                           
                            <div class="_pcBtm">
                        
                                <p class="d-flex justify-content-between"><strong>Total</strong><strong>${{ number_format($amount,2) }} </strong></p>
                                <p class="d-flex justify-content-between"><span>Total Delivery Time</span><span>{{ $deliveryTime }} Days</span></p>
                                <button class="btn _btn" id="confirm_pay">Confirm & Pay</button>
                              
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End  :  Section-->
    </main>

@push('script')

<script src="https://js.stripe.com/v3/"></script>
<script>
    // Create an instance of the Stripe object
    // Set your publishable API key
    var stripe = Stripe('{{ env("STRIPE_PUBLISH_KEY") }}');

    // Create an instance of elements
    var elements = stripe.elements();

    var style = {
        base: {
            fontWeight: 400,
            fontFamily: '"DM Sans", Roboto, Open Sans, Segoe UI, sans-serif',
            fontSize: '16px',
            lineHeight: '1.4',
            color: '#1b1642',
            padding: '.75rem 1.25rem',
            '::placeholder': {
                color: '#ccc',
            },
        },
        invalid: {
            color: '#dc3545',
        }
    };

    var cardElement = elements.create('cardNumber', {
        style: style
    });
    cardElement.mount('#card_number');

    var exp = elements.create('cardExpiry', {
        'style': style
    });
    exp.mount('#card_expiry');

    var cvc = elements.create('cardCvc', {
        'style': style
    });
    cvc.mount('#card_cvc');

    // Validate input of the card elements
    var resultContainer = document.getElementById('paymentResponse');
    cardElement.addEventListener('change', function (event) {
        if (event.error) {
            resultContainer.innerHTML = '<p>' + event.error.message + '</p>';
        } else {
            resultContainer.innerHTML = '';
        }
    });

    // Get payment form element
    var form = document.getElementById('payment-form');

    // Create a token when the form is submitted.
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        createToken();
    });

    // Create single-use token to charge the user
    function createToken() {
        stripe.createToken(cardElement).then(function (result) {
            if (result.error) {
                // Inform the user if there was an error
                resultContainer.innerHTML = '<p>' + result.error.message + '</p>';
            } else {
                // Send the token to your server
                stripeTokenHandler(result.token);
            }
        });
    }

    // Callback to handle the response from stripe
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }

    $('.pay-via-stripe-btn').on('click', function () {
        var payButton   = $(this);
        var name        = $('#name').val();
        var email       = $('#email').val();

        if (name == '' || name == 'undefined') {
            $('.generic-errors').html('Name field required.');
            return false;
        }
        if (email == '' || email == 'undefined') {
            $('.generic-errors').html('Email field required.');
            return false;
        }

        if(!$('#terms_conditions').prop('checked')){
            $('.generic-errors').html('The terms conditions must be accepted.');
            return false;
        }
    });
    $("#confirm_pay").click(function(){
    	createToken();
    });

</script>
@endpush

@endsection