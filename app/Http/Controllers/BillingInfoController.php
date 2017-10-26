<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BillingInfo;
use App\Product;

class BillingInfoController extends Controller
{
    public function store (Request $request){
        $info = new BillingInfo;
        $info->country = $request->country;
        $info->full_name = $request->full_name;
        $info->address = $request->address;
        $info->surburb = $request->surburb;
        $info->city = $request->city;
        $info->province = $request->province;
        $info->postal_code = $request->postal_code;
        $info->phone = $request->phone;

        $info->user_id = auth()->id(); // just added to test
        
        $info->save();

        return view('session.shippingInfo');
    }

    public function paymentDetails (){
    	$products = Product::all();
		return view('products.paymentDetails', compact('products'));

    }
}
