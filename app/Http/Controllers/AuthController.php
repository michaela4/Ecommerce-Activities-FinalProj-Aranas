<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;

class AuthController extends Controller
{ 
   public function register (){
        $cart = new Cart; // equal to userId
        $cart->user_id = User::pluck($id);
        $cart->save();
    } 
}
