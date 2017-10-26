<?php

namespace App;

class Product extends Model
{
    public function productPrices(){
        return $this->hasMany(Productprice::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cartItem(){
        return $this->hasMany(CartItem::class);
    }
}
