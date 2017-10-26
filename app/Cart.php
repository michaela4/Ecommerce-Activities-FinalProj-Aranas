<?php

namespace App;
use App\User;
//use App\CartItem;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

	protected $fillable = [
        'user_id'
    ];

    public function items(){
        return $this->belongsToMany(Productprice::class, 'cart_items', 'cart_id', 'product_id')
        ->withPivot('amount', 'quantity');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
