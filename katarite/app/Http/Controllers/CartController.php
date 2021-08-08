<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContractTalker;
use App\Mail\ContractCustomer;
class CartController extends Controller
{
    public function checkout(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken,
            ));
            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $request->price,
                'currency' => 'jpy'
            ));
            $to_talker = [
                [
                'email' => $request->email,
                'name' => '【From Katarite】相談を受けました。',
                ]
            ];
            $to_customer = [
                [
                'email' => $request->stripeEmail,
                'name' => '【From Katarite】契約が完了しました。',
                ]
            ];
            $inputs_talker = (array(
                'customer_email'=>$request->stripeEmail,
                'title'=>$request->title,
                'price'=>$request->price
            ));
            $inputs_customer=(array(
                'talker_email'=>$request->email,
                'talker_name'=>$request->talker_name,
                'title'=>$request->title,
                'price'=>$request->price
            ));
            Mail::to($to_talker)->send(new ContractTalker($inputs_talker));
            Mail::to($to_customer)->send(new ContractCustomer($inputs_customer));
            return view('cart.report');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
        return redirect()->route('items.index');
    }
}