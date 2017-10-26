<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Productprice;
use App\CartItem;

class ProductsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show', 'showList', 'addProduct']);
    }

    public function index(){
        return view('products.index');
    }

    public function show($id){
    	$product = Product::find($id);
    	return view('products.show', compact('product'));
    }

    public function showList(){
        $products = Product::all();
        return view('products.productList', compact('products'));
    }
    
    // public function addProduct (Request $request){
    //     $product = new CartItem;
    //     $product->cart_id = $request->cart_id;
    //     $product->id = $request->product_id;
    //     $product->product_id = $request->product_id;
    //     $product->quantity = $request->quantity;
    //     $product->amount = $request->amount;
    //     $product->barcode = $request->barcode;
    //     $product->save();

    //     $cartItems = CartItem::all();
    //     return view('products.shoppingCart', compact('cartItems'));
    // } 

    // public function deleteProduct (Request $request, $id){
    //     $product = CartItem::find($id);
    //     dd($product);
    //     $product->delete();

    //     return redirect('/shoppingCart');
    // }
}
