<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Productprice;
use App\Product;

class CartItem extends Model
{
	protected $table = 'cart_items';
    use SoftDeletes;

    // public function cart(){
    //     return $this->belongsTo(Cart::class);
    // }

    // public function product(){
    //     return $this->hasMany(Product::class);
    // }

    // public function productPrice(){
    //     return Productprice::where('product_id', $this->product_id)->first()->price;
    // }

    // public function productName(){
    //     return Product::where('id', $this->product_id)->first()->name;
    // }
}
