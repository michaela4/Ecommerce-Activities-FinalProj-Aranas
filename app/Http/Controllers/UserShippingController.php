<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserShipping;
use App\Product;
use App\BillingInfo;
use App\ShippingInfo;


class UserShippingController extends Controller
{
    public function store (Request $request){
    	$shipMethod = new UserShipping;
        $shipMethod->name = $request->name;
        $shipMethod->description = $request->description;
        $shipMethod->price = $request->price;
        $shipMethod->additional_description = $request->additional_description;

        $shipMethod->user_id = auth()->id(); // just added to test

        $shipMethod->save();

        // For cart contents
        $userCart = auth()->user()->carts()->first();
        $cartItems = $userCart->items;
        $totalAmount = $userCart->items->sum('pivot.amount');
        $product = Product::all();

        // for billing and shipping contents
        $billingInfos = BillingInfo::all();
        $shippingInfos = ShippingInfo::all();

    	return view ('session.reviewOrder', compact('shipMethod', 'cartItems', 'totalAmount', 'product', 'billingInfos', 'shippingInfos'));
    }

    public function finish (Request $request){
        return view ('session.checkOutComplete');
    }
}
