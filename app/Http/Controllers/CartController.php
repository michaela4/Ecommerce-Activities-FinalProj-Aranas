<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Productprice;

class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $userCart = auth()->user()->carts()->first();
        $cartItems = $userCart->items;
        $totalAmount = $userCart->items->sum('pivot.amount');

        return view('products.shoppingCart', compact('cartItems', 'totalAmount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {   
        $userCart = auth()->user()->carts()->first();
        $cartItems = $userCart->items();
        $price = Productprice::find($request->price_id)->price;
        $totalPrice = $price * $request->quantity;
   
        $cartItems->syncWithoutDetaching([$request->price_id => [
            'quantity'=>$request->quantity, 
            'amount'=>$totalPrice,
            ]]);
        return redirect('cart')->withSuccessMessage('This item is added to your cart.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userCart = auth()->user()->carts()->first();
        $cartItem = $userCart->items()->detach($id);
        return redirect('cart')->withSuccessMessage('Your item has been removed!');
    }

    public function clear()
    {
        $userCart = auth()->user()->carts()->first();
        $cartItem = $userCart->items()->detach();
        return redirect('cart')->withSuccessMessage('There are no more items in your cart.');
    }
}
