<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use Stripe\Charge;
use Mail;
use Cart;
use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('checkout');
    }

    public function pay(){
       Stripe::setApiKey("sk_test_US5yv2r8DMkyeCzfxRfqx3xo");
       $token = request()->stripeToken;

       $charg = Charge::create([
           'amount' => Cart::total() * 100,
           'currency' => 'usd',
           'description' => 'books store ',
           'source' => $token,
       ]);

       //dd('your request is charged successfully');
        Session::flash('success','your purchase successfully check your email');
        Cart::destroy();
                                            // PurchaseSuccessful() if you have phramters
        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);
        # set the mailtrap.io first to recive the emails
        return redirect()->back();
    }
}
