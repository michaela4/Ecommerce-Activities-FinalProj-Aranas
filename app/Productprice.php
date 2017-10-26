<?php

namespace App;

class Productprice extends Model
{
	protected $table = 'productprices';

	public function product(){
    	return $this->belongsTo(Product::class);
    }

    public function carts() {
    	return $this->belongsToMany(Cart::class, 'cart_items', 'product_id', 'cart_id');
    }
}
