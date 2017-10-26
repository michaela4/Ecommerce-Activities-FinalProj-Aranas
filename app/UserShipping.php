<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; // added

class UserShipping extends Model
{
	protected $table = 'user_shippings';

    public function user(){
        return $this->belongsTo(User::class); // added 10/25
    }

}
