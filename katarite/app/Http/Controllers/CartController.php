<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
class CartController extends Controller
{
    public function checkout(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $customer = Customer::create(array(
                'email' => $request->email,
                'source' => $request->stripeToken,
            ));
            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $request->price,
                'currency' => 'jpy'
            ));
            return view('cart.report');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return redirect('/');
    }
}