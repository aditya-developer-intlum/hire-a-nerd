<?php

namespace App\Http\Controllers;

use Exception;
use App\Payment;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Customer;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        
        request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        /** I have hard coded amount. You may fetch the amount based on customers order or anything */
        $amount     = 1 * 100;
        $currency   = 'usd';

        if (empty(request()->get('stripeToken'))) {
            session()->flash('error', 'Some error while making the payment. Please try again');
            return back()->withInput();
        }
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        try {
            /** Add customer to stripe, Stripe customer */
            $customer = Customer::create([
                'email'     => request('email'),
                'name'  	=> request('name'),
                'source'    => request('stripeToken'),
                'address' => [
				    'line1' => '510 Townsend St',
				    'postal_code' => '98140',
				    'city' => 'San Francisco',
				    'state' => 'CA',
				    'country' => 'US',
  				]
            ]);
        } catch (Exception $e) {
            $apiError = $e->getMessage();
        }

        if (empty($apiError) && $customer) {
            /** Charge a credit or a debit card */
            try {
                /** Stripe charge class */
                $charge = Charge::create(array(
                    'customer'      => $customer->id,
                    'amount'        => $amount,
                    'currency'      => $currency,
                    'description'   => 'Some testing description'
                ));
            } catch (Exception $e) {
                $apiError = $e->getMessage();
            }

            if (empty($apiError) && $charge) {
                // Retrieve charge details 
                $paymentDetails = $charge->jsonSerialize();
                if ($paymentDetails['amount_refunded'] == 0 && empty($paymentDetails['failure_code']) && $paymentDetails['paid'] == 1 && $paymentDetails['captured'] == 1) {
                    /** You need to create model and other implementations */
                    /*
                    Payment::create([
                        'name'                          => request('name'),
                        'email'                         => request('email'),
                        'amount'                        => $paymentDetails['amount'] / 100,
                        'currency'                      => $paymentDetails['currency'],
                        'transaction_id'                => $paymentDetails['balance_transaction'],
                        'payment_status'                => $paymentDetails['status'],
                        'receipt_url'                   => $paymentDetails['receipt_url'],
                        'transaction_complete_details'  => json_encode($paymentDetails)
                    ]);
                    */
                    return redirect('/thankyou/?receipt_url=' . $paymentDetails['receipt_url']);
                } else {
                    session()->flash('error', 'Transaction failed');
                    return back()->withInput();
                }
            } else {
                session()->flash('error', 'Error in capturing amount: ' . $apiError);
                return back()->withInput();
            }
        } else {
            session()->flash('error', 'Invalid card details: ' . $apiError);
            return back()->withInput();
        }
    }

    public function thankyou()
    {
        return view('payments.thankyou');
    }
    public function transferPayment()
    {/*
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $payment_intent = PaymentIntent::create([
            'payment_method_types' => ['card'],
            'amount' => 1000,
            'currency' => 'inr',
            'transfer_data' => [
                'amount' => 877,
                'destination' => 'acct_1IOcXgPGJtPprJfm',
            ],
        ]);*/
      $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));
        /*$stripe->accounts->create([
          'type' => 'custom',
          'country' => 'US',
          'email' => 'reena.sea1316@gmail.com',
          'capabilities' => [
            'card_payments' => ['requested' => true],
            'transfers' => ['requested' => true],
          ],
        ]);*/
        /*$transfer = \Stripe\AccountLink::create([
            'account' => 'acct_1IOcXgPGJtPprJfm',
            'refresh_url' => 'https://example.com/reauth',
            'return_url' => 'https://example.com/return',
            'type' => 'account_onboarding',
        ]);*/
        $stripe->accounts->retrieve(
            'acct_1IOcXgPGJtPprJfm',
            []
        );
        $stripe->accounts->retrieveCapability(
              'acct_1GsXIYATE8vSaZpR',
              'card_payments',
            []
        );

       dd($stripe->coreServiceFactory->services);
    }
}