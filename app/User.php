<?php

namespace App;
use App\Cart;
use App\BillingInfo;
use App\ShippingInfo;
use App\UserShipping;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function userShipping(){
        return $this->hasOne(UserShipping::class);   //recently added
    }

    public function shippingInfo(){
        return $this->hasOne(ShippingInfo::class);   //recently added
    }

    public function billingInfo(){
        return $this->hasOne(BillingInfo::class);   //recently added
    }
}
