<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; // added

class ShippingInfo extends Model
{	
	protected $table = 'shipping_infos';

    public function user(){
        return $this->belongsTo(User::class);  // recently added *
    }
}
