<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use Stripe\Stripe;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function showPlans()
    {
        $plans = \App\Models\Plan::all();
        return view('subscription', compact('plans'));
    }
    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $price = $request->input('price');
        $planId = $request->input('plan_id');
        $user = Auth::user();
        $customerName = $user->name;
        $customerEmail = $user->email;

        try {
            $checkoutSession = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => "Membership Plan #{$planId}",
                            ],
                            'unit_amount' => $price,
                        ],
                        'quantity' => 1,
                    ],
                ],
                'customer_email' => $customerEmail,
                'mode' => 'payment',
                'success_url' => url('checkout.success', ['plan_id' => $planId]),
                'cancel_url' => url('checkout.cancel'),
            ]);

            return response()->json(['url' => $checkoutSession->url]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
    public function checkoutSuccess(Request $request)
    {
        if (Auth::check()) {
            return redirect(url('/add-story'));
        } else {
            return redirect(url('/login'))->with('status', 'Please log in to access the add-story page.');
        }
    }
}
