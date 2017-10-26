<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShippingInfo;
use App\Product;
use App\Shipping;

class ShippingInfoController extends Controller
{
    public function store (Request $request){
        $info = new ShippingInfo;
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

        $shippings = Shipping::all();

        return view('session.shipping', compact('shippings'));
    }

    public function paymentDetails (){
    	$products = Product::all();
		return view('products.paymentDetails', compact('products'));

    }
}
